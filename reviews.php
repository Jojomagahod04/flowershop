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
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="reviews">

<section class="reviews" id="reviews">

    <h1 class="title">customer reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/1.jpg" alt="">
            <p>Absolutely beautiful bouquet of flowers! Thank you for this and for the fast shipment. Might order soon again!</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Taliza</h3>
        </div>

        <div class="box">
            <img src="images/.2.jpg" alt="">
            <p>My mom likes it very much, and I love how the seller is so responsive and respectful. Thank you, Bloomify!</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Abigail</h3>
        </div>

        <div class="box">
            <img src="images/.3.jpg" alt="">
            <p>The beauty of the flowers from this shop is truly stunning, capturing the essence of nature’s artistry.</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Annabel</h3>
        </div>

        <div class="box">
            <img src="images/.4.jpg" alt="">
            <p>The flowers I have bought from this shop is very amazing! Thank you so much for the great service and amazing arrangement!</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Joshua</h3>
        </div>

        <div class="box">
            <img src="images/5.jpg" alt="">
            <p>Bloomify consistently crafts custom bouquets that leave me in awe. Each delicate petal and vibrant hue is a testament to their artistry.</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Jojo</h3>
        </div>

        <div class="box">
            <img src="images/6.jpg" alt="">
            <p>Ordering was easy. The seller is very responsive. I love the flowers they sell. It’s so fresh! Excited to make my next order!</p>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
            </div>
            <h3>Eian</h3>
        </div>

    </div>

</section>

</section>












<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>