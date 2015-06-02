    
	var timeAnimation=500; 	             
        function onClickMainPageLink(e){
               targetUrl=url+e.getAttribute("href");
               goToUrl(targetUrl);

                updateProfil();               
        }

        function goToUrl(targetUrl){
            $.ajax({
                url : targetUrl,
                type : 'POST',
                data:'ajax=1',
                dataType : 'html',
                success : function(code_html, statut){ 
                    $("#mainpage").hide(timeAnimation,function(){
                        $("#mainpage").html(code_html);
                        $("#mainpage").show(timeAnimation);
                    });

                     window.history.pushState({"html":code_html,"pageTitle":"Inscription"},"", targetUrl);

                }
             });
        }

$(function()
{
	

	$("#navbar_btn .btn").click(
		function(e){
                       goToUrl(url+"/home/departement/"+$(e.target).html());
                       color_departement=window.getComputedStyle(e.target).getPropertyValue('background-color');
                        if($("#navbar").css("background-color")===color_departement)
                            return;
                        var classElem = document.getElementsByClassName("departement_color");
                        $(classElem).each(function(){

                                    $(this).animate({
                                                        backgroundColor:"#FFFFFF"
                                                }, timeAnimation,function(){
                                                                        $(this).animate({
                                                                                backgroundColor:color_departement
                                                                                }, timeAnimation);
                                                                        }
                                    );
                        });
                        var classElem = document.getElementsByClassName("departement_color_border");
                        $(classElem).each(function(){

                                    $(this).animate({
                                                        borderColor:"#FFFFFF"
                                                }, timeAnimation,function(){
                                                                        $(this).animate({
                                                                                borderColor:color_departement
                                                                                }, timeAnimation);
                                                                        }
                                    );
                        });
                        $.post(
                            url+"home/changeColor", 
                            {
                                ajax:true,
                                color_departement:color_departement
                            },
                            function(cs){
                                console.log(cs);
                            },
                            'text'
                        );
		}	
	);


        $('body').on('click', '.mainpage-link',
                function(e){
                   var target = e.target;
                   while(!target.classList.contains("mainpage-link")){
                       target=$(target).parent()[0];
                   }
                  onClickMainPageLink(target);  
                }
               
        );
       
        $(function()
            {
                var hidden = true;
                
                    $('#header_user').on('click', '#connexion',
                        function(){
                            if(hidden)
                            $("#entete_connexion").show(timeAnimation);
                        
                            else{
                                var salt = Math.random();
                                var mdp = sha1(sha1($("#mdp_connexion").val()+$("#mail_connexion").val())+salt);
                                $("#entete_connexion").hide(timeAnimation);
                                $("#entete_inscription").hide(timeAnimation);
                                $("#entete_profil").show(timeAnimation);     
                                $.post(
                                    url+"connexion/connect", 
                                    {
                                        salt:salt,
                                        mail:$("#mail_connexion").val(),
                                        mdp:mdp,
                                        ajax:true
                                    },
                                    function(cs){
                                            $("#header_user").hide(timeAnimation,function(){
                                                $("#header_user").html(cs);
                                                $("#entete_connexion").show(0);
                                                $("#header_user").show(timeAnimation);
                                            });                                        
                                        
                                        
                                    },
                                    'text'
                                );

                            }
                        
                            hidden = !hidden;
                        }
                    );
            }       
        );

}

);

$(document).on("submit", "#form_inscription_utilisateur", function (e) {
        $.post(
            url+'inscription/validation', 
            {
                ajax : true,
                email : $("#email").val(),  
                password : $("#password").val(),
                nom : $("#nom").val(),
                prenom : $("#prenom").val(),
                birthdate : $("#birthdate").val(),
                profact : $("#profact").val(),
                profant : $("#profant").val(),
                TCcheck : $("#TCcheck")[0].checked,
                GEACheck : $("#GEACheck")[0].checked,
                MMICheck : $("#MMICheck")[0].checked,
                INFOCheck : $("#INFOCheck")[0].checked,
                SEPIACheck : $("#SEPIACheck")[0].checked,
                PROFCheck : $("#PROFCheck")[0].checked,
                entree : $("#entree").val(),
                sortie : $("#sortie").val(),
                accept : $("#accept")[0].checked,
                entreprise: false
                
            },

            function(data){ 
                $("#mainpage").hide(timeAnimation,function(){
                    $("#mainpage").html(data);
                    $("#mainpage").show(timeAnimation);
                });
            },

            'text'
        );
    return false;
});

