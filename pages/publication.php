
<!doctype html>

<html lang="en"><head>
    <!-- Required meta tags -->


    <title>Publications</title>

    <?php include_once '../includes/inc_pagemetadata.php'; ?>
    <?php include_once '../config/connection.php'; ?>

    <style>
        /* TENDERS*/

.bg-tender {
    background-color: rgba(128, 0, 0, 0.6); /* 0.5 represents 50% transparency */
    color: white;
    padding: 15px;
}
.nav-tabs .nav-link {
    font-size: 1.1rem; /* Increase font size for nav items */
    background-color: #616161;
    color: #77ccff;
    border: 1px solid #ddd;
    text-align: center; /* Center text */
}
.nav-tabs .nav-link.active {
    
    color: #A52A2A;
    width: 250px; /* Increase width of nav links */
    text-align: center; /* Center text */
    
}
.table thead th {
    background-color: #616161;
    color: white;
    font-size: 1.1rem;
    height: 60px; /* Adjust the height as needed */
}

.table {
    background-color: #ffffff; /* White background for the whole table */
}

.table tbody tr td {
    background-color: #ffffff !important; /* White background for table cells */
    border-left: 1px solid #ddd; /* Left border for table cells */
    border-right: 1px solid #ddd; /* Right border for table cells */
}
/* Custom styles for the table rows */
.table tbody tr {
    height: 60px; /* Adjust the height as needed */
}
.dataTables_wrapper .dataTables_paginate .paginate_button a {
    color: #1c0963 !important; /* Maroon color for pagination buttons */
}
.dataTables_wrapper .dataTables_info, 
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    color: #1c0963!important; /* Maroon color for info text, length menu, and search input */
}

th.description-col {
    min-width: 500px; /* Adjust the width as needed */
}
@media (max-width: 768px) {
    .nav-tabs .nav-link {
        font-size: 1rem; /* Smaller font size for nav items on small screens */
        width: auto; /* Adjust width for small screens */
    }
    th.description-col {
        min-width: auto; /* Adjust the width for small screens */
    }
}

/* Remove color and underline from links in table */
.table a {
    color: inherit; /* Inherit color from parent element */
    text-decoration: none; /* Remove underline */
}
.table a:hover {
    text-decoration: underline; /* Add underline on hover */
}


/* Custom styles to limit the table width */
.custom-width {
    max-width: 800px; /* Set your desired max-width here */
    width: 100%;
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
            <h1 class="display-3 text-white animated zoomIn">Publications</h1>
            <a href="pages/home.php" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h4 text-white">News</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Tabs and Tables Start -->
<div class="container-fluid bg-light py-4">
    <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="adverts-tab" data-bs-toggle="tab" data-bs-target="#adverts" type="button" role="tab" aria-controls="adverts" aria-selected="true">MEDIA RELEASE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="rfq-tab" data-bs-toggle="tab" data-bs-target="#rfq" type="button" role="tab" aria-controls="rfq" aria-selected="false">MAGAZINES</button>
            </li>
           
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="adverts" role="tabpanel" aria-labelledby="adverts-tab">
                <!-- Content for Tender adverts -->
                <div class="table-responsive">
                    <table id="advertsTable" class="table  mt-3 mx-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Date Published</th>
                                <th scope="col">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                           
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="rfq" role="tabpanel" aria-labelledby="rfq-tab">
                <div class="table-responsive">
                    <table id="rfqTable" class="table  mt-3 mx-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="description-col">Description</th>
                                <th scope="col">Date Published</th>
                                <th scope="col">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            <tr>
                                <td>RFQ DOCUMENT - APPOINTMENT OF SUITABLE SERVICE PROVIDER TO PROVIDE LOGISTICS FOR MUNICIPAL PARTICIPATION IN THE 2024 PRESIDENTIAL INAUGURATION EV</td>
                                <td>2024-05-28</td>
                                <td><a href="link-to-document-1.pdf">View</a></td>
                            </tr>
                            
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Tabs and Tables End -->

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