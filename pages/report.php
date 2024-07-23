
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>annual ReportS</title>

    <?php include_once '../includes/inc_pagemetadata.php'; ?>
    <?php include_once '../config/connection.php'; ?>
    <?php include_once '../functions/functions.php'; ?>
    

</head><body>


<!-- navigation -->
<?php include_once '../includes/inc_header.php'; ?>
<!-- nav part end -->

<!-- content-->
<?php $grouptype='annual_report';?>

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-0">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Annual Reports</h1>
            <a href="../index.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">Reports</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Tabs and Tables Start -->
<div class="container-fluid bg-light py-4">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="adverts-tab" data-bs-toggle="tab" data-bs-target="#adverts" type="button" role="tab" aria-controls="adverts" aria-selected="true">RECENT REPORTS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rfq-tab" data-bs-toggle="tab" data-bs-target="#rfq" type="button" role="tab" aria-controls="rfq" aria-selected="false">2021/2022 - REPORT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="awarded-tab" data-bs-toggle="tab" data-bs-target="#awarded" type="button" role="tab" aria-controls="awarded" aria-selected="false">2017/2018 -  REPORT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="closing-tab" data-bs-toggle="tab" data-bs-target="#closing" type="button" role="tab" aria-controls="closing" aria-selected="false">OLDER REPORTS</button>
            </li>
           
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="adverts" role="tabpanel" aria-labelledby="adverts-tab">
                <!-- Content for Tender adverts -->
                <div class="table-responsive">
                    
                    <?php $obj=new query();
                    echo $obj->getReports($grouptype,'2023','2023');
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="rfq" role="tabpanel" aria-labelledby="rfq-tab">
                <div class="table-responsive">
                    <table id="rfqTable" class="table  mt-3 mx-auto">
                    <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Closing date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-2.pdf">RFQ DOCUMENT - TRAINING OF POPIA TO LEVEL 3 TO 7 STAFF MEMBERS FOR 4 DAYS Re-advert</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-2.pdf">RFQ DOCUMENT - TRAINING OF POPIA TO LEVEL 3 TO 7 STAFF MEMBERS FOR 4 DAYS Re-advert</a></td>
                                <td>2024-06-04</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="awarded" role="tabpanel" aria-labelledby="awarded-tab">
                <div class="table-responsive">
                    <table id="awardedTable" class="table  mt-3 mx-auto">
                    <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Closing date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-2.pdf">RFQ DOCUMENT - TRAINING OF POPIA TO LEVEL 3 TO 7 STAFF MEMBERS FOR 4 DAYS Re-advert</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="closing" role="tabpanel" aria-labelledby="closing-tab">
                <div class="table-responsive">
                    <table id="closingTable" class="table  mt-3 mx-auto">
                    <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Closing date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-2.pdf">RFQ DOCUMENT - TRAINING OF POPIA TO LEVEL 3 TO 7 STAFF MEMBERS FOR 4 DAYS Re-advert</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-1.pdf">RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</a></td>
                                <td>2024-06-04</td>
                            </tr>
                            <tr>
                                <td><a href="link-to-document-2.pdf">RFQ DOCUMENT - TRAINING OF POPIA TO LEVEL 3 TO 7 STAFF MEMBERS FOR 4 DAYS Re-advert</a></td>
                                <td>2024-06-04</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>
<!-- Tabs and Tables End -->




<!--content end-->

</br> </br> 
</br> </br>



<!-- footer Start -->
<?php include_once '../includes/inc_footer.php'; ?>
<?php include_once '../includes/inc_pagebottom.php'; ?>

</body></html>