
	var timeAnimation=300; 	
	
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
            
            $("#mainpage").animate({
				borderColor:"#FFFFFF"
                	}, timeAnimation,function(){
                                                //Transition vers la couleur
						$("#mainpage").animate({
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
       
        $(function()
            {
                var hidden = true;
                
                    $("#connexion").click(
                        function(){
                            if(hidden)
                            $("#entete_connexion").show(timeAnimation);
                        
                            else{
                            $("#entete_connexion").hide(timeAnimation);
                            $("#entete_inscription").hide(timeAnimation);
                            $("#entete_profil").show(timeAnimation);                            
                            }
                        
                            hidden = !hidden;
                        }
                    );
            }       
        );


