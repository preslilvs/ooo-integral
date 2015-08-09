<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section-list">
<table border="0" cellspacing="25">
<tbody>
<tr>
<?
$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;

foreach($arResult["SECTIONS"] as $arSection):

	if($CURRENT_DEPTH<$arSection["DEPTH_LEVEL"])

		echo "<tr>";

	elseif($CURRENT_DEPTH>$arSection["DEPTH_LEVEL"])

		echo str_repeat("</tr>", $CURRENT_DEPTH - $arSection["DEPTH_LEVEL"]);

	$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];

?>

	<th>

 <? if ($arSection["PICTURE"]["SRC"]){?><img src="<?=$arSection["PICTURE"]["SRC"]?>" width="80" height="80" title="<?=$arSection["NAME"]?>" border="0"/><br><?}?>

<a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?> (<?=$arSection["ELEMENT_CNT"]?>)<?endif;?></a></th>

<?endforeach?>

</tr>
</tbody>
</table>
</div> 