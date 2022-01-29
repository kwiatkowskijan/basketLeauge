<?php
require("connect.php");
?>
<table>
    <tr>
        <th>Zawodnik</th>
        <th>Data urodzenia</th>
        <th>Drużyna</th>
    </tr>
    <?php
    $sql = "select `first_name`,`last_name`,`birth_date`,`name` from players
            inner join `teams` on
            `players`.`team_id` = `teams`.`id`;";

    $result = mysqli_query($connect, $sql);

    while ($table = mysqli_fetch_array($result)) {
        echo "<tr><td>" . $table['first_name'] . " " . $table['last_name'] . "</td><td>" . $table['birth_date'] . "</td><td>" . $table['name'] . "</td></tr>";
    }

    mysqli_close($connect);
    ?>
</table>