<?php
$from = filter_var($_POST['from'], FILTER_VAR_EMAIL);
// mailto will be here
$to = 'email@example.com';
$message ="Hello world!";

$res = mailto($from, $to, $message); 
