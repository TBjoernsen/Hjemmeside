<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Hjem</title>
</head>
<body>

<div class="topnav">
    <?php

    if ($file == "index")
        <a class="active" href="index.html"><i class="fa-solid fa-house"></i></a>
    else
        <a href="index.html"><i class="fa-solid fa-house"></i></a>
    
    if ($file =="sudietur")
        <a class="active" href="studietur.html"><i class="fa-solid fa-train-subway"></i></a>
    else
        <a href="studietur.html"><i class="fa-solid fa-train-subway"></i></a>

    if($file =="kort")
        <a class="active" href="kort.html"><i class="fa-solid fa-map"></i></a>
    else
        <a href="kort.html"><i class="fa-solid fa-map"></i></a>

    if($file =="om")
        <a class="active" href="om.html"><i class="fa-solid fa-user"></i></a>
    else
        <a href="om.html"><i class="fa-solid fa-user"></i></a>

    if($file =="videos")
        <a class="active" href="videos.html"><i class="fa-solid fa-video"></i></a>
    else
        <a href="videos.html"><i class="fa-solid fa-video"></i></a>

    if($file =="countdn")
        <a class="active" href="countdn.html"><i class="fa-solid fa-clock"></i></a>
    else
        <a href="countdn.html"><i class="fa-solid fa-clock"></i></a>
</div>