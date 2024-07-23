
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
            background-color: #D0D0D0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .header h1 span {
            color: #888;
        }

        .article-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto;
            gap: 20px;
        }

        .article {
            background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 400px; /* Adjust this value as needed */
        }

        .article img {
            width: 100%;
    height: 75%; /* Ensures the image fills the article container */
    object-fit: cover; /* Keeps the aspect ratio of the image */
        }

        .article-content {
            padding: 20px;
        }

        .article-content span {
            display: block;
            font-size: 14px;
            color: #ff4d4d;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .article-content h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .article-content p {
            font-size: 16px;
            color: #555;
        }

        .article-content .author {
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }

        .large-article {
            grid-column: span 2;
    display: flex;
    flex-direction: column;
    max-height: 600px; /* Adjust height as needed */
    overflow: hidden; /* Ensure content does not overflow */

        }

        .large-article img {
            width: 100%;
    height: auto; /* Ensures the image retains its aspect ratio */
    object-fit: cover; /* Ensures the image covers the entire container */

        }

        .large-article .article-content {
            flex-grow: 1;
        }

        @media (max-width: 768px) {
            .article-grid {
                grid-template-columns: 1fr;
            }

            .large-article {
                grid-column: span 1;
            }
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
            <h1 class="display-3 text-white animated zoomIn">Magazines</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">News</a>
        </div>
    </div>
</div>
<!-- Hero End -->
<div class="container">
     <div class="section-title mb-4">
        <h5 class="position-relative d-inline-block text-primary text-uppercase">Magazines/Brochure</h5>
     </div>
    <div class="header">
        <h1>Get <span>Inspired</span></h1>
    </div>
    <div class="article-grid">
        <div class="article">
            <img src="../img/magazine2.jpg" alt="Article 1">
            <div class="article-content">
                <span>FINANCES</span>
                <h3>5 Reasons To Become A Design Preneur This Days</h3>
            </div>
        </div>
        <div class="large-article article">
            <img src="../img/magazine1.jpg" alt="Large Article">
            <div class="article-content">
                <span>ARCHITECTURE</span>
                <h3>Announcing Our First Magazine Blog Template on Webflow!</h3>
                <p>By Adam Harris</p>
            </div>
        </div>
        <div class="article">
            <img src="../img/magazine3.png" alt="Article 3">
            <div class="article-content">
                <span>LIFESTYLE</span>
                <h3>10 Healthy Food Blogs To Follow Right Now</h3>
            </div>
        </div>
        <div class="article">
            <img src="../img/magazine4.webp" alt="Article 4">
            <div class="article-content">
                <span>AUTOMOTIVE</span>
                <h3>Review of the Best Roof Top Cars For This Year</h3>
            </div>
        </div>
        <div class="article">
            <img src="../img/magazine4.jpg" alt="Article 5">
            <div class="article-content">
                <span>FINANCES</span>
                <h3>5 Personal Finance Tips Every Freelancer Should Know</h3>
            </div>
        </div>
    </div>
</div>



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