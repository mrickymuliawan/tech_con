<?php include('../database/connection.php');
include('../components/header.php'); ?>


<div class="container-fluid confirm-container">
    <div class="confirmation-div container-fluid px-0">
        <?php
        if (isset($_GET['id'])) {
            $id = mysqli_real_escape_string($link, $_GET['id']);
            $sql = "SELECT * FROM participants WHERE id={$id};";
            $result = mysqli_query($link, $sql);

            if ($result) {
                while ($row = mysqli_fetch_row($result)) {
                    var_dump($row);
                }
            } else {
                echo "error at: " . mysqli_error($link);
            }
        };
        ?>
        <h3><?php echo $_GET['success'] . " " . "Wir werden Sie über den finalen Termin per Email informieren. Vielen Dank!" ?? NULL; ?></h3>
    </div>
</div>

<?php include('../components/footer.php'); ?>