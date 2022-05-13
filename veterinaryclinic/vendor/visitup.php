<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $select = $_POST['select'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $spec_an = $_POST['spec_an'];
    $name_an = $_POST['name_an'];
    
    if($_SESSION['user'])
    {
        $acc = $_SESSION['user']['login'];
    }
    else{
        $acc = "NULL";
    }
    

    if ($name == "" ){

        $_SESSION['error1'] = 'це поле не має бути порожнім';
        header('Location: ../visit.php');
}
    elseif($surname == ""){
    $_SESSION['error2'] = 'це поле не має бути порожнім';
        header('Location: ../visit.php');
}
    elseif($select == ""){
    $_SESSION['error3'] = 'це поле не має бути порожнім';
        header('Location: ../visit.php');
}
    elseif($phone == ""){
    $_SESSION['error4'] = 'це поле не має бути порожнім';
        header('Location: ../visit.php');
}    
     else {
        if($_POST['message'] == ""){
            $message = "Немає";
        }
        mysqli_query($connect, "INSERT INTO `visit`(`name`, `surname`, `reason_for_visit`, `number_phone`, `messageText`, `acc`, `spec_an`, `name_an`) VALUES ('$name','$surname','$select','$phone','$message','$acc','$spec_an','$name_an')");

        $_SESSION['message'] = 'Дані відправлено!';
        header('Location: ../visit.php');
        
    }
?>
