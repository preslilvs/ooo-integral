<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/jquery/jquery-1.4.2.min.js"></script>
<?$APPLICATION->ShowHead();?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>

<title><?$APPLICATION->ShowTitle()?></title>

<!--[if lt IE 7]>
<style type="text/css">
	#compare {bottom:-1px; }
	div.catalog-admin-links { right: -1px; }
	div.catalog-item-card .item-desc-overlay {background-image:none;}
</style>
<![endif]-->

<!--[if IE]>
<style type="text/css">
	#fancybox-loading.fancybox-ie div	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_loading.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-close		{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_close.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-title-over	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_title_over.png', sizingMethod='scale'); zoom: 1; }
	.fancybox-ie #fancybox-title-left	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_title_left.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-title-main	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_title_main.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-title-right	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_title_right.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-left-ico		{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_nav_left.png', sizingMethod='scale'); }
	.fancybox-ie #fancybox-right-ico	{ background: transparent; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_nav_right.png', sizingMethod='scale'); }
	.fancybox-ie .fancy-bg { background: transparent !important; }
	.fancybox-ie #fancy-bg-n	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_n.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-ne	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_ne.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-e	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_e.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-se	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_se.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-s	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_s.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-sw	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_sw.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-w	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_w.png', sizingMethod='scale'); }
	.fancybox-ie #fancy-bg-nw	{ filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=SITE_TEMPLATE_PATH?>/jquery/fancybox/fancy_shadow_nw.png', sizingMethod='scale'); }
</style>
<![endif]-->

<script type="text/javascript">if (document.documentElement) { document.documentElement.id = "js" }</script>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "inc",
	"EDIT_TEMPLATE" => "standard.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
	<div id="page-wrapper">
		<div id="header-wrapper">
                       <div id="header-background">
			<div id="header" itemscope itemtype = "http://schema.org/LocalBusiness">
				<div id="logo"><?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_DIR."include/company_logo.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?></div>
				<div id="schedule">
					<div class="telephone" itemprop = "telephone"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></div>
				</div>
			   <table border="0" id="table-top">
			    <tbody>
				<tr>
				<td>
				<div id="breadcrumb-search">
					 <?$APPLICATION->IncludeComponent("bitrix:search.title", "store", array(
	"NUM_CATEGORIES" => "1",
	"TOP_COUNT" => "5",
	"ORDER" => "date",
	"USE_LANGUAGE_GUESS" => "Y",
	"CHECK_DATES" => "N",
	"SHOW_OTHERS" => "Y",
	"PAGE" => "#SITE_DIR#search/",
	"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
	"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
	"CATEGORY_0" => array(
		0 => "iblock_catalog",
	),
	"CATEGORY_0_iblock_catalog" => array(
		0 => "all",
	),
	"SHOW_INPUT" => "Y",
	"INPUT_ID" => "title-search-input",
	"CONTAINER_ID" => "search"
	),
	false
);?>
				</div>
				</td>
				<td id="center-td"></td>
				<td>
				<div id="top-menu" valign="center">
				<?
				$APPLICATION->IncludeComponent("bitrix:menu", "horizontal2", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "Y",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);
				?>
				</div>
				</td>
				</tr>
				</tbody>
			    </table>
			</div>
                   </div>
				     <div id="header-line"></div>
					 <div id="header-background2"></div>
		</div>
		<div id="content-wrapper">
			<div id="content"<?$APPLICATION->ShowProperty("TEMPLATE_SIDEBAR_MODE", "");?>>
				
								 <div id="left-column">
					<div id="cart">
						<div class="block-content">
							<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "store", array(
	"REGISTER_URL" => SITE_DIR."login/",
	"PROFILE_URL" => SITE_DIR."personal/profile/",
	"SHOW_ERRORS" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);?>
							<span id="cart_line">
								<?
								$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", ".default", array(
	"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
	"PATH_TO_PERSONAL" => SITE_DIR."personal/",
	"SHOW_PERSONAL_LINK" => "N"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "N"
	)
);
								?>
							</span>
						</div>
						
					</div>
					<?$APPLICATION->ShowProperty("CATALOG_COMPARE_LIST", "");?>
					<div id="main-menu">
					<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "tree1", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "26",
	"SECTION_ID" => "",
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "N",
	"TOP_DEPTH" => "11",
	"SECTION_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "/catalog/list/?SECTION_ID=#ID#",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
					</div>
				<div class="menu_space">&nbsp;</div>	
				</div>
                <div id="about">
                 <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about.php"), false);?>
                </div>
				<div id="about2">
                 <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about2.php"), false);?>
                </div>                
				<div id="workarea">
					<?
					$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
						"START_FROM" => "1",
						"PATH" => "",
						"SITE_ID" => "-"
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);
					?>
					#WORK_AREA#<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
				</div>

		</div>
		<div id="space-for-footer"></div>
	</div>

	<div id="footer-wrapper">
		<div id="footer">
			<div id="copyright"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?></div>

			
			<div id="footer-design"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/address.php"), false);?></div>
		</div>
	</div>
	<?
	if ($APPLICATION->GetProperty("CATALOG_COMPARE_LIST", false) == false && IsModuleInstalled('iblock'))
	{
		$arFilter = Array("TYPE"=>"catalog", "SITE_ID"=>SITE_ID);
		$obCache = new CPHPCache;
		if($obCache->InitCache(36000, serialize($arFilter), "/iblock/catalog/active"))
		{
			$arIBlocks = $obCache->GetVars();
		}
		elseif(CModule::IncludeModule("iblock") && $obCache->StartDataCache())
		{

			$arIBlocks = array();
			$dbRes = CIBlock::GetList(Array(), $arFilter);
			$dbRes = new CIBlockResult($dbRes);

			if(defined("BX_COMP_MANAGED_CACHE"))
			{
				global $CACHE_MANAGER;
				$CACHE_MANAGER->StartTagCache("/iblock/catalog/active");
				
				while($arIBlock = $dbRes->GetNext())
				{
					$CACHE_MANAGER->RegisterTag("iblock_id_".$arIBlock["ID"]);

					if($arIBlock["ACTIVE"] == "Y")
						$arIBlocks[$arIBlock["ID"]] = $arIBlock;
				}

				$CACHE_MANAGER->RegisterTag("iblock_id_new");
				$CACHE_MANAGER->EndTagCache();
			}
			else
			{
				while($arIBlock = $dbRes->GetNext())
				{
					if($arIBlock["ACTIVE"] == "Y")
						$arIBlocks[$arIBlock["ID"]] = $arIBlock;
				}
			}

			$obCache->EndDataCache($arIBlocks);
		}
		else
		{
			$arIBlocks = array();
		}

		if(count($arIBlocks) == 1)
		{
			foreach($arIBlocks as $iblock_id => $arIBlock)
				$APPLICATION->IncludeComponent(
					"bitrix:catalog.compare.list",
					"store",
					Array(
						"IBLOCK_ID" => $iblock_id,
						"COMPARE_URL" => $arIBlock["LIST_PAGE_URL"]."compare/"
					),
					false,
					Array("HIDE_ICONS" => "Y")
				);
		}
	}

	?>
</body>
</html>