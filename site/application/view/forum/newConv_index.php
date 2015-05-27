<div id="newConv_forum" class="col-md-10 col-md-offset-1">
<div class="row">

    <div class="row">
      <h3>
        <span class="titreNewConvPage">Nouvelle conversation</span>
      </h3>
      <hr>
    </div>
    
    <div class="row">
        <div class="form-group" id="catégorieTopic">
            <div class="col-md-3 text-right">
                <label for="catégorieTopic" class="control-label">Catégorie<span id="req">*</span> : </label>
            </div>
            <div class="col-md-6">
		<select id="catégorie" class="form-control">
                    <option>Général</option>
                    <option>Stages</option>
		</select>
            </div>
	</div>
    </div>
    
    <div class="row">
        <div class="form-group" id="sujetTopic">
            <div class="col-md-3 text-right">
                <label for="sujetTopic" class="control-label">Sujet<span id="req">*</span> : </label>
            </div>
            <div class="col-md-6">
		<input type="text" class="form-control" id="sujetTopic">
            </div>
	</div>
    </div>
    
    <div class="row">
        <div class="form-group" id="contenu">
            <div class="col-md-3 text-right">
                <label for="contenu" class="control-label">Message<span id="req">*</span> : </label>
            </div>
            <div class="col-md-6">
                <textarea class="form-control"  id="contenuarea"></textarea>
            </div>
	</div>
    </div>
    
    <div class="row">
        <button type="submit" class="col-md-6 col-md-offset-3 btn btn-default" id="send_topic_btn">ENVOYER</button>
    </div>
    
</div>
</div>
