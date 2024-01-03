<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $phone = $_POST['phone'];
        $country = mysqli_real_escape_string($connection,$_POST['country']);
        $hotel = mysqli_real_escape_string($connection,$_POST['hotel']);
        $location = mysqli_real_escape_string($connection,$_POST['location']);
        $guests = $_POST['guests'];
        $date = mysqli_real_escape_string($connection,$_POST['date']);

        if (!filter_var($phone, FILTER_VALIDATE_INT)) {
            echo 'Invalid phone number';
            header('Location: ybook.php');
            exit();
        }

        $request = " INSERT INTO book_form(first_name, last_name, email, phone, country, hotel, location, guests, date) VALUES
        (?,?,?,?,?,?,?,?,?) ";

        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$request)){
            echo 'error';
        }else{
            mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $email, $phone, $country, $hotel, $location, $guests, $date);
            mysqli_stmt_execute($stmt);
        }

        header('location:book.php');
    }else{
        echo'something went wrong try again';
    }


?>