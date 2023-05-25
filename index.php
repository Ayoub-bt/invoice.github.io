<?php

const APP_RUN = true;

const APP_BASE_PATH = __DIR__;
const APP_SYSTEM_PATH = __DIR__.'/system';
const APP_STORAGE_PATH = __DIR__.'/storage';
const APP_CACHE_PATH = APP_STORAGE_PATH.'/cache';

require APP_SYSTEM_PATH. '/app.php';

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <img src="./ui/theme/default/img/error.jpg" width="100%" alt="">
</body>
</html> -->