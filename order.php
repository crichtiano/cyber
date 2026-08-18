<?php
if($_POST) {
    try{
        if(isset($_POST["firstname"])){
            $firsname = $_POST["firstname"];
        }else{
            $firsname = "";
        }
        if(isset($_POST["lastname"])){
            $lastname = $_POST["lastname"];
        }else{
            $lastname = "";
        }
        if(isset($_POST["number"])){
            $number = $_POST["number"];
        }else{
            $number = "";
        }
        if(isset($_POST["email"])){
            $email = $_POST["email"];
        }else{
            $email = "";
        }
        if(isset($_POST["memory"])){
            $dost = $_POST["memory"] ;
        }else{
            $dost = "";
        }
        if(isset($_POST["Country"])){
            $Country = $_POST["Country"];
        }else{
            $Country = "";
        }
        if(isset($_POST["siti"])){
            $siti = $_POST["siti"];
        }else{
            $siti = "";
        }
        if(isset($_POST["sitvil"])){
            $sitvil = $_POST["sitvil"];
        }else{
            $sitvil = "";
        }
        if(isset($_POST["postnum"])){
            $postnum = $_POST["postnum"];
        }else{
            $postnum = "";
        }
        if(isset($_POST["method"])){
            $method = $_POST["method"];
        }else{
            $method = "";
        }
        if(isset($_POST["comment"])){
            $comment = $_POST["comment"];
        }else{
            $comment = "";
        }
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
        $textMessage = "Заявка замовлення з сайту. ";
        if($firsname) {
            $textMessage .= "\n firstname: " . $firsname;
        }
        if($lastname) {
            $textMessage .= " \n lastname: " . $lastname;
        }
        $textMessage .= " \n number:" . $number . " \n email:" . $email . " \n deliver:" . $dost . "\n Country:" . $Country . " \n cyti: " . $siti . " \n cyti or vilig:" . $sitvil . " \n postnum:" . $postnum . " \n method:" . $method . " \n comment:" . $comment;
        $textMessage = urlencode ("$textMessage");
        $urlQuery = "https://api.telegram.org/bot". $token ."/sendMessage?chat_id=". $chat_id. "&text=" . $textMessage;
        $urlQuery .= "&parse_mode=HTML";
        $result = file_get_contents ($urlQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="dark-bgc"></div>
    <div class="popup" id="popup">
        <div class="popup-content">
            <p class="close" id="close">x</p>
            <div class="tabs">
                <a href="#" class="active btn" data-reg="login">
                    Log in
                </a>
                <a href="#" class="btn" data-reg="signup">
                    Sign up
                </a>
            </div>
            <form method="post" action="singin.php" class="form login active">
                <div class="conlog">
                    <label class="logled">Email or phone</label>
                    <input name="emaorpho" type="text" placeholder="Enter your email or phone">
                </div>
                <div class="conlog1">
                    <label class="logled">Password</label>
                    <input name="passwords" type="password" placeholder="Password">
                </div>
                <a class="forgot" href="#">Forgot password?</a>
                <button type="submit" class="btn-log">
                    Log in
                </button>
            </form>
            <form method="post" action="singup.php" class="form signup">
                <div class="consin2">
                    <label class="know">First name</label>
                    <input name="firstname" type="text" placeholder="Enter your first name">
                </div>
                <div class="consin">
                    <label class="know">Last name</label>
                    <input name="lastname" type="text" placeholder="Enter your last name">
                </div>
                <div class="consin">
                    <label class="know">Email or phone</label>
                    <input name="emorph" type="text" placeholder="Enter your email or phone">
                </div>
                <div class="consin">
                    <label class="know">Password</label>
                    <input name="password" type="password" placeholder="*********">
                </div>
                <div class="consin1">
                    <label class="know">Repeat password</label>
                    <input name="reppasword" type="password" placeholder="*********">
                </div>
                <button type="submit" class="btn-log">
                    Sign up
                </button>
            </form>
        </div>
    </div>
    <header class="header">
        <div class="head wrapper">
            <div class="logo">
                <a href="index.html">
                    <source srcset="img/footlogo.svg" type="image/png">
                    <img src="img/footlogo.svg" alt="cyber-logo">
                </a>
            </div>
            <nav class="">
                <div class="main flax-between flax-centr">
                    <div class="dark-bgc"></div>
                    <div class="menubug">
                        <ul class="menu">
                            <li><a class="swap" href="index.html">Home</a></li>
                            <li><a class="swap" href="aboutus.html">About us</a></li>
                            <li><a class="swap" href="contact.html">Contact</a></li>
                            <li><a class="swap" href="blog.html">Blog</a></li>
                            <li class="cancel">x</li>
                        </ul>
                    </div>
                    <div class="sociall">
                        <a class="fastmove" href="basket.html"><img src="img/ShoppingCart.svg" alt="magazin">
                        </a>
                        <a class="fastmove" href="favourite.html"><img src="img/heard.svg" alt="like">
                        </a>
                        <a class="fastmove" id="open" href="#"><img class="open" src="img/login.svg" alt="login">
                        </a>
                    </div>

            </nav>
            <div class="burger">
                <span class="br1"></span>
                <span class="br2"></span>
                <span class="br3"></span>
            </div>
        </div>
        <div class="main-catalog">
            <ul class="main-catalog flax-between wrapper">
                <li class="li"><a class="a" href="#">Phones</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg></li>
                <li class="li"><a class="a" href="#">Computers</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg></li>
                <li class="li"><a class="a" href="#">Smart Watches</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg></li>
                <li class="li"><a class="a" href="#">Cameras</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg></li>
                <li class="li"><a class="a" href="#">Headphones</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="li"><a class="a" href="#">Gaming</a><svg width="17" height="10" viewBox="0 0 12 7"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L6.00002 5.5L11.5 0.5" stroke="#F1F1F1" stroke-linecap="round" />
                    </svg>
                </li>
            </ul>
        </div>
    </header>
    <main class="mainthank">
        <div class="con-thx">
            <div class="conthan">
                <h1 class="h1thank">замовлення оформлено</h1>
            </div>
            <div class="conthan">
                <p class="pthx">наш менеджер скоро звяжеться з вами</p>
            </div>
            <div class="conthan btnthank">
                <p>
                    <a class="btn-back" href="index.html">на головну</a>
                </p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer ">
            <div class="footer wrapper">
                <div class="Cyber">
                    <div class="foot-logo">
                        <a href="index.html">
                            <img src="img/headlogo.svg" alt="footerlogo">
                        </a>
                    </div>
                    <div class="foottext">
                        <p>We are a residential interior design firm located in Ukraine. Our boutique-studio offers more
                            than
                            1000
                            devices.</p>
                    </div>
                    <div class="social">
                        <a class="socialm" href="#">
                            <img src="img/SocialIcons.svg" alt="Socialinst">
                        </a>
                        <a class="socialm" href="#">
                            <img src="img/youtobe.svg" alt="Socialyoutobe">
                        </a>
                        <a class="socialm" href="#">
                            <img src="img/face.svg" alt="Socialface">
                        </a>
                        <a class="socialm" href="#">
                            <img src="img/tread.svg" alt="Socialtread">
                        </a>
                    </div>
                    <div class="policy">
                        <a class="policy" href="#">Privacy policy</a>
                    </div>
                </div>
                <div class="service">
                    <h2 class="serv">Services</h2>
                    <ul class="servicesmenu">
                        <li><a class="serme" href="#">Bonus program</a></li>
                        <li><a class="serme" href="#">Gift card</a></li>
                        <li><a class="serme" href="#">Service contact</a></li>
                        <li><a class="serme" href="#">Payment</a></li>
                    </ul>
                </div>
                <div class="assistance">
                    <h2 class="serv">Assistance to the buyer</h2>
                    <ul class="assistancemenu">
                        <li><a class="serme" href="#">Find an order</a></li>
                        <li><a class="serme" href="#">Terms of deliver</a></li>
                        <li><a class="serme" href="#">Exchange and return of goods</a></li>
                        <li><a class="serme" href="#">Frequently asked questions</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <p class="year ">© Copyright by Cyber 2020-2026</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>