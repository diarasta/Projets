<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Diamanka</title>
<meta name="description" content="">
<meta name="author" content="">
<title> Videos</title>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css"  href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i> C@GO</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="site.php" class="page-scroll">Acceuil</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#portfolio" class="page-scroll">Photo</a></li>
       <li><a href="#contact" class="page-scroll">Contact</a></li>
       <li><a href="video.php" class="page-scroll">Videos</a></li>
        <li><a href="google.php" class="page-scroll">formulaire-google</a></li>
         <li><a href="connexion.php" class="page-scroll">Administrateur</a></li>
        <li><a href="login.php" class="page-scroll">Deconnexion</a></li>

      </ul>
    </div>


    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>DIAMANKA</h1>
          <p>Visionner mes videos Youtube </p>
          <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
         <a href="#about" class="btn btn-custom btn-lg page-scroll">Apprendre Plus</a> </div>
      </div>
    </div>
  </div>
</header>


<!-- About Section -->
<div id="about">
         
<iframe width="560" height="315" src="https://www.youtube.com/embed/EoSfiNGP4_E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<iframe width="560" height="315" src="https://www.youtube.com/embed/v6-Pc-7BVd4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>




<iframe width="560" height="315" src="https://www.youtube.com/embed/v6-Pc-7BVd4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

             <iframe width="560" height="315" src="https://www.youtube.com/embed/EmOCWrCXF44" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             </div>
  
               


</div>

    




</body>
</html>