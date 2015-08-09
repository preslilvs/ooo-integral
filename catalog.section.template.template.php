<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?echo ("<pre>");?>
<//?print_r($arResult);?>
<?echo ("</pre>");?>
<?function orderBy($data, $field)
  {
    $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
    usort($data, create_function('$a,$b', $code));
    return $data;
  }

  
  ?>
<?if ($arResult["ITEMS"])
{?>
<?=$arResult["NAV_STRING"]?>
<table  cellpadding="0" cellspacing="0" class="prodtable" border="1" style="border:1px solid #b6c3c4;">
	<tr class="title">
		<td align="center">Код</td>
		<td align="center" width="392px">Наименование</td>
		<td align="center">Свободное<br>количество</td>
		<td align="center">Резерв</td>
		<td align="center">Транзит</td>
		<td align="center">Цена</td>
		<td align="center">Поле для<br>заказа</td>
	</tr>
	<?foreach($arResult["ITEMS"] as $cell=>$arElement)
	{?>
		
		<tr>
            <td align="center" class="article">
	<?=$arElement["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]?>
			</td>
			<td class="name"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
					<?=$arElement["NAME"]?>
					</a>
					<!--<br />
					<?=$arElement["PREVIEW_TEXT"]?>
					-->
					<!--<br />
					<noindex>
						<a href="<?echo $arElement["BUY_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_BUY")?></a>
							
					</noindex>
					-->
			</td>
			<td align="center" class="QUANTITY">
				<?if ($arElement ["CATALOG_QUANTITY"] <= 0)
			echo "";
			else
			echo $arElement ["CATALOG_QUANTITY"];?>
			</td>
			<td align="center">
            <?if ($arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [4] <= 0)
			echo "";
			else
			echo $arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [4];?>
			</td>
			<td align="center">
             <?if ($arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [3] <= 0)
			echo "";
			else
			echo $arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [3];?>
			</td>
			<td align="right" class="PRICES">
			<?$data = orderBy($arElement["PRICES"], 'VALUE');?>
				<?foreach($data as $code=>$arPrice):?>
					<?if($arPrice["CAN_ACCESS"]):?>
					<nobr><span class="с4"><?=$arPrice["PRINT_VALUE"]?></span></nobr>
					<?break;?>
					<?endif;?>
				<?endforeach;?>
			</td>
			<td valign="bottom" class="form">
			<form style="float:right; padding:0 12% 0 0;" action="<?=$APPLICATION->GetCurPageParam();?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="action" value="BUY">
				<input type="hidden" name="id" value="<?=$arElement["ID"]?>">
			<nobr>
			<ul style="float:left; list-style-type:none;">
              <li>
			    <? if ($arElement ["CATALOG_QUANTITY"] == 0 & 
				 $arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [3] == 0 &
				 $arElement ["PROPERTIES"]["CML2_TRAITS"]["VALUE"] [3] == 0)
				 echo "Под Заказ";
				 else {
				 echo '<input type="text" name="quantity" value="1" size="3" class="input_quanity" /><input type="submit" name="actionADD2BASKET" value="" class="basket_img"  />'
				      ;}
				?>
			 </li>
			</ul>
			</nobr>
			</form>
			</td>
			
		</tr>
	<?}?>
</table>
<?}?>
