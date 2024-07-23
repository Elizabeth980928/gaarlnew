$(document).ready(function() {
    $('#advertsTable, #rfqTable, #awardedTable, #closingTable, #archivesTable').DataTable({
        "paging": true,
        "searching": false,
        "info": true,
        "pageLength": 5, // Show only 5 entries per page
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    });
});


