<div id="index_message" class="col-md-10 col-md-offset-1">
    <div class="row">
        <div class="col-md-6 titremsg" id="titre_conversation">
            <?php echo $this->conversation->titre; ?>
        </div>
        <div class="col-md-6 text-right" id="participants_conversation">
            <?php 
            $participants = $this->conversation->getParticipants();
                echo "Vous";
                for($i=0;$i<  sizeof($participants);$i++){
                    if($participants[$i]->getId()!=Session::get("id_utilisateur")){
                        echo ",  ".$participants[$i]->getCallName();
                    }
                }
            ?>
        </div>

      
    </div>
            <hr style="margin-top:5px; margin-bottom:5px;">

	<div class="row">

		<div class="row">
			<div class="col-md-offset-2 col-md-8" id="conv_view" onload="alert('test')">
                                <?php
                                    $mps = $this->conversation->getMPs();
                                    $id = count($mps);
                                    while($id--){
                                ?>
					<div class="row conversation_msgblock">
                                            <div id="photoconv" class="col-md-2 col-md-offset-1">	
						<img src="<?php echo URL; ?>/public/img/iut.jpg" class="photoconv">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-6 auteursmsg">
                                                        <?php echo $mps[$id]->getExpediteur()->getCallName(); ?>
                                                    </div>
                                                    <div class="col-md-6 datemsg text-right">
                                                        <?php echo $mps[$id]->getDate() ?>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-12 conversation_contenu_msg">
                                                        <?php echo $mps[$id]->message ?>
                                                    </div>
                                                </div>
                                            </div>
					</div>
                                        
                                <?php 
                                    if ($id) {
                                        echo "<hr>";
                                    }
                                } ?>
			</div>
		</div>
		
		<div class="row" id="write_msg">
			<textarea class="col-md-offset-2 col-md-7" cols="50" id="msgarea_conversation" height="1000px"></textarea>
			<button type="submit" class="col-md-1 btn btn-default" id="send_btn_conversation">Envoyer</button>
		</div>
	</div>
</div>
	
	
