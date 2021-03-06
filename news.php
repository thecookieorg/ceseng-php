﻿<?php include('includes/head_news.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_news.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_news.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h1>News</h1>
					</div>
					<!--<img src="img/services/1.png" class="main_picture" />-->
					<?php include('news-touchstone-properties-boma.php'); ?>
					<?php include('news-city-of-toronto-mv.php'); ?>
					<?php include('news-ces-vancouver-new-office.php'); ?>
					<?php include('news-target-canada-commissioning.php'); ?>
					<?php include('news-ecoopera-systems-product-releases.php'); ?>
                </div>
            </div>	
			</div>
			

            <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
