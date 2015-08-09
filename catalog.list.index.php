<div id="catalog"><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?> <form name="one" id="one" method="post"> 	 
  <table border="0" cellspacing="0" cellpadding="0"> 
    <tbody> 
      <tr><td> 
          <p><input name="instock" onchange="javascript: document.one.submit(); return false;" type="checkbox" <?if(isset($_REQUEST['sub'])){if (isset($_REQUEST['instock'])){?>checked<?}}else{?>checked<?}?> /&gt;</p>
         </td><td><span class="n4">&nbsp;Показать только товары в наличии</span></td></tr>
     </tbody>
   </table>
 <input name="sub" type="hidden" value="sub" /> </form> 
<div></div>
 
<div></div>
 
<div><?$APPLICATION->IncludeComponent("bitrix:catalog.filter", ".default", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "31",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "CML2_ARTICLE",
		2 => "",
	),
	"LIST_HEIGHT" => "5",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
		0 => "Безнал, Рубли, с НДС",
	)
	),
	false
);?></div>
 
<div></div>
 
<div><?$APPLICATION->IncludeComponent("bitrix:store.catalog.filter", ".default", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "31",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"LIST_HEIGHT" => "5",
	"TEXT_WIDTH" => "20",
	"NUMBER_WIDTH" => "5",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
	)
	),
	false
);?></div>
 <?if(isset($_REQUEST['sub']))
{ 
	if (isset($_REQUEST['instock']))
	{
		 $arrFilter= array("!CATALOG_QUANTITY"=>0) ;
	}
}
else
{?> 	<? $arrFilter= array("!CATALOG_QUANTITY"=>0) ; ?> <?}
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section", "template", array(
	"IBLOCK_TYPE" => "1c_catalog",
	"IBLOCK_ID" => "36",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "name",
	"ELEMENT_SORT_ORDER" => "asc",
	"FILTER_NAME" => "arrFilter",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"PAGE_ELEMENT_COUNT" => "30",
	"LINE_ELEMENT_COUNT" => "3",
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "CML2_ARTICLE",
		2 => "CML2_CODE",
		3 => "code",
		4 => "transit",
		5 => "",
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
	"ADD_SECTIONS_CHAIN" => "N",
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
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "Y",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?></div>