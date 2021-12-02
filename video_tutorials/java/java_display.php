<?php

include '../.././admin/includes/header.php';


// API config 
$API_Key    = 'AIzaSyCXzKvp2vDpC-WENr_h8h7uZUQczB8plcU'; 
$Channel_ID = 'UCQYMhOMi_Cdj1CEAU-fv80A'; 
$Max_Results = 10; 
 
$apiError = 'Video Not Found!';
try{
    // Get videos from channel by YouTube Data API 
    $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$Channel_ID.'&maxResults='.$Max_Results.'&key='.$API_Key.''); 

    if($apiData){ 
        $videoList = json_decode($apiData); 
    }else{ 
        throw new Exception('Error: Cannot retrieve API data');

    }
}catch(Exception $e){
    echo $apiError = $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Tutorial Videos</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <a class="navbar-brand text-white" href="../../index.php">Jobify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
            <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
        </li> 
    </div>
    </nav>
    <br/><br/><br/>
    <div class="container">
        <h1 class="headt">Videos Using YouTube API</h1>
        <?php
            if(!empty($videoList->items)) {
                foreach($videoList->items as $item) {
                    if(isset($item->id->videoId)){
                        ?>
                        <!-- // output videos from youtube api in a grid format -->
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <a href="https://www.youtube.com/watch?v=<?php echo $item->id->videoId; ?>" target="_blank">
                                    <img src="<?php echo $item->snippet->thumbnails->medium->url; ?>" alt="<?php echo $item->snippet->title; ?>">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $item->snippet->title; ?></h3>
                                    <p><?php echo $item->snippet->description; ?></p>
                                </div>
                            </div>
                        </div>
                        
                       
                        <?php
                    }
                }
            }else{
                echo '<p class="error">'.$apiError.'</p>';
            }
        ?>
    </div>

</body>

</html>

