<div id="index_message" class="col-md-10 col-md-offset-1">
    <div class="row">
      <h3>
        Conversation "Bienvenue !" entre Vous & Louis Behague
      </h3>
      <hr>
    </div>


	<div class="row">

		<div class="row">
			<div class="col-md-offset-3 col-md-6" id="conv_view">
                                <?php
                                    $mps = $this->conversation->getMPs();
                                    $id = count($mps);
                                    while($id--){
                                ?>
					<div class="row">
						<div class="col-md-offset-1">
							<div id="photoconv" class="col-md-2">	
							<img src="<?php echo URL; ?>/public/img/iut.jpg" class="photoconv">
							</div>
							<div class="col-md-4 auteursmsg">Louis Behague</div>
							<div class="col-md-4 col-md-offset-2 datemsg text-right"><?php echo $mps[$id]->getDate() ?></div>
							<div class="col-md-offset-3 contenumsg"><?php echo $mps[$id]->message ?></div>
						</div>	
					</div>
                                        
                                <?php 
                                    if ($id) {
                                        echo "<hr>";
                                    }
                                } ?>
			</div>
		</div>
		
		<div class="row">
			<textarea class="col-md-offset-3 col-md-6" cols="50" id="msgarea"></textarea>
				<button type="submit" class="col-md-1 btn btn-default" id="send_btn">ENVOYER</button>

		</div>
	</div>
</div>
	
	
