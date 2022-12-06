<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.en.php');
else include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<script type="text/javascript" src="<?php echo $CLIENT_ROOT; ?>/js/symb/base.js?ver=171023"></script>
<script type="text/javascript">
	//Uncomment following line to support toggling of database content containing DIVs with lang classes in form of: <div class="lang en">Content in English</div><div class="lang es">Content in Spanish</div>
	setLanguageDiv();
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3" style="color:#FFFFFF;background-color:#fff;">
			<div style="clear:both; width:100%; height:80px; border-bottom:1px solid #000000;">
				<div style="float:left">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/header-small.png" style="margin:0px 0px;width:600px" />
				</div>
				<div style="margin-left:30px; color: #003660; font-family: 'Mate', serif; letter-spacing: 1px; text-shadow: 0 0 3px rgba(0,0,0,0.5);">
					
					<div style="margin-top:10px;font-size:40px; line-height:48px;">
						UC Santa Barbara Collection Network
					</div>
					<div style="margin-top:20px; font-size:20px; font-style: italic">
					</div>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT.'/profile/index.php?refurl='.$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>"><?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php"><?php echo (isset($LANG['H_NEW_ACCOUNT'])?$LANG['H_NEW_ACCOUNT']:'New Account')?></a>
						</span>
						<?php
					}
					?>

                                        <span style="margin-left:5px;margin-right:5px;">
            						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?></a>

                                        </span>

					<span style="margin-left:5px;margin-right:5px;">
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
							<option value="fr" <?php echo ($LANG_TAG=='fr'?'SELECTED':''); ?>>Français</option>
						</select>
						<?php
						if($IS_ADMIN){
							echo '<a href="'.$CLIENT_ROOT.'/content/lang/admin/langmanager.php?refurl='.$_SERVER['SCRIPT_NAME'].'"><img src="'.$CLIENT_ROOT.'/images/edit.png" style="width:12px" /></a>';
						}
						?>
					</span>



				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" ><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SEARCH'])?$LANG['H_SEARCH']:'Search'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" ><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Collections'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></a>
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
					<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php" >Insect Checklists</a>
					<ul>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=10" >Insects of UCSB and Nearby</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=25" >Insects of North Campus Open Space</a>
						</li>
						<li>
							<a href="https://library.big-bee.net/portal/projects/index.php?pid=2" >Bees of UCSB and Nearby</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=28" >Ichneumonoidea of UCSB and Nearby</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=11" >Ants of Santa Barbara County</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=7" >Ophioninae of Coastal California</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php" >UCSB Natural Reserve Checklists</a>
					<ul>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=27" >Santa Cruz Island Reserve Plants</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=24" >Santa Cruz Island Reserve Lichens</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=23" >Santa Cruz Island Reserve Fungi</a>
						</li>
						<li>
							<a href="https://library.big-bee.net/portal/checklists/checklist.php?clid=3" >Santa Cruz Island Bees</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=61" >Coal Oil Point Reserve Plant Voucher Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=53" >Coal Oil Point Reserve Plant Observation Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=57" >Coal Oil Point Reserve Arthropod Voucher Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=56" >Coal Oil Point Reserve Arthropod Observation Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=2252" >Coal Oil Point Reserve Reptiles and Amphibians Observation Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=60" >Coal Oil Point Reserve Mammal Observation Checklist</a>
						</li>
						<li>
							<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=2584" >Coal Oil Point Reserve Fungi Observation Checklist</a>
						</li>
					</ul>
				</li>
					
<!--					
					<li>
						<a href="#" ><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Amphibia" ><?php echo (isset($LANG['H_AMPHIBIA'])?$LANG['H_AMPHIBIA']:'Amphibians'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Arthropoda" ><?php echo (isset($LANG['H_ARTHROPODA'])?$LANG['H_ARTHROPODA']:'Arthropods'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Mammalia" ><?php echo (isset($LANG['H_MAMMALIA'])?$LANG['H_MAMMALIA']:'Mammals'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Aves" ><?php echo (isset($LANG['H_AVES'])?$LANG['H_AVES']:'Birds'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Plantae" ><?php echo (isset($LANG['H_PLANTA'])?$LANG['H_PLANTA']:'Plants'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Actinopterygii" ><?php echo (isset($LANG['H_FISH'])?$LANG['H_FISH']:'Fish'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&taxa=Reptilia" ><?php echo (isset($LANG['H_REPTILIA'])?$LANG['H_REPTILIA']:'Reptiles'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_DYN_KEYS'])?$LANG['H_DYN_KEYS']:'Identification Keys'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Amphibia" ><?php echo (isset($LANG['H_AMPHIBIA'])?$LANG['H_AMPHIBIA']:'Amphibians'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Arthropoda" ><?php echo (isset($LANG['H_ARTHROPODA'])?$LANG['H_ARTHROPODA']:'Arthropods'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Mammalia" ><?php echo (isset($LANG['H_MAMMALIA'])?$LANG['H_MAMMALIA']:'Mammals'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Aves" ><?php echo (isset($LANG['H_AVES'])?$LANG['H_AVES']:'Birds'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Plantae" ><?php echo (isset($LANG['H_PLANTA'])?$LANG['H_PLANTA']:'Plants'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Actinopterygii" ><?php echo (isset($LANG['H_FISH'])?$LANG['H_FISH']:'Fish'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key&taxa=Reptilia" ><?php echo (isset($LANG['H_REPTILIA'])?$LANG['H_REPTILIA']:'Reptiles'); ?></a>
							</li>
						</ul>
					</li> 
					<li>
						<a href="#" ><?php echo (isset($LANG['H_MORE_INFO'])?$LANG['H_MORE_INFO']:'Additional Info'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/aboutproject.php" ><?php echo (isset($LANG['H_ABOUT_PROJECT'])?$LANG['H_ABOUT_PROJECT']:'About Project'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/misc/contacts.php" ><?php echo (isset($LANG['H_CONTACTS'])?$LANG['H_CONTACTS']:'Contacts'); ?></a>
							</li>
							<li>
								<a href="http://symbiota.org/docs/symbiota-introduction/symbiota-help-pages/" target="_blank" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help'); ?></a>
							</li>
							<li>
							</li>
						</ul>





					</li>
end commented section -->
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
