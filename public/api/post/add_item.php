<?php

$title = $_POST['title'];
$details = $_POST['details'];


if(empty($title)){
    $output['errors'][] = 'No title found';
}

if(empty($details)){
    $output['errors'][]='No details found';
}

if(empty($output['errors'])){
    $query = "Insert into `items` (`title`, `details`) VALUES ('$title', '$details')";
    $result = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0 ){
        $output['success'] = true;
    }else {
        $output['errors'] = 'error saving item to database';
    }
}