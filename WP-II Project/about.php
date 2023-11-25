<?php

include 'config.php';

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Variety: Bookstores often offer a wide selection of genres and topics, catering to different interests and preferences.</p>
         <p>Discovery: Exploring shelves can lead to unexpected discoveries, helping readers find new authors and genres they might not have considered.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpeg" alt="">
         <p>The app's interface is incredibly intuitive. Finding books is a breeze, and the search function is precise. No hassle, just great usability. Customer support was lightning fast in resolving the issue with my order. Kudos to the team for their prompt and efficient service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tirthak Majalkar</h3>
      </div>

      <div class="box">
         <img src="images\pic-2.jpeg" alt="">
         <p>Huge variety of books! From bestsellers to obscure titles, this app has it all. I found books here that I couldn't find elsewhere. Orders always arrive on time, and the packaging is top-notch. My books are always in perfect condition thanks to the careful packaging.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sahil Samant</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpeg" alt="">
         <p>The app runs smoothly and loads quickly, even during peak hours. I've never experienced any crashes or technical hiccups. A well-designed app! This app is a book lover's dream. I'm beyond satisfied with my experience. Kudos to the team for their prompt and efficient service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aditya Sanap</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpeg" alt="">
         <p>Competitive prices and frequent discounts make this my go-to bookstore. Plus, their loyalty program offers fantastic savings on future purchases. I've recommended it to all my reader friends. 5 stars!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Darshit Shah</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpeg" alt="">
         <p>I love the personalized book recommendations feature. It introduced me to books I didn't know I needed. User reviews are helpful too, especially when deciding on new reads. I found books here that I couldn't find elsewhere.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vardhan Patil</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I appreciate the app's commitment to user privacy. The data security measures instill confidential transactions, and privacy settings are easy to manage. The search function is precise. No hassle, just great usability.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sakshaat Raut</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sharandeep Singh Rajpal</h3>
      </div>

      <div class="box">
         <img src="images/author-3.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Eiichiro Oda</h3>
      </div>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>