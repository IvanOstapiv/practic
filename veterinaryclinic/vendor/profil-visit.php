<?php
    session_start();
    require_once 'connect.php';

        $check_acc = $_SESSION['user']['login'];
        $check_visit = mysqli_query($connect, "SELECT * FROM `visit` WHERE `acc` = '$check_acc'");
        
        if (mysqli_num_rows($check_visit) > 0) {
       
       
        $visit = mysqli_fetch_assoc($check_visit);
        print_r($visit);
        
      
        $_SESSION['visit']=[
            "id" => $visit['visitID'],
            "reason" => $visit['reason_for_visit'],
            "name" => $visit['name'],
            "surname" => $visit['surname'],
            "acc" => $visit['acc'],
            "phone" => $visit['number_phone'],
            "message" => $visit['messageText']
        ];

    }
    header('Location: ../profile.php');