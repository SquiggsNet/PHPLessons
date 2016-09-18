<?php
    $phpVersion = phpversion();
    echo "<h1>This page was rendered in PHP version $phpVersion</h1>";
    $zendVersion = zend_version();
    echo "<h1>This page was rendered using PHP's ZEND scripting version $zendVersion</h1>";
    $mimeTypeDefault = ini_get("default_mimetype");
    echo "<h1>This page's default mimetype is: $mimeTypeDefault</h1>";
?>