<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php @include 'header.php'; ?>

   <section class="heading">
      <h3>about us</h3>
      <p> <a href="home.php">home</a> / about </p>
   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about_img1.jpg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>We deliver high quality and healthy plants which are taken care under the guidance of the specialists who
               have prior experience in this field.</p>
            <a href="shop.php" class="btn">shop now</a>
         </div>

      </div>

      <div class="flex">

         <div class="content">
            <h3>what we provide?</h3>
            <p>We provide assurance that the plant will stay healthy under certain conditions like sunlight and
               watering.We give a book along with the plant which has the steps that haa to be taken to look after the
               plant.</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

         <div class="image">
            <img src="images/about_image2.jpg" alt="">
         </div>

      </div>

      <div class="flex">

         <div class="image">
            <img src="images/about_img3.jpg" alt="">
         </div>

         <div class="content">
            <h3>who we are?</h3>
            <p>We are indoor plant lendors who have a variety of products and we offer customersto buy these plants from
               thier place only without any risk.Our delivery partners will reach as soon as possible.</p>

         </div>

      </div>

   </section>

   <?php @include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>