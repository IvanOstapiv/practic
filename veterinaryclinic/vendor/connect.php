<?php

    $connect = mysqli_connect('localhost', 'root', '', 'veterinary_clinic');

    if (!$connect) {
        die('Error connect to DataBase');
    }