$(document).on("submit", "#form_inscription_entreprise",function(e){
        $.post(
            url+'inscription/validation', 
            {
                ajax : true,
                email : $("#email").val(),  
                password : $("#password").val(),
                nomentre : $("#nomentre").val(),
                numSiret : $("#numSiret").val(),
                secteurAct : $("#secteurAct").val(),
                pays : $("#pays").val(),
                ville : $("#ville").val(),
                CP : $("#CP").val(),
                adresse : $("#adresse").val(),
                compAddr1 : $("#compAddr1").val(),
                compAddr2 : $("#compAddr2").val(),
                tel : $("#tel").val(),
                accept : $("#accept")[0].checked,
                entreprise: true
                
            },

            function(data){ 
                $("#mainpage").hide(timeAnimation,function(){
                    $("#mainpage").html(data);
                    $("#mainpage").show(timeAnimation);
                });
            },

            'text'
        );
    return false;
});

function putBottom(e){
    alert("k");
    e.scrollTop = e.scrollHeight;
}

    function updateProfil(){
        if(document.getElementById("entete_profil")!==null){
             $.post(
                url+"connexion/updateProfil", 
                {
                    ajax:true
                },
                function(cs){
                    $("#header_user").html(cs); 
                    console.log("update");
                },
                'text'
            );
        }
    }
    var interval = setInterval(updateProfil,6000);
    
$('body').on('click', '#send_btn_conversation',
                function(){
                    var urltmp = document.location.href;
                    urltmp = urltmp.split('/');
                    urltmp = urltmp[urltmp.length -1];
                    $.post(
                       url+"message/sendmsg", 
                       {
                           ajax:true,
                           text:$("#msgarea_conversation").val(),
                           conversation:urltmp
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                                var scroll = document.getElementById('conv_view');
                                scroll.scrollTop = scroll.scrollHeight;
                       },
                       'text'
                   );
                }
);

        
    
$(document).on("submit", "#form_new_conversation", 
                function(){
                    $.post(
                       url+"message/sendconv", 
                       {
                           ajax:true,
                           membres_conv:$("#membres_conv").val(),
                           objet_conv:$("#objet_conv").val()
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);
    
$(document).on("submit", "#connexion_administrateur", 
                function(){
                    $.post(
                       url+"administration/validConnexion", 
                       {
                           ajax:true,
                           identifiant:$("#identifiant").val(),
                           motdepasse:sha1($("#motdepasse").val())
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);
    
$(document).on("submit", "#form_add_news", 
                function(){
                    $.post(
                       url+"administration/news_ajouter_valider", 
                       {
                           ajax:true,
                           titre:$("#titre").val(),
                           text:$("#text").val(),
                           accueil:$("#departement-6")[0].checked,
                           tc:$("#departement-0")[0].checked,
                           mmi:$("#departement-1")[0].checked,
                           info:$("#departement-2")[0].checked,
                           gea:$("#departement-3")[0].checked,
                           prof:$("#departement-4")[0].checked,
                           entreprise:$("#departement-5")[0].checked
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);

$(document).on("submit", "#form_delete_news", 
                function(){
                    $.post(
                       url+"administration/news_supprimer_valider", 
                       {
                           ajax:true,
                           id:$("#id_news").val()
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);

$(document).on("submit", "#form_add_event", 
                function(){
                    $.post(
                       url+"administration/evenement_ajouter_valider", 
                       {
                           ajax:true,
                           description:$("#description").val(),
                           id:$("#id_news").val(),
                           date:$("#date").val(),
                           tc:$("#departement-0")[0].checked,
                           mmi:$("#departement-1")[0].checked,
                           info:$("#departement-2")[0].checked,
                           gea:$("#departement-3")[0].checked,
                           prof:$("#departement-4")[0].checked,
                           entreprise:$("#departement-5")[0].checked
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);

$(document).on("submit", "#form_delete_event", 
                function(){
                    $.post(
                       url+"administration/evenement_supprimer_valider", 
                       {
                           ajax:true,
                           id:$("#id_event").val()
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);
$(document).on("submit", "#form_valid_usr", 
                function(){
                    $.post(
                       url+"administration/utilisateurs_valider_valider", 
                       {
                           ajax:true,
                           id_usr:$("#id_usr").val()
                       },
                       function(cs){
                                $("#mainpage").html(cs);
                       },
                       'text'
                   );
                   return false;
                }
);
function initialiseDepartementColor(){

    var classElem = document.getElementsByClassName("departement_color");
    $(classElem).each(function(){
        $(this).animate({
                backgroundColor:color_departement
                }, 0);
        });

    var classElem = document.getElementsByClassName("departement_color_border");
    $(classElem).each(function(){
        $(this).animate({
                borderColor:color_departement
                }, 0);
        });
}
initialiseDepartementColor();