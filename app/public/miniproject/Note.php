<?php

    $condb = mysqli_connect("laravel-db","root","123456","MyNotes")
    or die("Error : ".mysqli_error($condb));

    mysqli_set_charset($condb, 'utf8');

    mysqli_query($condb, "SET NAME 'utf8' ");

    date_default_timezone_set('Asia/Bangkok');

?>