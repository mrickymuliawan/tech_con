<?php include('../database/connection.php');
include('../components/header.php') ?>

<table>
    <tr>
        <th>id</th>
        <th>vorname</th>
        <th>nachname</th>
        <th>email</th>
        <th>firma</th>
    </tr>
    <?php
    //the query to get all participants
    $result = mysqli_query(
        $link,
        "select * from participants"
    );

    //check if query success
    if ($result) {
        //loop through all datas with while cos the datas are associated array
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>$row[id]</td>
                <td>$row[vorname]</td>
                <td>$row[nachname]</td>
                <td>$row[email]</td>
                <td>$row[firma]</td>
                </tr>";
        }
        // in case query failed, then throw the error
    } else {
        echo "error at " . mysqli_error($link);
    }
    ?>
</table>

<?php include('../components/footer.php') ?>