<?php
session_start();
include('mailer.php');
#variables
$fullName = $email = $subject = $message = $phone = '';
#errors
$errors['fullName-empty'] = $errors['fullName-invalid'] = $errors['email-empty'] = $errors['email-invalid'] = '';
$errors['subject-empty'] = $errors['phone-invalid'] = $errors['phone-empty'] = $errors['message-invalid'] = '';

function errorMaker($arr) {
    foreach ($arr as $value) {
        if(!empty($errors[$value])){echo "<p>" . $errors[$value] . "</p>";}
    }
}

function setMsg($msg, $type) {
    $_SESSION['message'] = $msg;
    $_SESSION['type'] = $type;
    header('loaction: index.php#contact');
    exit();
}

function validate($data) {
    $errors = array();
    $error = array();
    $regexName = "/^[a-zA-Z]+^/";
    $regexEmail = "/^[a-zA-Z0-9\d\_\.]+@[a-zA-Z0-9]+.[a-zA-Z0-9]^/";
    $regexPhone = "/^\+[0-9]^/";
    $emptyInput = array(
        'fullName' => 'Full Name is Empty',
        'email' => 'Email Is Empty',
        'phone' => 'Phone Number is Required',
        'subject' => 'Subject is Missing',
        'message' => 'Must not be Empty'
    );

    foreach ($emptyInput as $key => $value) {
        if(empty($data[$key])){
            $errors[$key] = $value;
            array_push($error, $value);
        }else{
            $errors[$key] = '';
        }
    }
    if(empty($data['fullName'])){
        $errors['fullName'] = 'Full Name is Empty';
        array_push($error, '1');
    }else{
        $errors['fullName'] = '';
    }
}

if(isset($_POST['contact'])){
    $generalErrors = validate($_POST);
    $errors = $generalErrors[0];
    if(count($generalErrors[1]) === 0){
        $template = 'mail.php';
        mailing($template, $_POST);
        setMsg('I have received Your message', 'success');
    }else{
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    }
}