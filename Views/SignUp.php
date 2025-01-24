<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";

if(isset($_POST['inscri']))
{
if( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['tel']) and isset($_POST['adresse'])){
$client=new Client($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['mdp'],$_POST['tel'],$_POST['adresse'],$_POST['sexe'],$_POST['date_nais'],"Client","Non Vérifé");

    $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./images/client/".$filename ;
    move_uploaded_file($tempname, $folder);

//Partie3
$clientC = new ClientC();
$clientC->ajouterclients($client);
$clientC->ajouterClientimg($_POST['email'],$folder);

header("location: journal/VerifierMail.php?email=".$_POST['email']);
    
}else{
    echo "Check Fields";
    die();
}
//*/
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
        <link rel="manifest" href="site.webmanifest">
    
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


        <div class="main">

            <section class="signup" id="subscribe">
            <div class="container">
            <div class="signup-content">
            <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form action="#" class="login-form__form" method="post" enctype="multipart/form-data" id="form_client">

            <div class="form-group" >
                <label for="nom" id="icon"><i class="fas fa-user-alt"></i></label>
                <input type="text" name="nom" placeholder="Last Name" id="nom" class="no-outline" required />
            </div>

            <div class="form-group" >
            <label for="prenom" id="icon"><i class="fas fa-user-alt"></i></label>
            <input type="text" name="prenom" placeholder="First Name" id="prenom" class="no-outline" required />
            </div>

            <div class="form-group" >
                <label for="email" id="icon" ><i class="fas fa-envelope"></i></label>
                <input type="text" name="email" placeholder="Email" id="email" class="no-outline" required />
            </div>

            <div class="form-group" >
                <label for="mdp" id="icon"><i class="fas fa-lock"></i></label>
                <input type="password" name="mdp" placeholder="Password" id="mdp" class="no-outline" required />
            </div>

            <div class="form-group" >
            <label for="tel" id="icon"><i class="fas fa-phone " class="control-label"></i></label>
            <input type="text" name="tel" placeholder="Telephone" id="tel" class="no-outline"/>
            </div>
            <div class="form-group">
            <label for="adresse" id="icon"><i class="fas fa-home"></i></label>
            <input type="text" name="adresse" placeholder="Address" id="adresse" class="no-outline"  />
            </div>

            <div class="form-group" >
                <label for="date_nais" id="icon" ><i class="fas fa-calendar-alt"></i></label>
                <input  type="date" name="date_nais" id="date_nais"  class="no-outline"/>
            </div>

            <div class="form-group">
            <label for="image" id="icon" ><i class="fas fa-image"></i></label>
                    <input type="file"  id="image" name="image" >
            </div>

            <div class="form-group">
               <label class="label-agree-term">
               <label for="sexe" id="icon" ><i class="fas fa-male"></i></label>
                  <input type="checkbox" name="sexe" id="sexe" class="agree-term" value="Male">
                     <span class="label-text">Male</span>
                </label>
                
                <label class="label-agree-term" >
                <label for="sexe" id="icon" ><i class="fas fa-female"></i></label>
                  <input type="checkbox" name="sexe"  id="sexe" value="Female">
                     <span class="label-text">Female</span>
                </label>
            </div>

            <div class="btn-block">
                            <button type="submit"  name="inscri" id="inscri">Register</button>
            </div>

            </form>
            </div>

            <div class="signup-image">
            <figure><img src="images/signup-image.png" alt="sing up image"></figure>
            <a href="SignIn.php#sign" class="signup-image-link">I am already member</a>
            </div>
            </div>
            </div>
            </section>

</div>

        <!-- # site-footer
        ================================================== -->
    <?php include 'footer.php' ?>

    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script src="js/Client.js"></script>
    
</body>
</html>