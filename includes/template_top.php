<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  $oscTemplate->buildBlocks();

  if (!$oscTemplate->hasBlocks('boxes_column_left')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }

  if (!$oscTemplate->hasBlocks('boxes_column_right')) {
    $oscTemplate->setGridContentWidth($oscTemplate->getGridContentWidth() + $oscTemplate->getGridColumnWidth());
  }
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta charset="<?php echo CHARSET; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo tep_output_string_protected($oscTemplate->getTitle()); ?></title>
<base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">

<link href="ext/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="custom.css" rel="stylesheet">
<link href="user.css" rel="stylesheet">

<!--[if lt IE 9]>
   <script src="ext/js/html5shiv.js"></script>
   <script src="ext/js/respond.min.js"></script>
   <script src="ext/js/excanvas.min.js"></script>
<![endif]-->
 
<script src="ext/jquery/jquery-1.11.1.min.js"></script>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<?php echo $oscTemplate->getBlocks('header_tags'); ?>

</head>
<body>

  <?php echo $oscTemplate->getContent('navigation'); ?>
  <nav class="navbar navbar-inverse navbar-no-corners navbar-no-margin" role="navigation">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a class="store-brand" <?php echo 'href="' . tep_href_link(FILENAME_DEFAULT) . '"'; ?>><i class="glyphicon glyphicon-home"></i><span class="hidden-sm"> &nbsp&nbsp<?php echo   HEADER_TITLE_HOME?></span></a></li> <!-- FALTA SABER EL NOMBRE DE HOME EN LA TABLA-->
          
		  
		 </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-flag"></i><span class="hidden-sm"> <?php echo HEADER_LANG?></span> <span class="caret"></span></a>
              <ul class="dropdown-menu">
			   
                <li class="text-center text-muted bg-primary"><abbr title="Selected Language"><?PHP echo HEADER_L; ?></abbr> <?php  echo $language ;?>
                <li class="divider"></li>
				<li><a href="http://localhost/proide/index.php?language=ca"><?PHP echo LANGUAGE_1;?></a></li>
				<li><a href="http://localhost/proide/index.php?language=es"><?PHP echo LANGUAGE_2;?></a></li>
				<li><a href="http://localhost/proide/index.php?language=en"><?PHP echo LANGUAGE_3;?></a></li>
				<li><a href="http://localhost/proide/index.php?language=fr"><?PHP echo LANGUAGE_4;?></a></li>
			</ul>
		</li>
          
          <li class="nav navbar-text"><i class="glyphicon glyphicon-shopping-cart"></i><span class="items">&nbsp&nbsp<?php echo $cart->count_contents() ?>&nbsp&nbsp <?php echo HEADER_TITLE_NAME_PRODUCTS?> </span> </li>        </ul>
      </div>
    </div>
  </div>
</nav>
  <div id="bodyWrapper" class="<?php echo BOOTSTRAP_CONTAINER; ?>">
    <div class="row">

      <?php require(DIR_WS_INCLUDES . 'header.php'); ?>

      <div id="bodyContent" class="col-md-<?php echo $oscTemplate->getGridContentWidth(); ?> <?php echo ($oscTemplate->hasBlocks('boxes_column_left') ? 'col-md-push-' . $oscTemplate->getGridColumnWidth() : ''); ?>">
