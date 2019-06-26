<?php
function getYoutubeId($url){

    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match); 
    return isset( $match[1])? $match[1]:null ;
}
