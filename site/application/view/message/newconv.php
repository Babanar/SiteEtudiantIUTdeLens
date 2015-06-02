<form class="form-horizontal col-md-8 col-md-offset-2" id="form_new_conversation" onsubmit="return false;">
  <div class="form-group">
    <legend>Nouvelle conversation</legend>
  </div>
  <?php
    $this->renderFeedback('newconv');
  ?>
  <div class="row">
		<div class="form-group" id="Membres">
			<div class="col-md-3 text-right">
					<label for="membres_conv" class="control-label">Membres<span id="req">*</span> : </label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" id="membres_conv" id="membres_conv">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group" id="Objet">
			<div class="col-md-3 text-right">
					<label for="objet_conv" class="control-label">Objet<span id="req">*</span> : </label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" id="objet_conv" name="objet_conv">
			</div>
		</div>
	</div>
	
	<div class="row">
		<button type="submit" class="col-md-4 col-md-offset-4 btn btn-default" id="send_conv_btn">Créer la conversation</button>
	</div>
	
  
</form>
  
	