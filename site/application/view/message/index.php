<div id="index_message" class="col-md-10 col-md-offset-1">
<div class="row">

    <div class="row">
      <h3>
        <span class="titreMPage">Messages privés</span>
      </h3>
      <hr>
    </div>

	
	<div class="col-md-10 col-md-offset-1">
		<div id="MPlist">	
                    <?php
			foreach($this->conversations as $conv){
                    ?>
                        
			<div class="row mainpage-link" href="<?php echo "/message/conversation/".$conv->getId(); ?>  ">
				<div class="col-md-2">
					<div class="photodiv">	
						<img src="<?php echo URL; ?>/public/img/iut.jpg" class="photoconv">
					</div>
				</div>	
				<div class="col-md-10">
				<div class="row entetemsg">
				<div class="col-md-8"><h3 class="titremsg"><?php echo $conv->titre ?></h3></div>
				<div class="col-md-4"><div class="datemsg text-right"><?php echo $conv->getLastDate() ?></div></div>
				</div>
				
				<div class="row">
				<div class="contenumsg"><?php echo $conv->getLastMessage() ?></div>
				</div>
				</div>
			</div>
                
			<hr>
                    <?php
                        } //foreach
                    ?>

		</div>
	</div>

		
	<div class="row">
            <button type="submit" class="btn btn-default col-md-offset-4 col-md-4" id="newmsg_btn">Nouveau message</button>
	</div>
</div>
</div>