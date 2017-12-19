<?php 
require 'partes/config.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $tituloPagina .' - '. $cliente;?></title>

	<meta name="keywords" content="<?php print($keywords);?>">
	<meta name="description" content="<?php print($descricao);?>">
	<meta name="author" content="Oxigenium.co">
	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Social -->
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="<?php print($url);?>">
	<meta property="og:title" content="Flexgrid Framework">
	<meta property="og:site_name" content="Flexgrid Framework">
	<meta property="og:description" content="Framework para grids em flexbox">
	<meta property="og:image" content="http://danvieira.me/tool/responsive/face.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta property="og:type" content="website">

	<!-- Favicon -->
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseURL ?>apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseURL ?>apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $baseURL ?>apple-touch-icon-57-precomposed.png" />
	<script src="public/js/jquery-3.2.1.min.js"></script>
	<script src="public/js/materialize.min.js"></script>
	<link rel="stylesheet" href="<?php echo $baseURL ?>/public/css/style.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>

<body id="<?php echo $bodyID ?>" > 


	<div class="main">

        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'partes/header.php' ?>
