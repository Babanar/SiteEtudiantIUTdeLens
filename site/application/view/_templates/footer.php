        <!-- fermeture de la div principale -->
            </div>
        </div>
    </div>
        <div class="row" >
            <div class="col-md-12 hidden-sm departement_color" id="footer">
            <div class="row">

                    <hr>
                    Copyright 2015 - <a class="mainpage-link" href="home/mentions_legales">Mentions légales</a> - <a class="mainpage-link" href="home/contact">Contact</a>
                   
        </div>
 

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
        var color_departement="<?php echo (!is_null(Session::get('color_departement'))?Session::get('color_departement'):"#A4E338"); ?>";
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/standard.js"></script>
    <script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
