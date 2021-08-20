<?php

/* 
This function validates the data submit from contact us form and it will return a multi-dimensional array
containg countable array: to check it theres error or not and Displable Error array: These are errors shown to the Clients
*/
function validate($data) {
    $errors = array(); //Declare errors as an empty array this will contain the Displable Error
    $error = array(); // this will contain the countable error array
    $regexemail = "/^[a-zA-Z\d\._]+@[a-zA-Z\d\.]+$/"; //Regular Expression for Email Input filed
    $regexephone = "/^[0-9\+]+$/"; //Regular Expression for Phone Number field
    $regexname = "/^[a-zA-Z\s.]{1}+[a-zA-Z\s]+$/"; // Regular Expression for Fullname Input filed
    $emptyInput = array(
        'fullName' => 'Full Name is Empty',
        'email' => 'Email Is Empty',
        'phone' => 'Phone Number is Required',
        'subject' => 'Subject is Missing',
        'message' => 'Must not be Empty'
    );
    /* This array contains Input fields and the correspoing error message if its left empty */
    $regexInput = array(
        'fullName' => [$regexname, 'Full Name has Invalid Charatcers'],
        'email' => [$regexemail, 'Email has Inavide Charatecers'],
        'phone' => [$regexephone, 'Phone Number is Inavid']
    );
    /* This array contains Input fields and an array containing the corsponding Regular Expression and Erros messages */

    /* This will loop through value in the not empy array to check for the fileds thats empty */
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

    /* This will loop through value in the Regular Expression and Erros messages array to check for the fileds that doest match */
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
    /* make the two error into a multy dimesional array */
    $generalErrors = array($errors, $error);
    
    return $generalErrors; //return the arrary
}