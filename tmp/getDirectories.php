<?php
    $rootfolder = "./";
    $result = scandir($rootfolder);
    echo json_encode($result);
?>