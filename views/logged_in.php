<?php include('../components/header.php'); ?>

<div class="afterRegister-div container-fluid px-0">
    <h1> Thanks for registering<?php echo $_GET['vorname'] ?? NULL ?></h1>
    <a href="registration_form.php">Back</a>
</div>

<?php include('../components/footer.php'); ?>