<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AquiEstoy.MX</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/brandon.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

  </head>
  <body>

    <!-- ****DUSTIN****
     Modals are put in their individual file. If there are any issues on calling the
     modals later in development then place all modals here in index.php-->
    <?php

      include 'sections/nav.php';
      include 'sections/hero.php';

      include 'sections/services.php';
      include 'sections/slogan.php';
      include 'sections/gallery.php';
      include 'sections/contact.php';
      include 'sections/footer.php';

      include 'sections/modals.php';


    ?>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="bower_components/masonry/dist/masonry.pkgd.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
    });

    </script>
  </body>
</html>
