
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>Vacancies</title>

    <?php include_once '../includes/inc_pagemetadata.php'; ?>
    <?php include_once '../config/connection.php'; ?>
    <?php include_once '../functions/functions.php'; ?>


   
      


</head><body>


<!-- navigation -->
<?php include_once '../includes/inc_header.php'; ?>
<!-- nav part end -->

<!-- content-->
 <!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-0">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Vacancies</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Vacancies</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Tabs and Tables Start -->
<div class="container-fluid bg-light py-4">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="adverts-tab" data-bs-toggle="tab" data-bs-target="#adverts" type="button" role="tab" aria-controls="adverts" aria-selected="true">Advertised Vacancies</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rfq-tab" data-bs-toggle="tab" data-bs-target="#rfq" type="button" role="tab" aria-controls="rfq" aria-selected="false">Internships & Learnership</button>
            </li>
            
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="adverts" role="tabpanel" aria-labelledby="adverts-tab">
                <!-- Content for Tender adverts -->
                <div class="table-responsive">
                    <?php $obj=new query();
                        echo $obj->getOpportunities('Advertised_Vacancies');
                        ?>
                    </div>
            </div>
            <div class="tab-pane fade" id="rfq" role="tabpanel" aria-labelledby="rfq-tab">
                <div class="table-responsive">
                <?php $obj=new query();
                        echo $obj->getOpportunities('Internships_learnerships');
                        ?>
                    </div>
                </div>
            </div>
            
    </div>
</div>
<!-- Tabs and Tables End -->

</br> </br> 
</br> </br>


<!--content end-->


<!-- footer Start -->
<?php include_once '../includes/inc_footer.php'; ?>
<?php include_once '../includes/inc_pagebottom.php'; ?>

</body></html>