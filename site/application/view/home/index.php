<div class="col-md-7 col-sm-12">
    <?php
    foreach($this->news as $n){
        $date = new DateTime($n->date_post);
    ?>
    <div class="row" >
        <div class="news mainpage-link" href="actualites/article/<?php echo $n->getId() ?>">
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
