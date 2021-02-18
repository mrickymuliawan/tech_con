<?php include('../database/connection.php');
include('../components/header.php'); ?>


<div class="afterRegister-div container-fluid px-0">
    <h1>Thank you, <?php echo $_GET['success'] ?? NULL; ?></h1>
</div>

<?php include('../components/footer.php'); ?>