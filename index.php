<?php include_once('./header.php'); 

if (isset($_COOKIE['newUser'])) {
  echo '<div class="alert alert-success container my-bg" role="alert">
  حساب کاربری شما با موفقیت فعال شد
    </div>';
}
?>

<div class="my-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img class="img-fluid" src="./img/header.png" alt="" />
      </div>
      <div class="col-md-6">
        <span class="fs-4 ms-2 sahel justifuy">نیکوثبت مجموعه ای ثبتی جهت انجام کلیه امور ثبتی کسب وکار
          شما</span>
        <p class="m-5 fs-5 justifuy">
          مجموعه نیکوثبت کسب وکار شما را از بسیاری جهات لمس میکند با خیال
          راحت امور ثبتیتان را به ما بسپارید و به مدیریت کسب وکار خود
          بپردارید.
        </p>
        <div class="d-block d-md-flex justify-content-between d-lg-inline-block mb-md-1">
          <a class="d-block d-md-inline-block  btn btn-outline-primary " href="#">درخواست مشاوره</a>
          <a class="d-block d-md-inline-block btn btn-outline-primary my-1 my-md-0" href="#">فهرست خدمات نیکو ثبت</a>
        </div>
        <a class="d-block d-md-block  d-lg-inline-block btn btn-primary mt-lg-0" href="#">
          تمدید شرکت سهامی خاص</a>

      </div>
    </div>
  </div>
</div>
<section class="mb-4">
  <div class="container">
    <div class="titr text-center">
      <h1 class="
              sahel
              my-green
              d-inline-flex
              fs-1
              fw-bold
              border-bottom border-4 border-primary
              p-2
              lh-lg
            ">
        معرفی خدمات نیکوثبت
      </h1>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">ثبت انواع شرکت:</h5>
              <i class="fas fa-check fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              با چند کلیک ساده و به صورت آنلانن شرکت خود را به ثبت برسانید
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1"> فرم ثبت شرکت</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">تغییرات وتمدید شرکت:</h5>
              <i class="fas fa-tasks fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              یک شرکت پس از ثبت، می تواند تغییراتی را در مواردی از اساسنامه
              و یا هر آنچه مربوط به شرکت است ایجاد کند
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">فرم تغیرات و تمدید شرکت</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                ثبت علائم تجاری، لوگو و برند:
              </h5>
              <i class="fas fa-drafting-compass fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              نام و نشان تجاری ، نام یا نمادی متمایز برای شناسایی کالاها یا
              خدمات از یک فروشنده
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">فرم ثبت علائم تجاری و لوگو</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">اخذکارت بازرگانی:</h5>
              <i class="fas fa-id-card fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              کارت بازرگانی مجوزی است که به اشخاص حقیقی و حقوقی داده
              می‌شود...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">فرم اخذ کارت بازرکانی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">ثبت اختراع:</h5>
              <i class="fas fa-fill-drip fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              اختراع محصول جدیدی است که در نتیجه‌ی فکر فرد یا افراد مخترع
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">فرم درخواسن ثبت اختراع</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">اخذ گرید و رتبه بندی:</h5>
              <i class="fas fa-chart-line fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text fs-6 justify">
              فرآیند رتبه بندی متشکل از پیگیری جهت تکمیل شرایط و مدارک و
              مراوده و پیگیری از سازمان مدیریت...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">درخواست اخذ گرید و رتبه بندی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                جواز تاسیس و اکتشافات معدن:
              </h5>
              <i class="fas fa-snowplow fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              جواز تاسیس به مجوزی که افراد جهت انجام یک فعالیت
              تولیدی-اقتصادی اخذ می کنند ...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 m-2 mb-1">درخواست جواز تاسیس و اکتشافات معدن</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                اخذ کداقتصادی و پلمپ دفاتر:
              </h5>
              <i class="fas fa-unlock fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              هر شرکت نیاز به یک کد اقتصادی دارد. این کد برای مشخص شدن
              عملکرد یک شرکت در قراردادها ...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">
                اخذ کد اقتصادی و پلمپ دفاتر تجاری</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mt-3">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-9 card-title sahel">
                خدمات حسابداری و دفاتر مالیاتی:
              </h5>
              <i class="fas fa-calculator fa-2x icon col-2 offset-1"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text  justify">
              یک موسسه خدمات مالی، نیاز به مشاوره مالی مناسب دارد تا در مورد
              مسائل مالی به مشتریان مشاوره دهد...
            </p>
            <div class="d-flex flex-row-reverse mt-3">
              <a href="#" class="card-link position-absolute bottom-0 mb-1">فرم خدمات حسابداری و دفاتر مالیاتی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-2 mb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="d-block d-md-none col-12">
        <img class="img-fluid" src="./img/img-section2.jpg" alt="" />
      </div>

      <div class="col-12 col-md-6">
        <h1 class="
                sahel
                my-green
                d-inline-flex
                fs-3
                fw-bold
                border-bottom border-4 border-primary
                p-2
              ">
          مشاوره عالی ومفید توسط بهترین مجموعه ثبتی
        </h1>
        <p class="mt-2 fs-5 justifuy">
          نیکو ثبت مجموعه ثبتی با کارشناسانی مجرب و باتجربه هست که فعالیت
          خود را در مرکز رشد با شرکت های نوپا و دانش بنیان آغاز کرد وهم
          اکنون فعالیت هایش را با انجام امور ثبتی شرکتهای مختلف در تمام
          شهرهای ایران بصورت حضوری و دورکاری گسترده نموده است و درخدمت شما
          عزیزان وکسب و کارتان می باشد، تا شما با خیال راحت به اداره امور و
          مدیریت کسب وکار خود بپردازید
        </p>
        <div class="text-end">
          <img src="./img/emza.jpg" alt="" />
        </div>
      </div>

      <div class="d-none d-md-block col-md-6">
        <img class="img-fluid" src="./img/img-section2.jpg" alt="" />
      </div>
    </div>
  </div>
