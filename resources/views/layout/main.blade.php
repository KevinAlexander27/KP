@yield('php')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/css/loginutil.css">
	<!-- <link rel="stylesheet" type="text/css" href="asset/css/login.css"> -->
	@yield('asset')
<!--===============================================================================================-->



@yield('script')

<script>
function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
#upload-button{
	padding:10px;
	color: black;
	background-color: #FFC20F;
	border :1px solid #fff;
	border-radius: 5px;
	cursor:pointer;
	
}
#upload-button:hover{
	background-color: #CE9E00;
}
#custom-text {
  margin-left: 10px;
  font-family: sans-serif;
  color: #aaa;
}
@yield('style')
</style>

</head>
<body>
<!--===============================================================================================-->
<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="asset/js/main.js"></script>
<!--===============================================================================================-->

@yield('isi')

</body>
</html>