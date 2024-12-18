<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/left_logo.png" alt="Pinned bee specimens">
					</div>
				</a>
				<div class="brand-name">
					<h1 style="font-size:3rem">Bee Library</h1>
					<h2 style="font-style:italic">An online resource connecting images, specimen records, and natural history information about bees</h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
                                        <li>
                                                <a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
                                                        <?= $LANG['H_SEARCH'] ?>
                                                </a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
                                                        		<?= $LANG['H_SEARCH'] ?>
                                                		</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer">
                                                        		<?= $LANG['H_MAP'] ?>
                                                		</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php?target=Apoidea" rel="noopener noreferrer">
                                                                        <?= $LANG['H_TAXONOMY_DISPLAY'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
                                                <a href="#" ><?php echo (isset($LANG['H_IMAGES'])?$LANG['H_IMAGES']:'Images'); ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" ><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" ><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Search Images'); ?></a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/checklists/index.php">
							<?= $LANG['H_INVENTORIES'] ?>
						</a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/checklists/index.php">
                                                                        <?= $LANG['H_ALL_PUBLIC_CHECKLISTS'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=1">
                                                                        <?= $LANG['H_UCSB_NAT_RESERVES'] ?>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2">
                                                                        <?= $LANG['H_UCSB_CAMPUS'] ?>
                                                                </a>
                                                        </li>
                                                </ul>
					</li>
                                        <li>
                                                <a href="https://www.globalbioticinteractions.org/bigbee/">
                                                        <?= $LANG['H_GLOBI'] ?>
                                                </a>
                                        </li>
					<li>
						<a href="https://big-bee.net">
							<?= $LANG['H_BIG_BEE_NEWS'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
