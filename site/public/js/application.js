    
	var timeAnimation=300; 	             
        function onClickMainPageLink(e){
                   targetUrl=url+e.getAttribute("href");
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
	
	function transition_navbar(color){
            //Si déjà de la bonne couleur on ne fait rien.
            if(color===$("#navbar").css("background-color"))    
                return;
            //Transition vers le blanc
            
            $("#navbar").animate({
				backgroundColor:"#FFFFFF"
                	}, timeAnimation,function(){
                                                //Transition vers la couleur
						$("#navbar").animate({
							backgroundColor:color
							}, timeAnimation);
						}
            );
            
            $("#footer").animate({
				backgroundColor:"#FFFFFF"
                	}, timeAnimation,function(){
                                                //Transition vers la couleur
						$("#footer").animate({
							backgroundColor:color
							}, timeAnimation);
						}
            );
            
            $("#mainblock").animate({
				borderColor:"#FFFFFF"
                	}, timeAnimation,function(){
                                                //Transition vers la couleur
						$("#mainblock").animate({
							borderColor:color
							}, timeAnimation);
						}
            );

	}   

	$("#navbar_btn .btn").click(
		function(e){
                        transition_navbar(window.getComputedStyle(e.target).getPropertyValue('background-color'));
		}	
	);


        $('body').on('click', '.mainpage-link',
                function(e){
                    
                  onClickMainPageLink(e.target);  
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

// $(function () {
                // $('#datepicker').datepicker();
            // });
			

			//Vérification du formulaire Personnel
$(function(){

	var checkEmail=false;
	var checkPwd=false;
	var checksurname=false;
	var checkname=false;
	var checkdate=true; //A changer en false lorsque vérification mise en place
	var checkVille=false;
	var checkCP=false;
	var checkTel=false;
	var checkform=false;
	var checkentree=false;
	var checksortie=false;
	var checkregles=false;

    $("form").on("submit", function() {
      
	  //Vérification de l'adresse email
	  
	  var email = $("#Email")
	  var regexEmail= new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
	  
	  if (!regexEmail.test(email.val()))
	  {
		$("#emailGroup").addClass("has-error");
        $("#emailalert").show("slow");
	  }
	  else
	  {
		checkEmail=true;
	  }
	  
	  //Vérification du mot de passe
	  
	  var pass=$("#Password")
	  var regexMajMin=new RegExp ('^[0-9]+[a-z]+$')
	  var regexMajChiffres=new RegExp ('^[0-9]+[A-Z]+$')
	  var regexMinChiffres=new RegExp ('^[0-9]+[a-z]+$')
	  
	  
	  
	  if( (pass.val().length < 8) && (!regexMajMin.test(pass.val()) || !regexMajChiffres.test(pass.val()) || !regexMinChiffres.test(pass.val()) )) {
        $("#pwdGroup").addClass("has-error");
        $("#pwdalert").show("slow");
      }
	  else
	  {
		checkPwd=true;
	  }
	  
	  
	  //Vérification du nom
	  
	  var nom=$("#Nom")
	  var regexNom=new RegExp('^[A-Z]{1}[a-z-]+$','i')
	  
		if (!regexNom.test(nom.val()))
		{
			$("#surnameGroup").addClass("has-error");
			$("#surnamealert").show("slow");
		}
		
		else 
		{
		checksurname=true;
		}
		
		
	  //Vérification du prénom
	  
	  var prenom=$("#Prenom")
	  var regexPrenom=new RegExp('^[A-Z]{1}[a-z-]+$','i')
	  
	  	if (!regexPrenom.test(prenom.val()))
		{
			$("#nameGroup").addClass("has-error");
			$("#namealert").show("slow");
		}
		else
		{
		checkname=true;
		}
		
		//Vérification de la ville si non vide
	  
	  var ville=$("#Ville")
	  var regexVille=new RegExp('^[A-Z]{1}[a-z-]+$','i')
	  
		if (ville.val().length>0)
		{
			if (!regexVille.test(ville.val()))
			{
				$("#cityGroup").addClass("has-error");
				$("#cityalert").show("slow");
			}
			else
			{
			checkVille=true;
			}
		}
		else
		{
		checkVille=true;
		}
		
		
		//Vérification du code postal si non vide
	  
	  var cp=$("#CP")
	  var regexCP=new RegExp('^[0-9]{5}$')
	  
		if (cp.val().length>0)
		{
			if (!regexCP.test(cp.val()))
			{
				$("#CPGroup").addClass("has-error");
				$("#CPostalalert").show("slow");
				return false;
			}
			else
			{
			checkCP=true;
			}
		}
		else
		{
		checkCP=true;
		}
		
		//Vérification du numéro de téléphone non vide
	  
	  var tel=$("#Tel")
	  var regexTel=new RegExp('^[0-9]{10}$')
	  
		if (tel.val().length>0)
		{
			if (!regexTel.test(tel.val()))
			{
				$("#TelGroup").addClass("has-error");
				$("#Telalert").show("slow");
			}
			else
			{
				checkTel=true;
			}
		}
		else 
		{
		checkTel=true;
		}
		
		// Vérification qu'au moins une formation est cochée
		
		var TC=$("#TCcheck")
		var GEA=$("#GEAcheck")
		var MMI=$("#MMICheck")
		var INFO=$("#INFOCheck")
		var SEPIA=$("#SEPIACheck")
		
		
		if (!TC || !GEA || !MMI || !INFO || !SEPIA)
		{
			$("#formationsGroup").addClass("has-error");
			$("#formationsAlert").show("slow");
		}
		else
		{
		checkform=true;
		}
	  
	  //Vérification année entree
	  
	  var entree=$("#entree")
	  var regexEntree=new RegExp ('^[1945-9999]{1}$')
	  
			if (!regexEntree.test(entree.val()) || (entree.val()<1945) || ($("#entree").val()>$("#sortie").val()))
			{
				$("#entreeGroup").addClass("has-error");
				$("#entreeAlert").show("slow");
			}
			else
			{
			checkentree=true;
			}
			
			//Vérification année sortie
	  
	  var sortie=$("#sortie")
	  var regexSortie= new RegExp ('^[1945-9999]{1}$')
	  
			if ( !regexSortie.test(sortie.val()) || (sortie.val()<1945) || ($("#entree").val()>$("#sortie").val()) )
			{
				$("#sortieGroup").addClass("has-error");
				$("#sortieAlert").show("slow");
			}
			else
			{
			checksortie=true;
			}
			
			//Vérification que les règles ont été acceptées.
			// if ($("form").$("#accept").checked==true)
			// {
				// checkregles=true;
			// }
			
			//Validation du formulaire 
			
			if (checkEmail && checkPwd && checksurname && checkname && checkVille && checkCP && checkTel && checkform && checkentree && checksortie && checkregles)
			{
			return true;
			}
			else
			{
			return false;
			}
			
			
			
			
	  
    });
  });
			


