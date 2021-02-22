<?php include('../database/connection.php');
include('../components/header.php'); ?>


<div class="container-fluid confirm-container">
    <div class="confirmation-div container-fluid px-0">
        <h3><?php echo $_GET['success'] . " " . "Wir werden Sie über den finalen Termin per Email informieren. Vielen Dank!" ?? NULL; ?></h3>
    </div>
</div>

<?php include('../components/footer.php'); ?>