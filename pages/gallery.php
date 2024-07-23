
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>Media Release</title>

    <?php include_once '../includes/inc_pagemetadata.php'; ?>
    <?php include_once '../config/connection.php'; ?>

    <style>
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: 	#D0D0D0;
        }

        .portfolio {
            text-align: center;
            padding: 50px 0;
            max-width: 1200px;
            margin: 0 auto; /* Center the .portfolio div */
        }

        .portfolio h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .portfolio p {
            font-size: 16px;
            color: #888;
            margin-bottom: 40px;
        }

        .portfolio-menu {
            margin-bottom: 40px;
        }

        .portfolio-menu button {
            background-color: #616161;
            color: #77ccff;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .portfolio-menu button.active {
            background-color: #616161;
        }

        .portfolio-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .portfolio-gallery img {
             width: 350px;
            height: 350px;
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
  
    </style>
   


</head><body>


<!-- navigation -->
<?php include_once '../includes/inc_header.php'; ?>
<!-- nav part end -->
 



<!-- content-->

 <!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-0">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Gallery</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Pictures</a>
        </div>
    </div>
</div>
<!-- Hero End -->
<section class="portfolio">
        <!--<h2>Our Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>-->
        <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Memories</h5>
                    </div>
                </div>
        <div class="portfolio-menu">
            <button class="active" onclick="filterSelection('all')">All</button>
            <button onclick="filterSelection('app')">App</button>
            <button onclick="filterSelection('card')">Card</button>
            <!--<button onclick="filterSelection('web')">Web</button>-->
        </div>
        <div class="portfolio-gallery" id="portfolioGallery">
            <img src="../img/gaal2.jpg" alt="Image 1">
            <img src="../img/gaal3.jpg" alt="Image 2">
            <img src="../img/gaal4.jpg" alt="Image 3">
            <img src="../img/gaal8.jpg" alt="app">
            <img src="../img/gaal4.jpg" alt="app">
            <img src="../img/gaal3.jpg" alt="app">
            <img src="../img/gaal2.jpg" alt="app">
            <img src="../img/gaal8.jpg" alt="app">
            <img src="../img/gaal4.jpg" alt="app">
            <img src="../img/gaal4.jpg" alt="card">
            <img src="../img/gaal3.jpg" alt="card">
            <img src="../img/gaal2.jpg" alt="card">
            <img src="../img/gaal8.jpg" alt="card">
            <img src="../img/gaal4.jpg" alt="card">
            <img src="../img/gaal3.jpg" alt="card">
           
        </div>
    </section>



 <!-- Newsletter Start -->
 <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


<!--content end-->


<!-- footer Start -->
<?php include_once '../includes/inc_footer.php'; ?>
<?php include_once '../includes/inc_pagebottom.php'; ?>

</body></html>