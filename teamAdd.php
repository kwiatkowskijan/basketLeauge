<?php 

session_start();

if(isset($_POST['submit']) && isset($_POST['teamName']) && isset($_POST['teamCoach']) && isset($_POST['teamCity']) && isset($_POST['teamCreationDate']) && isset($_POST['teamShortName']) && isset($_FILES['teamLogo'])) {

    $teamName = $_POST['teamName'];

    if(strlen($teamName)>5) {
        header('location: adminPanel.php');
        echo "Za długa nazwa drużyny";
    }
    else {
        echo "Git";
    }

}

?>
