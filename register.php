<?php 

$title = 'نیکوثبت';

include_once('header.php');

$data = new DataBase();

$chek = true;

$_SESSION['register'] = true;

$_SESSION['titr'] = 'لطفا کد پیامک شده به شماره همراه  یا ایمیل خود را برای تایید حساب کاربری وارد کنید';
if (!empty($_SESSION['rand'])) {
    header('location:active.php');
}

if (isset($_POST['phone']) and isset($_POST['email'])) {

    if (!empty($data->search('tbl_user', 'phone', $_POST['phone']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>کاربری قبلا با این شماره همراه ثبت نام کرده است</strong>
      </div>';
        $chek = false;
    }
    
    if (!empty($data->search('tbl_user', 'email', $_POST['email']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>کاربری قبلا با این ایمیل ثبت نام کرده است</strong>
      </div>';
        $chek = false;
    }

}


require_once('./src/validation.php');

?>


<div class="form">
    <div class="container">
        <form class="my-5 needs-validation" action="register.php" method="POST" novalidate>

            <div class="row align-items-stretch">
                <div class="col-12 col-md-6">

                    <div class="col-12 ">
                        <label for="inputfname" class="form-label">نام: <span class="t-red">*</span></label>
                        <input type="text" name="fname" class="form-control" id="validationCustom03" placeholder="لطفا نام خود را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نام اجباریست
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="inputfname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>
                        <input type="text" name="lname" id="validationCustom03" class="form-control"  placeholder="لطفا نام خانوادگی خود را وارد کنید" required>
                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی اجباریست
                        </div>
                    </div>

                    <div class=" col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>
                        <input type="text" name="phone" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>
                        <div class="invalid-feedback">
                            وارد کردن شماره همراه اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 ">
                        <label for="inputfname"  class="form-label">ایمیل:</label>
                        <input type="text" name="email" class="form-control" placeholder="لطفا ایمیل خود را وارد کنید">
                    </div>

                    <div class="col-12 my-3">
                        <label for="inputfname" class="form-label">شماره تلفن ثابت(همراه با کد شهر):</label>
                        <input type="text" name="cellPhone" class="form-control" placeholder="لطفا شماره تلفن ثابت خود را وارد کنید" maxlength="11">
                    </div>
                </div>

                <div class="d-none d-md-block col-md-6 border my-2 shadow-sm">
                    <h5 class="sahel fs-5 my-3 ">با ثبت نام در نیکو ثبت از خدمات زیر برخوردار میشوید:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6 class="fs-6 my-1">عضویت رایگان در خبرنامه</h6>
                        </li>
                        <li class="list-group-item ">استعلام رایگان برند و نام شرکت</li>
                        <li class="list-group-item">ثبت انواع شرکت</li>
                        <li class="list-group-item">تغییرات وتمدید شرکت</li>
                        <li class="list-group-item">ثبت علائم تجاری، لوگو و برند</li>
                        <li class="list-group-item">اخذکارت بازرگانی</li>
                        <li class="list-group-item">ثبت اختراع</li>
                        <li class="list-group-item">و ده‌ها خدمات ثبتی دیگر...</li>
                    </ul>


                </div>

            </div>
            <div class="row g-3 my-md-2">
                <div class="col-12 col-sm-6">
                    <label for="inputfname" class="form-label">رمز عبور:<span class="t-red">*</span></label>
                    <input type="password" name="password" id="validationCustom03" class="form-control" placeholder="لطفا رمز عبور خود را وارد کنید" aria-label="Last name" required>
                    <div class="invalid-feedback">
                        وارد کردن رمز عبور اجباریست
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="inputfname" class="form-label">تکرار رمز عبور:<span class="t-red">*</span></label>
                    <input type="password" name="repeatPassword" id="validationCustom03" class="form-control" placeholder="تکرار رمز عبور را وارد کنید" aria-label="Last name" required>
                    <div class="invalid-feedback">
                        وارد کردن تکرار رمز عبور اجباریست
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-3 my-5">
                <button type="submit" class="btn w-100 btn-primary">ثبت اطلاعات</button>
            </div>

        </form>
    </div>
</div>


<?php include_once('footer.php'); ?>