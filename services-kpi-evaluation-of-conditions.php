<?php include('includes/head_services.php'); ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<?php include_once("analyticstracking.php") ?>

        <?php include('includes/nav_services.php'); ?>

        <div class="container">

			<div class="main_content">
			<!-- Example row of columns -->
            <div class="row animated fadeInLeft">
                <?php include('includes/sidebar_nav_services.php'); ?>
				<div class="span8 margin_main_container">
					<div class="title_bkgd">
						<h1>KPI – EVALUATION OF CONDITIONS</h1>
					</div>
					<img src="img/services/industrialcxmain.png" class="main_picture" alt="Head and Power Plant (UBC and NBC)">
					<p>
						The condition of an asset allows building managers to have evidence-based information for investment decisions they may need to make in the coming years.
					</p>

					<p>
						Conditions can be evaluated in three ways, namely: 
						<ul>
							<li>The theoretical remaining life. This value is determined by subtracting the theoretical total life (in years) from the lifespan to date or since its installation. This data is indicative and does not include, among other things, the initial quality of the system or the operating conditions it is subjected to, which can have a significant impact on how the assets will age.</li>
							<li>Technical audit of the condition of the equipment. This audit, performed by experts in each field, provides an interesting approximation of the remaining life of each asset, however it is only valid in the short term (about 3 years). This process is relatively long and expensive. It should be repeated every three years, however organizations easily extend it beyond five years. This makes decisions based on these audits increasingly risky after the third year has passed. </li>
							<li>Facility (or system) Condition Index (FCI or SCI). This index incorporates information from maintenance to determine the condition of the asset. It corresponds to several levels with different graduations scales.</li>
						</ul>
					</p>
					<p>
						The one that is used by many Canadian and American organizations, as well as by C.E.S. Group, is the following:
						<ul>
							<li>0% to 0.5%: Excellent – New condition - meets current and future needs;</li>
							<li>0.5% to 15%: Good - meets the current needs;</li>
							<li>15% to 30%: Fair - Significant deficiencies with systems or major equipment approaching the ends of their lives. Meets the minimum requirements.</li>
							<li>30% to 60%: Degraded. No longer meets the requirements. Immediate attention should be given to systems that are reaching the ends of their lives. Provision of replacement parts and components becomes difficult or impossible.</li>
							<li>More than 60%: Risky. No longer meets the requirements. Immediate attention is necessary because the main systems are nearing the ends of their useful lives and are at a high risk of failure. Provision of replacement parts and components becomes difficult or impossible.</li>
						</ul>
						Some use smaller scale divisions between 0% and 15% covering of 0.5% to 5%.
The role the assets in the mission of the organization is a factor to consider when defining the scale of the divisions.
In effect, an operating room or a clean room will have a qualitative distribution which may differ and require this scale to have divisions between 0.5% and 5%.
					</p>
					<p>
						The approach taken by C.E.S. Group for evaluating the condition of assets can be summarized as follows:<br>
						At the beginning of application of the solution:
						<ul>
							<li>Collection of information on the theoretical useful life of the equipment, systems and building, as well as a Level 1 audit (visual inspection) to confirm or deny the theoretical values.</li>
							<li>Use of the calculated FCI and SCI values based on information gathered from the maintenance team. This information is used for a preliminary calculation of required maintenance actions and then integrated into the formula for FCI or SCI in paragraph 3.</li>
						</ul>
						In the operational phase of the solution.
						<ul>
							<li>Integrated calculations of FCI and SCI based on information obtained from the maintenance database DIMO Maint.</li>
						</ul>
						

					</p>
				</div>
            </div>	
			</div>
			

         <?php include('includes/footer.php'); ?>

</div> <!-- /container -->

<?php include('includes/js.php'); ?>
    </body>
</html>
