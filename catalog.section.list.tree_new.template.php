<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-section-list">
<table cellpadding="10" cellspacing="0" border="0">
      <?foreach($arResult["SECTIONS"] as $cell=>$arSection):?>
      <?
      $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
      $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
      ?>
      <?if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
      <tr>
      <?endif;?>
      <td align="center" valign="top" width="<?=round(100/$arParams["LINE_ELEMENT_COUNT"])?>%" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
         <? if ($arSection["PICTURE"]["SRC"]){?><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><img src="<?=$arSection["PICTURE"]["SRC"]?>" title="<?=$arSection["NAME"]?>" border="0"/></a><br><br><?}?>
		 <a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?><?if($arParams["COUNT_ELEMENTS"]):?> (<?=$arSection["ELEMENT_CNT"]?>)<?endif;?></a>
      </td>
      <?$cell++;
      if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
         </tr>
      <?endif?>

      <?endforeach;?>

      <?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
         <?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
            <td> </td>
         <?endwhile;?>
         </tr>
      <?endif?>
</table>
</div>