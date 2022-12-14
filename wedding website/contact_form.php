<?php

$connection =mysqli_connect('localhost', 'root', '', 'contact_db' );

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $request ="insert into contact_form(name,email,phone,address,message) values('$name','$email','$phone','$address','$message')";
    mysqli_query($connection, $request);
    header('location:index.php');

}else{
    echo 'Something went wrong please try again!';
}
?>