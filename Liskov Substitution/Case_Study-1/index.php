<?php

include_once("Whatsapp.php");
include_once("Instagram.php");

echo "<h3> Output Study Case 1 - Liskov Substitution </h3>";
$wa = new Whatsapp();
$ig = new Instagram();

echo "<h5'> Whatsapp </h5>";
$wa->chat();
$wa->sendPhotosAndVideos();
$wa->callGroupVideo();

echo "<h5'> Instagram </h5>";
$ig->chat();
$ig->sendPhotosAndVideos();
$ig->publishPost();
