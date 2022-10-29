<?php

if(isset($_POST['category'])){
    $category = $_POST['category'];

    header("Location: ../test_portal.php?category=".$category);
    exit();
}

?>