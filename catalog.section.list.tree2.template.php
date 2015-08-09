<?
            $level = 0;
       $level += $arResult["SECTION"]["DEPTH_LEVEL"];
   ?>
   <ul class="dir-list clearfix">
   <?
       foreach($arResult["SECTIONS"] as $k => $v) :
   ?>
       <? if($v["DEPTH_LEVEL"] == $level) : ?>
       <li>
          <a class="pic" href="<?= $v["SECTION_PAGE_URL"] ?>" >
         <?
            $arFileTmp = CFile::ResizeImageGet(
               $v["PICTURE"]["ID"],
               array("width" => $width, "height" => $height),
               BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
               true
            );
         ?>
         <img src="<?= $arFileTmp["src"] ?>" />
          </a>
          <p><?= $v["NAME"]; ?></p>
       </li>
       <? endif; ?>
   <?
       endforeach;
   ?>
   </ul>