<?php
$HEVA_CMS = "3.1.5.20130222";
if (ini_get('register_globals') == '1' || strtolower(ini_get('register_globals')) == 'on')
	die('Отключите register_globals в php.ini/.htaccess (угроза безопасности)');
session_start();
if (strpos($_SERVER['REQUEST_URI'], '_small.') > 0 && !file_exists("..".$_SERVER['REQUEST_URI'])){
	include("_small.php");
	die;
}
if(isset($_SESSION['user']))
	$user = $_SESSION['user'];
else{
	if (isset($_COOKIE['user']))
		$_SESSION['user'] = $user = $_COOKIE['user'];
	else{
		$_SESSION['user'] = $user = round(rand(10000000000,99999999999),0);
		setcookie("user", $user, time()+3600*24*30);
	}
}
ini_set('display_errors', 0);
include("_mysql.php");
include("_additional.php");
include("_url.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<? include("_head.php"); ?>
</head>
<body>
	<?php include("_header.php"); ?>
	<?php include("_".$url['target_type'].".php"); ?>
	<?php include("_footer.php"); ?>
    <script src="/src2/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/src2/js/popper.min.js"></script>
    <script src="/src2/js/bootstrap.min.js"></script>
    <script src="/src2/js/jquery.fancybox.min.js"></script>
    <script src="/src2/slick/slick.min.js"></script>
    <script>
        $(function() {
            $("[data-fancybox]").fancybox({
                speed : 300,
                loop : true,
                opacity : 'auto',

            });
        });
        $(function() {
            $('.slick-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
            });
        });
        $(function() {
            $('.slick-slider2').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
            });
        });
        $(document).ready(function () {
            $('.dropdown-menu').parent('.dropdown').children('.nav-link').addClass('dropdown-toggle');
        });
    </script>
</body>
</html>