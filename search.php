<?php
    $search = $_GET['search'];
    $search_encode = urlencode($search);
    $url = file_get_contents("http://www.omdbapi.com/?t=" . $search_encode . "&y=&apikey=36eb9564");
    $data = json_decode($url, true);
    $response = $data['Response'];
    if ($response == 'False') {
        header("Location: notfound.php?title=$search");
        exit();
    } else {
        header("Location: detail.php?title=$search");
        exit();
    }
?>
