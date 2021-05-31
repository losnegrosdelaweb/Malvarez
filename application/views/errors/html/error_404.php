<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
.center { width:500px; height:300px; position:absolute; left:50%; top:50%; margin-left:-250px; margin-top:-120px; }
i { font-size:60px; float:left; margin-top:20px; margin-right:10px; color:#555;}
#oops { font-family: 'Yanone Kaffeesatz', arial, helvetica; font-size: 80px; color: #555; margin:0;}
#texto { float:left;}
#error500 { font-family: 'Yanone Kaffeesatz', arial, helvetica; font-size: 40px; color: #D64A36; margin:0; text-transform: uppercase; line-height: 35px; margin-top: -8px;}
#equipo { font-family: 'Yanone Kaffeesatz', arial, helvetica; font-size: 15px; color: #555; margin:0; border-bottom:1px solid #F0F0F0; padding-bottom:40px;}
#equipo a { color:#555; }
#equipo a:hover { color:#D64A36; }
.footer_error { padding-top:25px; text-align:center; }

</style>
</head>
<body>
<div class="center">
<i class="fa fa-hand-o-right"></i>
<div id="texto">
<p id="error500">ERROR 404 - PÁGINA NO ENCONTRADA</p>
<p id="equipo">La página solicitada no fue encontrada. Por favor revise la URL. <a href="/<?=site_url('')?>">Volver al inicio</a></p>
<div class="footer_error">
	<a href="/<?=site_url('')?>"><img src="/<?=base_url('')?>/assets/img/logo.jpg"/></a>
</div>
</div>
</div>
</body>
</html>

