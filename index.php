<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Comfortaa&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://yastatic.net/jquery/2.2.0/jquery.min.js"></script>
    <script src="script/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/flex.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_sing.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300&display=swap" rel="stylesheet">
    <script src="script/filter.js"></script>
</head>
<body>
<script>

function check_login() {
    var check = /\w{5,}/;
    var log = document.getElementById('register_login').value ;
    if(log.match(check)==log){
        document.getElementById('register_login').style.backgroundColor = "rgb(149, 245, 165)";
    }
    else {
        document.getElementById('register_login').style.backgroundColor = "rgb(245, 149, 154)";
    };
};
function check_password() {
    var check = /\w{5,}/;
    var log = document.getElementById('register_password').value ;
    if(log.match(check)==log){
        document.getElementById('register_password').style.backgroundColor = "rgb(149, 245, 165)";
    }
    else {
        document.getElementById('register_password').style.backgroundColor = "rgb(245, 149, 154)";
    };
};

function check_rep_password(){
    var checked = document.getElementById('register_rep_password') ;
    var pat = document.getElementById('register_password');
    if(checked.value==pat.value){
        checked.style.backgroundColor = "rgb(149, 245, 165)";
    }
    else {
        checked.style.backgroundColor = "rgb(245, 149, 154)";
    };
};

