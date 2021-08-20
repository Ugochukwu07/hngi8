<?php
session_start();
function dd($value) {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
include('mailer.php');
include('validate.php');
#variables
$fullName = $email = $subject = $message = $phone = '';
#errors
$errors = array();
$error = array();
$errors['fullName-empty'] = $errors['fullName-invalid'] = $errors['email-empty'] = $errors['email-invalid'] = '';
$errors['subject-empty'] = $errors['phone-invalid'] = $errors['phone-empty']  = $errors['message-empty'] = '';

function errorMaker($arr) {
    global $errors;
    foreach ($arr as $value) {
        if(!empty($errors[$value])){echo "<p>" . $errors[$value] . "</p>";}
    }
}

function setMsg($msg, $type) {
    $_SESSION['message'] = $msg;
    $_SESSION['type'] = $type;
}

if(isset($_POST['contact'])){
    $generalErrors = validate($_POST);
    $errors = $generalErrors[0];
    if(count($generalErrors[1]) === 0){
        $template = 'mail.php';
        $swap_var = array(
            '#fullName#' => $_POST['fullName'],
            '#email#' => $_POST['email'],
            '#message#' => $_POST['message'],
            '#phone#' => $_POST['phone'],
            '#subject#' => $_POST['subject']
        );
        mailing($template, $swap_var);
        setMsg('I have received Your message', 'success');
    }else{
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        setMsg('Error. Scroll Down and try again', 'danger');
    }
}