</section>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div>
          <img class="img-fluid" src="./img/section3.jpg" alt=" " />
        </div>
      </div>
      <div class="col-12 col-lg-6 flex-column">
        <h1 class="sahel my-green d-inline-flex fs-2 fw-bold p-2">
          چرا نیکوثبت:
        </h1>
        <br />
        <h1 class="
                sahel
                my-t-color
                fs-4
                d-inline
                fw-bold
                border-bottom border-4 border-primary
                p-2
                m-3
                lh-lg
              ">
          انجام امور ثبتی در سریع ترین زمان ممکن:
        </h1>
        <p class="mt-4 fs-5 justifuy">
          این پیچیدگی ها را چطور به زمان ساده بیان کنند و مشغله به روند کاری
          ما اضافه نکنند بسیار مهم هست شما دوست عزیز با پیوستن به مجموعه
          ثبتی نیکوثبت امورثبتی خود را به کارشناسان ما بسپارید وخود به
          مدیریت کسب و کار خود بپردازید، در حالی که مرتب از کلیه روند ثبتی
          خود مطلع هستید
        </p>

        <h1 class="
                sahel
                my-t-color
                fs-4
                d-inline
                fw-bold
                border-bottom border-4 border-primary
                p-2
                m-3
                lh-lg
              ">
          همراهی کارشناس در کلیه مراحل:
        </h1>
        <p class="mt-4 fs-5 justifuy">
          در مجموعه نیکوثبت پس از بستن قرار داد کارشناس ویژه به شما تعلق می
          گیرد و شما را همراهی می کند، تا امور ثبتی شما به بهترین شکل به
          پایان برسد
        </p>

        <h1 class="sahel fs-1 d-inline fw-bold p-2 m-3">و....</h1>
      </div>
    </div>
  </div>
</section>

<section class="mt-5 my-bg-card">
  <div class="container">
    <h1 class="
            sahel
            my-t-color
            d-inline-flex
            fs-2
            fw-bold
            border-bottom border-5 border-primary
            p-2
            mb-5
            mt-5
          ">
      معرفی نیکوثبتی ها:
    </h1>
    <div class="row justify-content-between">
      <div class="col-12 col-lg-3 col-md-6">
        <div class="card shadow">
          <img src="./img/profile/member.jpg" class="card-profile-img rounded-circle m-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              <br />.<br /><br />.<br />توضیحات شرکت
            </h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">نام شرکت : زرین سارگل استهبان</li>
            <li class="list-group-item">مدیرعامل : امین منوری</li>
            <li class="list-group-item">شماره تماس:آزمایشی</li>
            <li class="list-group-item">آدرس:آزمایشی</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">وبسایت شرکت:آزمایشی </a>
          </div>
        </div>
      </div>
      <div class="col-12 mt-3 mt-md-0 col-lg-3 col-md-6">
        <div class="card shadow">
          <img src="./img/profile/member.jpg" class="card-profile-img rounded-circle m-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              <br />.<br /><br />.<br />توضیحات شرکت
            </h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">نام شرکت : زرین سارگل استهبان</li>
            <li class="list-group-item">مدیرعامل : امین منوری</li>
            <li class="list-group-item">شماره تماس:آزمایشی</li>
            <li class="list-group-item">آدرس:آزمایشی</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">وبسایت شرکت:آزمایشی </a>
          </div>
        </div>
      </div>

      <div class="d-none d-lg-block col-lg-3">
        <div class="card shadow">
          <img src="./img/profile/member.jpg" class="card-profile-img rounded-circle m-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              <br />.<br /><br />.<br />توضیحات شرکت
            </h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">نام شرکت : زرین سارگل استهبان</li>
            <li class="list-group-item">مدیرعامل : امین منوری</li>
            <li class="list-group-item">شماره تماس:آزمایشی</li>
            <li class="list-group-item">آدرس:آزمایشی</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">وبسایت شرکت:آزمایشی </a>
          </div>
        </div>
      </div>

      <div class="d-none d-lg-block col-lg-3">
        <div class="card shadow">
          <img src="./img/profile/member.jpg" class="card-profile-img rounded-circle m-2" alt="..." />
          <div class="card-body">
            <h5 class="card-title">
              <br />.<br /><br />.<br />توضیحات شرکت
            </h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">نام شرکت : زرین سارگل استهبان</li>
            <li class="list-group-item">مدیرعامل : امین منوری</li>
            <li class="list-group-item">شماره تماس:آزمایشی</li>
            <li class="list-group-item">آدرس:آزمایشی</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">وبسایت شرکت:آزمایشی </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="m-5">
  <div class="container text-center my-bg-blue">
    <h1 class="sahel fs-2 fw-bold my-t-color p-2 mt-5">
      عضویت در خبرنامه نیکوثبت
    </h1>

    <h2 class="sahel fs-5 fw-bold p-2">
      با وارد کردن شماره موبایل خود در کادر زیر به صورت رایگان عضو خبرنامه
      نیکوثبت شوید
    </h2>
    <div class="row d-flex justify-content-center">
      <form class="col-12 col-lg-4 row">
        <div class="input-group mb-4">
          <input type="text" class="form-control" placeholder="شماره تلفن همراه" aria-describedby="button-addon2" />
          <button class="btn btn-primary" type="button" id="button-addon2">
            عضویت
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include_once('./footer.php') ?>