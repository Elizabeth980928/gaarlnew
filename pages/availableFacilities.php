
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>Available Facilities</title>

    <?php include_once '../includes/inc_pagemetadata.php'; ?>
    <?php include_once '../config/connection.php'; ?>

   
    <style>
        .modal-content {
            background-color: #D4D4D4;
            color: #091E3E;
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
            <h1 class="display-3 text-white animated zoomIn">Rental Facilities</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Facilities</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Pricing Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Available Facilities</h5>
                        <h1 class="display-5 mb-0">Various Range Of Facilities Available</h1>
                    </div>
                    <p class="mb-4">Whether you're here for relaxation or business, our top-notch facilities ensure that all your needs are met with professionalism and care. Come and experience the perfect blend of luxury and convenience.</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../img/vip3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                   
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>VIP Lounge</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Embodiment of Comfort</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Relaxation</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Luxury</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="#" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#infoModal" data-title="VIP Lounge" data-price="R1000" data-content="Embodiment of Comfort, Relaxation, Luxury" data-description="The VIP Lounge offers the utmost comfort, relaxation, and luxury. Enjoy a serene environment with top-notch facilities.">View More</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../img/shop.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                   
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Shops</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Go shopping</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Nearby</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Fast</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="#" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#infoModal" data-title="Shops" data-price="$50" data-content="Go shopping, Nearby, Fast" data-description="The shops offer a convenient and fast shopping experience, with a variety of items available close by.">View More</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../img/Ferrari-458-Italia-Dunsfold-Track.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Car Rental</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Flexable Rentals</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Price Match Guarantee</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Top-rated</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="#" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#infoModal" data-title="Car Rental" data-price="R1500" data-content="Flexible Rentals, Price Match Guarantee, Top-rated" data-description="Our car rental service offers flexible options, a price match guarantee, and top-rated customer service.">View More</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../img/restaurants.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                   
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Resturants</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Promoting</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Marketing</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Reliable</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="#" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#infoModal" data-title="Restaurants" data-price="$200" data-content="Promoting, Marketing, Reliable" data-description="Our restaurants offer a reliable dining experience with excellent promotion and marketing strategies.">View More</a>
                            </div>
                        </div>
                        
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="../img/private.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Private Charters</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Development</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>High Speeds</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="#" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#infoModal" data-title="Private Charters" data-price="$500" data-content="Development, High Speeds, 24/7 Call Support" data-description="Our private charters offer fast travel, continuous development, and 24/7 call support." data-image="../img/private.jpg">View More</a>

            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->
    
   <!-- Modal -->
   <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../img/gaal_logo.png" alt="Logo" class="me-2" style="height: 50px;">
                    <h5 class="modal-title" id="infoModalLabel">Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modal-price"></p>
                    <p id="modal-content"></p>
                    <p id="modal-description"></p>
                    <p id="modal-contact">For more information contact: Pontsho Ramodipa +27763364582</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    </br>
    </br>
    </br>
    </br>

<!--content end-->


<!-- footer Start -->
<?php include_once '../includes/inc_footer.php'; ?>
<?php include_once '../includes/inc_pagebottom.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
        $('#infoModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var title = button.data('title'); // Extract info from data-* attributes
            var price = button.data('price');
            var content = button.data('content');
            var description = button.data('description');
            var modal = $(this);
            modal.find('.modal-title').text(title);
            modal.find('#modal-price').text('Price: ' + price);
            modal.find('#modal-content').text('Content: ' + content);
            modal.find('#modal-description').text('Description: ' + description);
        });
    </script>
</body></html>