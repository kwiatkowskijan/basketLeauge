<?php
    require("connect.php");

    $sql = "select `name` from `teams";

    $result = mysqli_query($connect, $sql);

    while($table = mysqli_fetch_array($result)){
        echo "<div class='teamInfo'>".$table["name"]."</div>";
    }
?>