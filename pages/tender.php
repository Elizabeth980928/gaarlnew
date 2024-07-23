
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>Tenders</title>

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
            <h1 class="display-3 text-white animated zoomIn">Tenders</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Tenders</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Tabs and Tables Start -->
<div class="container-fluid bg-light py-4">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="adverts-tab" data-bs-toggle="tab" data-bs-target="#adverts" type="button" role="tab" aria-controls="adverts" aria-selected="true">ADVERTISED TENDERS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rfq-tab" data-bs-toggle="tab" data-bs-target="#rfq" type="button" role="tab" aria-controls="rfq" aria-selected="false">AWARDED TENDERS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="awarded-tab" data-bs-toggle="tab" data-bs-target="#awarded" type="button" role="tab" aria-controls="awarded" aria-selected="false">BIDS RECEIVED</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="closing-tab" data-bs-toggle="tab" data-bs-target="#closing" type="button" role="tab" aria-controls="closing" aria-selected="false">ARCHIVED</button>
            </li>
           
        </ul>
        
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="adverts" role="tabpanel" aria-labelledby="adverts-tab">
                <!-- Content for Tender adverts -->
                <div class="table-responsive">
                    <?php $obj=new query();
                    echo $obj->getOpportunities('advertised_tender');
                    ?>
                            
                </div>
            </div>

            <div class="tab-pane fade" id="rfq" role="tabpanel" aria-labelledby="rfq-tab">
                <div class="table-responsive">
                <?php $obj=new query();
                    echo $obj->getOpportunities('awarded_tender');
                    ?>
                </div>
            </div>

            <div class="tab-pane fade" id="awarded" role="tabpanel" aria-labelledby="awarded-tab">
              <div class="table-responsive">
                <?php $obj=new query();
                    echo $obj->getOpportunities('Bids_received');
                    ?>
              </div>
            </div>


            <div class="tab-pane fade" id="closing" role="tabpanel" aria-labelledby="closing-tab">
                <div class="table-responsive">
                        <?php $obj=new query();
                        echo $obj->getOpportunities('Achieved_tender');
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