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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Or, the pain itself should be followed by adipisicing elit. Whosoever, from what, who else deserves the pain of his labors, has no right, but he hates the result of that mind! And because of the smallest pleasures.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Hello, it's really a pain to be followed. Whosoever, from what, who else deserves the pain of his labors, has no right, but he hates the result of that mind! And because of the smallest pleasures.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"The quality of the fruits and vegetables I received exceeded my expectations. The website is user-friendly, and I appreciate the detailed descriptions of each product. It's become my go-to for fresh, organic produce!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Joshua Parker</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I've been a loyal customer for months, and I'm consistently impressed. The packaging is eco-friendly, and the fruits and vegetables are carefully selected. Customer service is responsive and helpful. 5 stars!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emily Rodriguez</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"As a busy professional, this website has been a game-changer. I can easily order my weekly groceries, and the produce is delivered right to my doorstep. Freshness and convenience rolled into one!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Liam Foster</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I'm a health-conscious shopper, and this website caters perfectly to my needs. The organic options are abundant, and I appreciate the commitment to quality. Keep up the great work!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia Thompson</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"The variety of exotic fruits and seasonal vegetables is what sets this website apart. It's a foodie's dream! The prices are reasonable, and the produce is consistently top-notch. Highly recommended for culinary enthusiasts!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ethan Anderson</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I absolutely love this online fruits and vegetables website! The produce is always fresh, and the variety is impressive. The ordering process is smooth, and delivery is prompt. I highly recommend it!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia Martinez</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>