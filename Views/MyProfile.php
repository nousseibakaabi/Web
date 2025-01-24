
<?php

session_start();

if(!isset($_SESSION['idclient']))
{

    header("location: Connexion.php");
}

include "../Model/Client.php";
include "../Controller/ClientC.php";


$clientC = new ClientC();
$result=$clientC->recupererClient($_SESSION['idclient']);
foreach($result as $row){
    $id=$row['id'];
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $mdp=$row['mdp'];
    $tel=$row['tel'];
    $adresse=$row['adresse'];
    $sexe=$row['sexe'];
    $date_naiss=$row['date_nais'];
    $image=$row['image'];
    }


?>
<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RecyTech</title>
    
        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/style.css">



    
        <!-- favicons
        ================================================== -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.jpg">

        <include type="text/html" data="index.html">


    
    </head>

    <body id="top" class="ss-show">
        <div id="preloader" style="display: none;">
            <div id="loader">
            </div>
        </div>
    <div id="page" class="s-pagewrap">

        <!-- # site header 
        ================================================== -->

        <?php include 'header.php'; ?>



        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">



            <!-- testimonials
            ----------------------------------------------- -->
            <section id="testimonials" class="s-testimonials">

                <div class="row narrow text-center s-testimonials__header">
                    <div class="column lg-12">
                        <h3 class="h2">My Profile</h3>
                    </div>
                </div>

                <div class="row s-testimonials__content">
                    <div class="column lg-12">
        
                        <div class="swiper-container s-testimonials__slider">
        
                            <div class="swiper-wrapper">
    
                                <div class="s-testimonials__slide swiper-slide">
                                    <div class="s-testimonials__author">
                                        <img src="<?php echo $row['image']; ?>" alt="Author image" class="s-testimonials__avatar">
                                        <cite class="s-testimonials__cite">
                                            <strong><?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></strong>
                                            <span><?php echo $row['sexe']; ?></span>
                                        </cite>
                                    </div>
                                    <p>Email : <?php echo $row['email']; ?></p>
                                    <p>Telephone : <?php echo $row['tel']; ?></p>
                                    <p>Address : <?php echo $row['adresse']; ?></p>
                                    <p>Date Of Birth: <?php echo $row['date_nais']; ?></p>
                                    <div class="btn-block">
                                    <button onclick="location.href='ModifierProfil.php?id=<?php echo $id; ?>#subscribe'">Modify</button>
                                    </div>
                                </div> <!-- end s-testimonials__slide -->

                            
                            </div> <!-- end swiper-wrapper -->
        
                            <div class="swiper-pagination">
                            </div>
        
                        </div> <!-- end swiper-container -->
        
                    </div> <!-- end column -->
                </div> <!-- end s-testimonials__content -->

            </section> <!-- end testimonials -->


        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
    <?php include 'footer.php' ?>

    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>

</body>
</html>