<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size('header') > 0) {
    echo '<div class="col-md-12">' . $messageStack->output('header') . '</div>';
  }
?>

<div class="modular-header" style="margin-left:100px; margin-right:100px;"> <!-- revisar-->
  <div id="storeLogo" class="col-sm-2">
  <?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image(DIR_WS_IMAGES . 'store_logo.png', STORE_NAME) . '</a>'; ?>
  <!--<a href="http://www.template.me.uk/2334bs3/index.php"><img src="images/store_logo.png" alt="osCommerce" title="osCommerce" class="img-responsive" height="50" width="200"></a></div>-->
  </div>

<div class="col-sm-7" >

		<!--script src="js/jquery-1.9.1.min.js"></script-->
    <script src="slider/js/jquery.excoloSlider.js"></script>
    <link href="slider/css/jquery.excoloSlider.css" rel="stylesheet" />
    
   
   <!--script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
    <script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script-->

    <script>
        // Settings for Adaptive.js
        var ADAPT_CONFIG = {
            path: 'css/',
            dynamic: true,
            range: [
                '0px    to 760px  = mobile.min.css',
                '760px  to 980px  = 720.min.css',
                '980px            = 960.min.css'
            ]
        };

    </script>
    <script src="js/adapt.min.js"></script>
    <script type="text/javascript">
        SyntaxHighlighter.config.tagName = "code";
    </script>


    <script>
        $(function () {
            $("#sliderA").excoloSlider();
			$("#sliderB").excoloSlider();
         
        });
    </script>
		
		
		
			<div id="sliderA">
			
				<img  src= "slider/images/image1.jpg" />
				<img  src="slider/images/image2.jpg" />
				<img  src="slider/images/image3.jpg" />
				<img  src="slider/images/image4.jpg" />
				<img  src="slider/images/image5.jpg" />
				<img  src="slider/images/image6.jpg" />
				<img  src="slider/images/image7.jpg" />
				<img  src="slider/images/image8.jpg" />
				<img  src="slider/images/image9.jpg" />
				<img  src="slider/images/image10.jpg" />
				<img  src="slider/images/image11.jpg" />
				<img  src="slider/images/image12.jpg" />
				<img  src="slider/images/image13.jpg" />
				<img src="slider/images/image14.jpg" />
				<img src="slider/images/image15.jpg" />
				<img src="slider/images/image16.jpg" />
				<img src="slider/images/image17.jpg" />
				<img src="slider/images/image18.jpg" />
			
		</div>


	
</div>
<div class="col-sm-2">

</div>


<div class="col-sm-12" style= "height:50px;"> 

  <ol class="searchbox-margin col-sm-6" style="margin-left:-15px; margin-top:10px;">
  
  <a <?php echo 'href="' . tep_href_link(FILENAME_DEFAULT) . '"'; ?> itemprop="url"><span itemprop="title"><?php echo  $breadcrumb->trail('&raquo;'); ?></span></a>
</ol>
    <div class="searchbox-margin"> 
		<form  name="quick_find" <?php echo'action="'.tep_href_link(FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false).'"';?> method="get" class="form-horizontal">  
	<div class="input-group">
	<input name="keywords" required="" placeholder="Search" class="form-control" type="text"><span class="input-group-btn">
	<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-search"></i></button></span>  
	 </div>
  </form>
</div>
</div>
</div>



<div class="clearfix" style="margin-left:100px; margin-right:100px;"></div>

<div class="body-sans-header clearfix" style="margin-left:100px; margin-right:100px;">

<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<div class="clearfix"></div>
<div class="col-xs-12">
  <div class="alert alert-danger">
    <a href="#" class="close glyphicon glyphicon-remove" data-dismiss="alert"></a>
    <?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?>
  </div>
</div>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<div class="clearfix"></div>
<div class="col-xs-12">
  <div class="alert alert-info">
    <a href="#" class="close glyphicon glyphicon-remove" data-dismiss="alert"></a>
    <?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?>
  </div>
</div>
<?php
  }
?>
