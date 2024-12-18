<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE ?></title>
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
		.navpath a {
			color: #7a4422;
		}
</style>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div class="navpath">
	<main id="innertext">
		<h1 class="page-heading" style="font-size:1.8em"><?= $LANG['INDEX_H1']; ?></h1>
		<div id="quicksearchdiv" style="margin:10px">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Taxon Search'); ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
			</form>
	</div>
	<div style="float:left"><img src="images/layout/image-types_v3.jpg" style="width:350px;margin:0px 10px" /></div>
	<?php if($LANG_TAG == 'es'){
	?>
	<p>
		La Biblioteca de Abejas es un repositorio en línea de imágenes, rasgos y datos de especímenes de abejas. El portal tiene un alcance mundial y puede 
		incluir otros taxones que no son abejas pero que interactúan con ellas (es decir, parásitos de abejas). Los colaboradores de este recurso son variados
		 e incluyen a muchos taxonomistas, administradores de datos y ecólogos de abejas cuyo trabajo es determinar especímenes de abejas y ayudarnos a comprender
		 la evolución y ecología de las abejas. La Biblioteca de Abejas recomienda citar el repositorio de un espécimen de abeja, 
		el número de catálogo del espécimen y quién determinó el espécimen en cualquier publicación que haga referencia a datos de este portal. 
		Las imágenes se pueden reutilizar de forma gratuita, pero cite la institución que proporcionó la imagen.
	</p>
	<p>
		Estos datos están aumentando actualmente gracias al trabajo del Proyecto de la Fundación Nacional de Ciencias para la Ampliación de la Investigación 
		de Anthophila a través de la Digitalización de Imágenes y Rasgos (<a href="http://big-bee.net/" target="_blank">Big-Bee</a>). 
		Big-Bee es una colaboración de 13 universidades, estaciones de investigación, 
		colecciones de historia natural y agencias que tienen como objetivo compartir imágenes, 
		etiquetas y datos de rasgos funcionales (es decir, tiempo de vuelo, planta hospedante, tamaño corporal) de más de 5000 especies de abejas.
	</p>
	<p>
		Citar el proyecto Big-Bee: Seltmann KC, Allen J, Brown BV, Carper A, Engel MS, 
		Franz N, Gilbert E, Grinter C, Gonzalez VH, Horsley P, Lee S, Maier C, Miko I, 
		Morris P, Oboyski P, Pierce NE, Poelen J, Scott VL, Smith M, Talamas EJ, Tsutsui ND, Tucker E (2021) 
		Anunciando Big-Bee: Una iniciativa para promover la comprensión de las abejas a través de la digitalización de imágenes y rasgos. 
		Biodiversity Information Science and Standards 5: e74037. <a href="https://doi.org/10.3897/biss.5.74037" target="_blank">https://doi.org/10.3897/biss.5.74037</a>
	</p>
	<?php
	}
	elseif($LANG_TAG == 'fr')
	{
	?>
	<p>
		La Biblioteca de Abejas est un dépôt en ligne d'images, de données et de données d'espèces d'abejas. Le portail a une portée mondiale et peut 
		inclure d'autres taxons qui ne sont pas liés mais qui interagissent avec eux (c'est ce que disent les parasites des parents). Les collaborateurs 
		de ces ressources sont variés et incluent de nombreux taxonomistes, administrateurs de données et écologiques des enfants qui travaillent et 
		déterminent les espèces spécifiques des enfants et des aides pour comprendre l'évolution et l'écologie des enfants. La Biblioteca de Abejas 
		recommande de citer le dépôt d'un exemplaire d'abeja, le numéro de catalogue de l'exemplaire et celui qui détermine l'exemplaire 
		dans toute publication qui fait référence aux données de ce portail.
 		Les images peuvent être réutilisées gratuitement, mais citez l'institution qui a fourni l'image.
	 </p>
	<p>
		Ces données sont actuellement en pleine croissance grâce aux travaux du projet Extending Anthophila Research Through Image and Trait 
		Digitization de la National Science Foundation (<a href="http://big-bee.net/" target="_blank">Big-Bee</a>). 
		Big-Bee est une collaboration entre 13 universités, stations de recherche, 
		collections d'histoire naturelle et agences qui visent à partager des images, des étiquettes et des données sur les caractéristiques 
		fonctionnelles (c'est-à-dire le moment du vol, la plante hôte, la taille du corps) de plus de 5 000 espèces d'abeilles.
	</p>
	<p>
		Citez le projet Big-Bee : Seltmann KC, Allen J, Brown BV, Carper A, Engel MS, Franz N, Gilbert E, Grinter C, Gonzalez VH, Horsley P, 
		Lee S, Maier C, Miko I, Morris P, Oboyski P, Pierce NE, Poelen J, Scott VL, Smith M, Talamas EJ, Tsutsui ND, Tucker E (2021) 
		Annonce de Big-Bee : une initiative visant à promouvoir la compréhension des abeilles grâce à la numérisation des images et des traits. 
		Biodiversity Information Science and Standards 5 : e74037. <a href="https://doi.org/10.3897/biss.5.74037" target="_blank">https://doi.org/10.3897/biss.5.74037</a>
	</p>
	<?php
	}
	else{
	?>
	<p>
		The Bee Library is an online repository of bee image, trait, and specimen data. The portal has a worldwide scope and may include other taxa that are not bees but interact with
		bees (i.e., bee parasites). The contributors to this resource are varied and include the many taxonomists, data managers, and bee ecologists whose work it is to determine bee
		specimens and help us understand bee evolution and ecology. The Bee Library recommends citing the repository for a bee specimen, the specimen catalog number, and who
		determined the specimen in any publication that references data from this portal. Images are free for reuse, but please cite the institution that provided the image.
	</p>
	<p>
		These data are currently growing due to the work of the <strong>Extending Anthophila Research Through Image and Trait Digitization</strong>
		National Science Foundation Project (<a href="http://big-bee.net" target="_blank">Big-Bee</a>). Big-Bee is a collaboration of 13 universities, research stations,
		natural history collections, and agencies who aim to share images, label, and functional trait (i.e., flight timing, host plant, body size) data for over 5000 bee species.
	</p>
	<p>
	<p>
		<strong>Cite the Big-Bee project: </strong>Seltmann KC, Allen J, Brown BV, Carper A, Engel MS, Franz N, Gilbert E, Grinter C, Gonzalez VH, Horsley P, Lee S, Maier C, Miko I,
		Morris P, Oboyski P, Pierce NE, Poelen J, Scott VL, Smith M, Talamas EJ, Tsutsui ND, Tucker E (2021)
		Announcing Big-Bee: An initiative to promote understanding of bees through image and trait digitization. Biodiversity Information Science and Standards 5: e74037.
		<a href="https://doi.org/10.3897/biss.5.74037" target="_blank">https://doi.org/10.3897/biss.5.74037</a>
	</p>
	<?php
	}
	?>
	</div>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
