    
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