
<div class="col-md-7">
    <?php
    foreach($this->news as $n){
        $date = new DateTime($n->date_post);
    ?>
    <div class="row">
        <div class="news">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="titre_news"><?php echo $n->titre ?></h2>
                </div>
                <div class="col-md-4 text-right" style="line-height:63px; padding-right: 40px;">
                    <?php echo $date->format("d/m/Y à H\hi") ?>
                </div>
            </div>
            <hr>
            <div>
                <p>
                    <?php echo $n->text ?>
                </p>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="row" style="height:50px;">
        
    </div>
</div>
<div class="col-md-5 right_div_departement departement_color_border">
    <div class="row event_part departement_color_border">
        <div class="row titre departement_color">
            <h4>
                Événements
            </h4>
        </div>
        <?php
            foreach($this->event as $e){
                $date = new DateTime($e->dateEvenement);
        ?>
        <div class="row mainpage-link" href="actualites/article/<?php echo $e->id_news; ?>" style="cursor:pointer;">
            
            <b><?php echo $date->format("d/m/Y à H\hi") ?></b> - <?php echo $e->description ?>
        </div>
        <?php
            }
            if(sizeof($this->event)===0){
                ?>
        
                <div class="row">
                    Aucun événement à afficher.
                </div>
                <?php
            }
        ?>
    </div>
    <div class="row text-center">
        <button type="button" class="btn btn-lg mainpage-link" href="forum/">
            Accéder au forum
        </button>
    </div>
</div>

<script>
   initialiseDepartementColor();
</script>