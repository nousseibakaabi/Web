<?php 

include "../Model/client.php";
include "../Controller/ClientC.php";

session_start();

if(isset($_POST['connecter']))
{


   $email=$_POST["email"];
   $clientC = new ClientC();

   $liste=$clientC->recupereremail($email);

   //var_dump($res);
    foreach($liste as $row)
    {
        $mdp=$row['mdp'];
        $statut=$row['statut'];
    }
    if($statut == "Verified")
    {
        if (password_verify($_POST["mdp"],$mdp))
        {
        $liste=$clientC->recupereremail($email);
          foreach($liste as $row)
          {
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
    
        $_SESSION['idclient'] = $id;
        $_SESSION['client'] = $nom ." ".$prenom;
        $_SESSION['clientnom'] = $nom ;
        $_SESSION['clientprenom'] = $prenom;
        $_SESSION['clientemail'] = $email;
        $_SESSION['clienttel'] = $tel;
        $_SESSION['clientadresse'] = $adresse;
        $_SESSION['clientsexe'] = $sexe;
        $_SESSION['clientdate_naiss'] = $date_naiss;
        $_SESSION['clientimage'] = $image;
    
        header("location: index.php");
    
        }
       else
        {
          echo "<script type='text/javascript'>";
          echo "alert('Incorrect Email Or Password');
          window.location.href='SignIn.php';";
          echo "</script>";
        }    
    }
    else if($statut == "Non Vérifé")
    {
        echo "<script type='text/javascript'>";
        echo "alert('Validated Your Email');
        window.location.href='SignIn.php';";
        echo "</script>";

    }
    else if($statut== "Bloquer")
    {
        echo "<script type='text/javascript'>";
        echo "alert('Your account is blocked');
        window.location.href='SignIn.php';";
        echo "</script>";
  }
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

        <section class="sign-in" id="sign">
        <div class="container">
        <div class="signin-content">
        <div class="signin-image">
        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
        <a href="SignUp.php#subscribe" class="signup-image-link">Create an account</a>

        </div>
        <div class="signin-form">
        <h2 class="form-title">Sign In</h2>
        <form action="#" class="login-form__form" method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label for="id_2" id="icon"><i class="fas fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Email"  class="no-outline" />
        </div>

        <div class="form-group">
            <label for="your_pass" id="icon"><i class="fas fa-lock"></i></label>
            <input type="password" name="mdp" placeholder="Password" class="no-outline"/>
        </div>
        <div class="form-group">
            <a href="ForgetPassword.php#sign" >Forgot Password ?</a>
        </div>
        <div class="btn-block">
        <button type="submit" name="connecter" id="connecter">Log In</button>

        </div>
        </form>
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

</body>
</html>