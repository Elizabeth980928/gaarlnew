
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
        .publications {
            max-width: 1000px;
            margin: 0 auto;
            margin-top: 50px; 
        }

        .publications h1 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .newsletter-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            white-space: nowrap;
        }

        .newsletter-item {
            display: inline-block; /* Ensure items are displayed in a line */
          
            margin-right: 10px; /* Adjust margin between items as needed */
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 200px; /* Adjusted width */
            height: 300px; /* Adjusted height */
            display: flex;
            flex-direction: column;
        }

        .newsletter-item img {
            width: 100%;
            height: 160px; /* Adjusted height */
            object-fit: cover;
        }

        .newsletter-content {
            padding: 5px; 
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .newsletter-content h2 {
            font-size: 1em; /* Adjusted font size */
            margin: 0 0 5px 0;
        }

        .newsletter-content p {
            font-size: 0.8em; /* Adjusted font size */
            color: #666;
            margin-bottom: 5px;
        }

        .newsletter-content .date {
            font-size: 0.7em; /* Adjusted font size */
            color: #999;
            margin-bottom: 10px;
        }

        .newsletter-content .icons {
            display: flex;
            justify-content: space-around;
            margin-top: auto;
        }

        .newsletter-content .icons a {
            text-decoration: none;
            color: #333;
            font-size: 1.2em;
        }
        .view-more-container {
                text-align: center; /* Center align the button */
                margin-top: 20px; /* Adjust margin as needed */
            }

            .view-more-btn {
                padding: 10px 20px; /* Padding for button */
                font-size: 16px; /* Font size */
                background-color: #007bff; /* Button background color */
                color: #fff; /* Button text color */
                border: none; /* Remove border */
                cursor: pointer; /* Pointer cursor on hover */
                border-radius: 4px; /* Rounded corners */
                text-decoration: none; /* Remove underline */
                display: inline-block; /* Ensure it behaves like a block element */
            }

            .view-more-btn:hover {
                background-color: #0056b3; /* Darker background color on hover */
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
            <h1 class="display-3 text-white animated zoomIn">News Letters</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">News</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="publications">
              
        <div class="section-title mb-4">
            <h5 class="position-relative d-inline-block text-primary text-uppercase">Our News Letters</h5>
            <h1 class="display-5 mb-0">Publications</h1>
        </div>
        <div class="newsletter-grid">
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024 </p>
                    <div class="date">2024-03-20</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#" class="expand-btn">&#128065;</a>
                      
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024 </p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                        
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024</p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                    
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024</p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                       
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                     <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024 </p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                        
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024</p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                        
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024</p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                     
                    </div>
                </div>
            </div>
            <div class="newsletter-item">
            <img src="../img/news-letter3.jpg" alt="Newsletter Image">
                <div class="newsletter-content">
                    <h2>GAAL NEWS</h2>
                    <p>15 March - 28 March 2024 </p>
                    <div class="date">2024-03-15</div>
                    <div class="icons">
                        <a href="#">&#128190;</a>
                        <a href="#">&#128065;</a>
                        
                    </div>
                </div>
            </div>
            
            <!-- Add more newsletter items here -->
        </div>
        <div class="view-more-container">
            <a href="publication.php" class="view-more-btn">View More</a>
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