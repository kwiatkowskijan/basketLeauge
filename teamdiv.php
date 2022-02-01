<?php
    require("connect.php");

    $sql = "select `background`,`name` from `teams";

    $result = mysqli_query($connect, $sql);

    while($table = mysqli_fetch_array($result)){
        echo "<div class='teamInfo' style='background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.5) 100%), url(img/$table[background]')><p>$table[name]</p></div>";
    }
?>