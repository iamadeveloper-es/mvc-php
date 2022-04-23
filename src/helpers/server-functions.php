<?php
    function serverURL(){
        $httpProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
        $host = $_SERVER['HTTP_HOST'];
        $fullPath = $httpProtocol.'://'.$host;
        return $fullPath;
    }
?>