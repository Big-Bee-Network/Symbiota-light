<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?>Big-Bee</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?= $CSS_BASE_PATH ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?= $CSS_BASE_PATH ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?= $CLIENT_ROOT ?>";
	</script>
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
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div id="innertext">
		<h1>Extending Anthophila Research Through Image and Trait Digitization</h1>
		<div id="quicksearchdiv" style="margin:10px">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
	</div>
		<div style="float:left"><img src="images/layout/image-types_v3.jpg" style="width:350px;margin:0px 10px" /></div>
	<p>
		The Bee Library is an online repository of bee image, trait, and specimen data. The portal has a worldwide scope and may include other taxa that are not bees but interact with bees (i.e., bee parasites). The contributors to this resource are varied and include the many taxonomists, data managers, and bee ecologists whose work it is to determine bee specimens and help us understand bee evolution and ecology. The Bee Library recommends citing the repository for a bee specimen, the specimen catalog number, and who determined the specimen in any publication that references data from this portal. Images are free for reuse, but please cite the institution that provided the image. See our <a href="https://library.big-bee.net/portal/includes/usagepolicy.php">Data Use Policy</a> for more information.
	</p>
	<p>
		These data are currently growing due to the work of the <strong>Extending Anthophila Research Through Image and Trait Digitization</strong>
		National Science Foundation Project (<a href="http://big-bee.net" target="_blank">Big-Bee</a>). Big-Bee is a collaboration of 13 universities, research stations,
		natural history collections, and agencies who aim to share images, label, and functional trait (i.e., flight timing, host plant, body size) data for over 5000 bee species.
	</p>
	<p>
		<strong>Cite the Big-Bee project: </strong>Seltmann KC, Allen J, Brown BV, Carper A, Engel MS, Franz N, Gilbert E, Grinter C, Gonzalez VH, Horsley P, Lee S, Maier C, Miko I, Morris P, Oboyski P, Pierce NE, Poelen J, Scott VL, Smith M, Talamas EJ, Tsutsui ND, Tucker E (2021). Announcing Big-Bee: An initiative to promote understanding of bees through image and trait digitization. Biodiversity Information Science and Standards 5: e74037. <a href="https://doi.org/10.3897/biss.5.74037" target="_blank">https://doi.org/10.3897/biss.5.74037</a>
	</p>
	</div>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>