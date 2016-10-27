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
      include 'sections/slider1.php';
      include 'sections/about.php';
      include 'sections/services.php';
      include 'sections/slogan.php';
      include 'sections/slider2.php';
      include 'sections/contact.php';
      include 'sections/footer.php';

      include 'sections/modals.php';


    ?>


    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
     $('.slider1', '.slider2').carousel({
       interval: 100,
       cycle: true,
       pause: "null"
     });
    });

    </script>
  </body>
</html>
