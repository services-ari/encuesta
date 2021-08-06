<?php

include __DIR__."/configs.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=fh_title()?></title>

	<meta name="title" content="<?=fh_title()?>">
	<meta name="description" content="<?=site_description?>">
	<meta name="keywords" content="<?=site_keywords?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=site_url?>">
	<meta property="og:title" content="<?=fh_title()?>">
	<meta property="og:description" content="<?=site_description?>">
	<meta property="og:image" content="<?=site_url?>">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?=site_url?>">
	<meta property="twitter:title" content="<?=fh_title()?>">
	<meta property="twitter:description" content="<?=site_description?>">
	<meta property="twitter:image" content="<?=site_url?>">

	<!-- Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&subset=latin,latin">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700">

	<!-- Font Awseome -->
	<link rel="stylesheet" href="<?=path?>/css/all.min.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=path?>/css/bootstrap.min.css">

	<!-- sceditor -->
	<link rel="stylesheet" href="<?=path?>/js/minified/themes/default.min.css" />

	<!-- Datepicker -->
	<link rel="stylesheet" href="<?=path?>/css/datepicker.min.css">

	<!-- Icon Picker -->
	<link rel="stylesheet" href="<?=path?>/css/fontawesome-iconpicker.min.css">

	<!-- Confirmacion jquery -->
	<link rel="stylesheet" href="<?=path?>/css/jquery-confirm.min.css">

	<!-- Color Picker | Paleta de colores -->
	<link rel="stylesheet" href="<?=path?>/css/spectrum.css" />

	<!-- Selectore -->
	<link rel="stylesheet" href="<?=path?>/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?=path?>/css/select2.min.css" />

	<!-- Iconos Flag -->
	<link rel="stylesheet" href="<?=path?>/css/flag-icon.min.css">

	<link rel="stylesheet" href="<?=path?>/css/style.css">

	<?php if($lang['rtl']): ?>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=El+Messiri">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Harmattan">
	<link rel="stylesheet" href="<?=path?>/css/rtl.css">
	<?php endif; ?>

</head>
<body<?=(page?' class="pt-'.page.'page'.(!us_level || (in_array(page, ['survey']) && $request == 'su')?' pt-nouser':'').'"':'')?>>
