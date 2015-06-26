<form class="form-horizontal col-md-8 col-md-offset-2" id="form_conact" onsubmit="return false;">

    <div class="form-group">
        <legend>Contact</legend>
    </div>

    <div class="row">

        <div class="row">
            <div class="form-group" id="objet_contact">
                <div class="col-md-3 text-right">
                    <label for="objet_contact" class="control-label">Objet<span id="req">*</span> : </label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="objet_contact" name="objet_contact">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group" id="message_contact">
                <div class="col-md-3 text-right">
                    <label for="message_contact" class="control-label">Message<span id="req">*</span> : </label>
                </div>
                <div class="col-md-6">
                    <textarea class="col-md-12"  id="msgarea" cols="50"></textarea>
                </div>
            </div>
        </div>
        
        <div class="row">
        <button type="submit" class="col-md-6 col-md-offset-3 btn btn-default" id="">Envoyer</button>
        </div>



    </div>



</form>
