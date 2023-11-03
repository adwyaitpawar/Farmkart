<?php
    session_start();
    $rand_num=rand(111111,999999);
    $_SESSION['CODE'] = $rand_num;
    $layer = imagecreatetruecolor(65,30);
    $captcha_bg=imagecolorallocate($layer,255,160,120);
    imagefill($layer,0,0,$captcha_bg);
    $captcha_text_color=imagecolorallocate($layer,0,0,0);
    imagestring($layer,5,5,5,$rand_num,$captcha_text_color);
    header('Content-Type:image/jpeg');
    imagejpeg($layer);
?>