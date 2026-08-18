<?php
if($_POST) {
    try{
        $firsname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $dost = $_POST["memory"];
        $Country = $_POST["Country"];
        $siti = $_POST["siti"];
        $sitvil = $_POST["sitvil"];
        $postnum = $_POST["postnum"];
        $method = $_POST["method"];
        $comment = $_POST["comment"];
    }catch(\Throwable $th) {
        $firsname = "Error in massege";
        $lastname = "Error in massege";
        $number = "Error in massege";
        $email = "Error in massege";
        $dost = "Error in massege";
        $Country = "Error in massege";
        $siti = "Error in massege";
        $sitvil = "Error in massege";
        $postnum = "Error in massege";
        $method = "Error in massege";
        $comment = "Error in massege";
    }
        $token = "8842868099:AAHmCFsEVBLwH-Js-Gf7TrcFLs3P4rdpdsQ";
        $chat_id = 5368288287;
        $textMessage = "Заявка замовлення з сайту. \n firstname:" . $firsname . " \n lastname: " . $lastname . " \n number:" . $number . " \n email:" . $email . " \n deliver:" . $dost . "\n Country:" . $Country . " \n cyti: " . $siti . " \n cyti or vilig:" . $sitvil . " \n postnum:" . $postnum . " \n method:" . $method . " \n comment:" . $comment;
        $textMessage = urlencode ("$textMessage");
        $urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id. "&text=" . $textMessage;
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents ($urlQuery);
}
?>