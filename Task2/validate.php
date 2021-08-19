<?php

function validate($data) {
    $errors = array();
    $error = array();
    $regexemail = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\.]+$/";
    $regexephone = "/^[0-9\+]+$/";
    $regexname = "/^[a-zA-Z\s.]{1}+[a-zA-Z\s]+$/";
    $emptyInput = array(
        'fullName' => 'Full Name is Empty',
        'email' => 'Email Is Empty',
        'phone' => 'Phone Number is Required',
        'subject' => 'Subject is Missing',
        'message' => 'Must not be Empty'
    );
    $regexInput = array(
        'fullName' => [$regexname, 'Full Name has Invalid Charatcers'],
        'email' => [$regexemail, 'Email has Inavide Charatecers'],
        'phone' => [$regexephone, 'Phone Number is Inavid']
    );

    foreach ($emptyInput as $key => $value) {
        if(empty($data[$key])){
            $key .= '-empty';
            $errors[$key] = $value;
            array_push($error, $value);
        }else{
            $key .= '-empty';
            $errors[$key] = '';
        }
    }

    foreach ($regexInput as $key => $value) {
        if(!empty($data[$key]) && !preg_match($value[0], $data[$key])){
            $key .= '-invalid';
            array_push($error, $value[1]);
            $errors[$key] = $value[1];
        }else{
            $key .= '-invalid';
            $errors[$key] = '';
        }
    }
    $generalErrors = array($errors, $error);
    return $generalErrors;
}