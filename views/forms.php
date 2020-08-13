<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/Protection.css">
    <script src="Jquery/jquery-3.4.1.js"></script>
    <title>Document</title>
</head>
<body>
    <form id="form-input" action="" method="POST">
        <label for="email" id="email-input"><span>EMAIL*</span></label><br>
        <input type="email" placeholder="Write your email" name="email" id="email"><br>
        <input type="submit" id="send-mess" class="btn" value="SUBMIT">
        <div class="text-button-sub"></div>
    </form>
    <?php
            if (!empty($_REQUEST['email'])){
                session_start();
                $_SESSION['email'] = $_REQUEST['email'];
            }
    ?>


    <?php
        if (!empty($_SESSION['email']))
            $email = $_SESSION['email'];
        else
            $email = '';
    ?>

    <form id="form-input-new" action="" method="GET">
        <label for="name" id="name-input"><span>NAME*</span></label><br>
        <input type="text" placeholder="Write your name" name="name" id="name"><br>
        <label for="lastname" id="lastname-input"><span>LASTNAME*</span></label><br>
        <input type="text" placeholder="Write your lastname" name="lastname" id="lastname"><br>
        <label for="password" id="password-input"><span>PASSWORD*</span></label><br>
        <input type="password" placeholder="Write your password" id="password"><br>
        <label for="email" id="email-input"><span>EMAIL*</span></label><br>
        <input type="email" name="email" value="<?php echo $email ?>" id="email"><br>
         <div id="send-mess-new" class="btn">
        <div class="text-button-sub-new">SUBMIT</div>
    </div>
    </form>

</body>
</html>