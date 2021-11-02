<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> UCSB</title>
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<style>
		#slideshowcontainer{
			border: 2px solid black;
			border-radius:10px;
			padding:10px;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div id="innertext">
		<div style="padding: 5px 5px;">
		<h1></h1>
	</div>
		<div id="quicksearchdiv">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
		</div>
		<div style="padding: 50px 50px;">
					<div style="float:left"><img src="images/layout/campus-tower.jpg" style="width:200px;margin:0px 10px" /></div>
	<p>
			The UC Santa Barbara Collection Network Natural History Data Portal serves as a gateway for natural history data resources for the University of California Santa Barbara, <a href="https://www.nrs.ucsb.edu">UCSB Natural Reserve System</a>, and <a href="https://www.ccber.ucsb.edu">UCSB Cheadle Center for Biodiversity and Ecological Restoration</a>. Through a common web interface, we offer tools to locate, access, and work with a variety of natural history data including specimens found in collections and observations from citizen science and research. This portal is more than just a website - it is a suite of data access technologies and a distributed network of collections across UCSB or outside collections that have holdings from UCSB and UCSB NRS locations.
	</p>
		<p>
The contributors to this resource are varied and include the many taxonomists, data managers, and ecologists whose work it is to help us understand our natural world. Included here is information aggregated from many collection and observation projects, not just specimens from the UCSB Natural History Collections. Because of the variety of data sources, we recommend citing the natural history collection for specimens, the specimen catalog number, and who determined the specimen in any publication that references data from this portal. Images are free for reuse, but please cite the institution that provided the image.
	   	</p>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>