</script>
<header class="dark">
        <div id="top">
            <div class="wrap main_flex__nowrap flex__align-items_center flex__jcontent_between">
                <div class="main_flex__nowrap flex__align-items_center">
                    <div onclick="document.location.href = 'index.php'" id="sign"
                        class="btn main_flex__nowrap flex__align-items_center flex__jcontent_between anime">
                        <svg height='300px' width='300px' fill="#000000"
                            xmlns:x="http://ns.adobe.com/Extensibility/1.0/"
                            xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/"
                            xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <switch>
                                <foreignObject requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" x="0"
                                    y="0" width="1" height="1"></foreignObject>
                                <g i:extraneous="self">
                                    <path
                                        d="M76.5,55.4L62.8,73c-0.1,0.2-0.3,0.3-0.5,0.4L51.6,79c-0.2,0.1-0.4,0.2-0.7,0.2c-0.3,0-0.6-0.1-0.9-0.3    c-0.4-0.3-0.7-0.9-0.5-1.5l2.7-11.8c0-0.2,0.1-0.4,0.3-0.6l10.7-13.9c-0.1,0-0.2,0-0.3,0H22.7c-12.8,0-20.2,7.3-20.2,20.3v17.3    h80.3V71.4C82.8,64.2,80.6,58.8,76.5,55.4z">
                                    </path>
                                    <path
                                        d="M42.8,47c9.9,0,17.9-8,17.9-17.9c0-9.9-8-17.9-17.9-17.9c-9.9,0-17.9,8-17.9,17.9C24.9,39,32.9,47,42.8,47">
                                    </path>
                                    <g>
                                        <polygon points="97.5,25.8 96,27.7 92.1,24.7 88,21.5 89.4,19.6    "></polygon>
                                    </g>
                                    <g>
                                        <path
                                            d="M87,22.7L53.7,65.8l-2.7,11.8L61.8,72l33.3-43.1L87,22.7z M57.9,68.1l-1.9-1.4l30.5-39.5l1.9,1.4L57.9,68.1z">
                                        </path>
                                    </g>
                                </g>
                            </switch>
                        </svg>
                        SIGN
                    </div>
                    <div id="location">
                        location: <span>RUSSIA</span>

                    </div>



                </div>
                <div onclick="document.location.href = 'main.php'" id="logo"><a href="main.php"><img
                            src="img/t-shorts-logo.png" alt="Логотип"></a></div>
                <div class="main_flex__nowrap flex__align-items_center">
                    <div id="currency">
                        Currency: <span>US DOLLAR</span>
                    </div>
                    <div id="cart" class="btn anime main_flex__nowrap flex__align-items_center flex__jcontent_between">
                        <svg height='300px' width='300px' fill="#000000" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 491.5 491.5" style="enable-background:new 0 0 491.5 491.5;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M69.1,78.8c-4.2,0-7.7,3.4-7.7,7.7c0,4.2,3.4,7.7,7.7,7.7h50.4l13.3,21.5l38,217.9l7.6-1.3l-7.6,1.3    c0.7,3.8,4,6.4,7.7,6.4h220.4c4.2,0,7.7-3.4,7.7-7.7c0-4.2-3.4-7.7-7.7-7.7H184.8l-37-212.5c-0.1-1.1-0.5-2.2-1.1-3.2l0,0    l-16-25.8c-1.3-2.5-3.9-4.2-6.9-4.2L69.1,78.8L69.1,78.8z">
                                    </path>
                                    <path
                                        d="M151,133.4h257.1c0.5,0,1.2,0,2.1,0.1c5.2,0.5,10.1,2.9,13.7,6.4c3.8,3.7,6.2,8.7,6.2,14.3    c0,0.4,0,1.1-0.1,1.9l-11.4,117.2c-0.6,5.8-3,11.1-6.9,14.9c-3.9,3.9-9,6.2-15,6.2h-232V279h232c1.6,0,3.1-0.7,4.1-1.7    c1.4-1.4,2.3-3.3,2.5-5.5l11.4-117.2c0,0,0-0.1,0-0.4c0-1.2-0.6-2.4-1.6-3.4c-1.1-1.1-2.7-1.9-4.4-2c-0.1,0-0.3,0-0.7,0H151    L151,133.4L151,133.4z">
                                    </path>
                                    <polygon points="219.1,141.1 219.1,286.7 203.7,286.7 203.7,141.1   "></polygon>
                                    <polygon points="285.6,141.1 285.6,286.7 270.2,286.7 270.2,141.1   "></polygon>
                                    <polygon points="352.1,141.1 352.1,286.7 336.7,286.7 336.7,141.1   "></polygon>
                                    <polygon points="160.1,182.2 419.2,182.2 419.2,197.6 160.1,197.6   "></polygon>
                                    <polygon points="160.1,230.2 419.2,230.2 419.2,245.6 160.1,245.6   "></polygon>
                                    <path
                                        d="M210.2,351.8c8.4,0,16,3.4,21.5,8.9c5.5,5.5,8.9,13.1,8.9,21.5c0,8.4-3.4,16-8.9,21.5    c-5.5,5.5-13.1,8.9-21.5,8.9c-8.4,0-16-3.4-21.5-8.9c-5.5-5.5-8.9-13.1-8.9-21.5c0-8.4,3.4-16,8.9-21.5    C194.2,355.2,201.8,351.8,210.2,351.8z M220.8,371.6c-2.7-2.7-6.5-4.4-10.7-4.4c-4.2,0-7.9,1.7-10.7,4.4    c-2.7,2.7-4.4,6.5-4.4,10.7s1.7,7.9,4.4,10.7c2.7,2.7,6.5,4.4,10.7,4.4c4.2,0,7.9-1.7,10.7-4.4c2.7-2.7,4.4-6.5,4.4-10.7    S223.6,374.3,220.8,371.6L220.8,371.6z">
                                    </path>
                                    <path
                                        d="M346.7,351.8c8.4,0,16,3.4,21.5,8.9c5.5,5.5,8.9,13.1,8.9,21.5c0,8.4-3.4,16-8.9,21.5    c-5.5,5.5-13.1,8.9-21.5,8.9c-8.4,0-16-3.4-21.5-8.9c-5.5-5.5-8.9-13.1-8.9-21.5c0-8.4,3.4-16,8.9-21.5    C330.7,355.2,338.3,351.8,346.7,351.8z M357.4,371.6c-2.7-2.7-6.5-4.4-10.7-4.4c-4.2,0-7.9,1.7-10.7,4.4s-4.4,6.5-4.4,10.7    s1.7,7.9,4.4,10.7c2.7,2.7,6.5,4.4,10.7,4.4s7.9-1.7,10.7-4.4c2.7-2.7,4.4-6.5,4.4-10.7S360.1,374.3,357.4,371.6z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        CART
                    </div>
                </div>
            </div>
            <div class="form_block">
            <form class="column registration" action="inc/singin.php" method="post">
            
            <input placeholder="login" alt="login"  onkeyup="check_login()" class="register_input" id="register_login" name="login" type="text">
            <input placeholder="password" alt="pass"  onkeyup="check_password()" class="register_input" id="register_password" name="password" type="password">
            <button type="submit"  class="register_input" id="register_submit">Submit</button>
            <p class="ling_reg"> У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>! </p>
            <?php 
                if($_SESSION['message']){
                    echo "<p class='msg ".$_SESSION['color']."'>".$_SESSION['message']."</p>";
                }
                unset($_SESSION['message']);
            ?>
            </form>

            </div>
</body>
</html>