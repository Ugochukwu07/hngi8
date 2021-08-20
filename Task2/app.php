<?php
/* Needed session for alrets */
session_start();

/* This is to display results(for debuging) */
function dd($value) {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
/* Mailer is added */
include(ROOT_PATH . '/mailer.php');
include(ROOT_PATH . '/validate.php'); //Vaildation form
#variables
$fullName = $email = $subject = $message = $phone = '';
#errors
$errors = array();
$error = array();
$errors['fullName-empty'] = $errors['fullName-invalid'] = $errors['email-empty'] = $errors['email-invalid'] = '';
$errors['subject-empty'] = $errors['phone-invalid'] = $errors['phone-empty']  = $errors['message-empty'] = '';

//This helps to display errors per input filed
function errorMaker($arr) {
    global $errors;
    foreach ($arr as $value) {
        if(!empty($errors[$value])){echo "<p>" . $errors[$value] . "</p>";}
    }
}

//this sets the session message for error or success
function setMsg($msg, $type) {
    $_SESSION['message'] = $msg;
    $_SESSION['type'] = $type;
}

//If the contact form is submited
if(isset($_POST['contact'])){
    $generalErrors = validate($_POST); //Validate the inputs
    $errors = $generalErrors[0]; // Get the displable errors
    //count the countable errors
    if(count($generalErrors[1]) === 0){
        $template = 'mail.php'; //mail templete that will be sent
        //SDwap variables to swap the placeholders i temeplet with the main data
        $swap_var = array(
            '#fullName#' => $_POST['fullName'],
            '#email#' => $_POST['email'],
            '#message#' => $_POST['message'],
            '#phone#' => $_POST['phone'],
            '#subject#' => $_POST['subject']
        );
        //Cal the maing funtipon to send mails
        mailing($template, $swap_var);
        setMsg('I have received Your message', 'success'); //set success message
    }else{
        //if theres an errors it will return the pervious values
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        setMsg('Error. Scroll Down and try again', 'danger'); //set error message to notify the client
    }
}