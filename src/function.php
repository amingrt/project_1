<?php

class _function{
    
    static function logIn(){

        if (empty($_COOKIE['logIn'])) {
            header('location:logout.php');
        }
        
        if ((empty($_SESSION['phone']) and empty($_SESSION['fname'])) and (empty($_COOKIE['phone']) and empty($_COOKIE['fname']))) {
            header('location:login.php');
        }

    }

    static function restart() {
        session_destroy();
    }
    
    static function validation_img($name, $size, $type, $msg = ''){

        if (empty($name) and strcmp($name, "") == 0) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>لطفا فایل ' . $msg. ' را بارگذاری کنید</strong>
          </div>';
            return false;
        }else if ($size > (300 * 1024)) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>حجم فایل ارسالی '. $name .' باید کمتر از 300kb باشد</strong>
          </div>';
            return false;
        }else if ($type !== 'image/jpeg' and $type !== 'image/png') {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>فرمت تصویر ارسالی '. $name .' باید jpeg/jpg یا png باشد</strong>
          </div>';
            return false;
        }else{
            return true;
        }

    }

}
?>