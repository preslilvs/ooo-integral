<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
<div id="catalog">
<form name="one" id="one" method="post"> 	 
<table border="0" cellspacing="0" cellpadding="0" class="filtr"> 
    <tbody> 
      <tr><td> 
          <p><input name="instock" onchange="javascript: document.one.submit(); return false;" type="checkbox" <?if(isset($_REQUEST['sub'])){if (isset($_REQUEST['instock'])){?>checked<?}}else{?><?}?> /&gt;</p>
         </td><td><span class="n4">&nbsp;Показать только товары в наличии</span></td></tr>
     </tbody>
   </table>
 <input name="sub" type="hidden" value="sub" /> </form> 
<div><?$APPLICATION->IncludeComponent("bitrix:catalog.filter", "template1", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "47",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "CML2_ARTICLE",
		2 => "MADE",
		3 => "NAME",
		4 => "",
	),
	"LIST_HEIGHT" => "5",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
	)
	),
	false
);?></div>
 
<div></div>
 
<div><?$APPLICATION->IncludeComponent("bitrix:store.catalog.filter", ".default", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "47",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "ID",
		1 => "CODE",
		2 => "XML_ID",
		3 => "NAME",
		4 => "TAGS",
		5 => "SORT",
		6 => "PREVIEW_TEXT",
		7 => "PREVIEW_PICTURE",
		8 => "DETAIL_TEXT",
		9 => "DETAIL_PICTURE",
		10 => "DATE_ACTIVE_FROM",
		11 => "ACTIVE_FROM",
		12 => "DATE_ACTIVE_TO",
		13 => "ACTIVE_TO",
		14 => "SHOW_COUNTER",
		15 => "SHOW_COUNTER_START",
		16 => "IBLOCK_TYPE_ID",
		17 => "IBLOCK_ID",
		18 => "IBLOCK_CODE",
		19 => "IBLOCK_NAME",
		20 => "IBLOCK_EXTERNAL_ID",
		21 => "DATE_CREATE",
		22 => "CREATED_BY",
		23 => "CREATED_USER_NAME",
		24 => "TIMESTAMP_X",
		25 => "MODIFIED_BY",
		26 => "USER_NAME",
		27 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "CML2_ARTICLE",
		2 => "CML2_BASE_UNIT",
		3 => "CML2_TRAITS",
		4 => "CML2_TAXES",
		5 => "CML2_ATTRIBUTES",
		6 => "CML2_BAR_CODE",
		7 => "MODEL",
		8 => "MADE",
		9 => "",
	),
	"LIST_HEIGHT" => "5",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "N",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
		0 => "Безнал, Рубли, с НДС",
	)
	),
	false
);?>
 <?if (isset($_REQUEST['sub']))
{ 
   if (isset($_REQUEST['instock']))
   {
      GLOBAL $arrFilter;
      if (!is_array($arrFilter))
         $arrFilter = array();
      $arrFilter['>CATALOG_QUANTITY'] = 0;
   }
}?>
</div>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "template", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "65",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "MADE",
		2 => "",
	),
	"ELEMENT_SORT_FIELD" => "name",
	"ELEMENT_SORT_ORDER" => "",
	"FILTER_NAME" => "arrFilter",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"PAGE_ELEMENT_COUNT" => "30",
	"LINE_ELEMENT_COUNT" => "3",
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "CML2_ARTICLE",
		2 => "CML2_ATTRIBUTES",
		3 => "MODEL",
		4 => "MADE",
		5 => "CML2_CODE",
		6 => "code",
		7 => "transit",
		8 => "",
	),
	"SECTION_URL" => "",
	"DETAIL_URL" => "/catalog/detail/?ELEMENT_ID=#ID#",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "Y",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "Безнал, Рубли, с НДС",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRODUCT_PROPERTIES" => array(
	),
	"USE_PRODUCT_QUANTITY" => "Y",
	"DISPLAY_TOP_PAGER" => "Y",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "modern",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>