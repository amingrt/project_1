<?php
$website_title = "حذف مدیر";
include "../../config/db_config.php";
include "../partials/login-check.php";
include '../partials/header.php';
?>
    <!--insert styles and Links here.-->

<?php
include '../partials/menu.php';
?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM tbl_admin WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($result == true) {
    $_SESSION['delete'] = "<div'>مدیر حذف شد</div>";
    header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
} else {
    $_SESSION['delete'] = "<div>عملیات حذف مدیر ناموفق بود. مجددا تلاش کنید.</div>";
    header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
}
?>