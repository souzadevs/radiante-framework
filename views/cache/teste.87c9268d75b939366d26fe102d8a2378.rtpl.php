<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .head {
            display: flex;
            width: 100%;
            height: 70px;
            justify-content: space-evenly;
            align-items: center;

            /* background-color: rgb(44, 44, 44); */
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 10%;
            height: 100%;
            /* background-color: rgb(70, 70, 70); */
        }

        .login {
            display: flexbox;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 10%;
            height: 100%;
            /* background-color: rgb(70, 70, 70); */
        }
    </style>
</head>

<body>
    <div class="head" id="h">
        <div class="logo">
            <span class="spn">LOGO</span>
            <span>LOGO</span>
            <span>LOGO</span>
            <p>Um Logo</p>
        </div>
        <div class="login">
            LOGIN
        </div>
    </div>
</body>
<script src="/resources/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.head > .logo').mouseover(function(){
            //$(this).fadeOut(1000);
        });

        $('.spn + span').css('background-color', 'blue');
    });
</script>

</html>