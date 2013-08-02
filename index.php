<?php
require_once 'firebaseLib.php';

// --- set up your own database here
$url = 'https://rfid-catcher.firebaseIO.com/';
$token = 'fcDgjeWLTwlIaOqkkIj0D6BfTvkdcfHm4MMLjlkJ';
$rfidid = $_GET['rfidid'];
$fb = new fireBase($url, $token);
$todoPath = '/rfid/ids';


printf("Reading data from %s\n", $todoPath);
response = $fb->get($todoPath);
printf("Result: %s\n", $response);
sleep(2);
