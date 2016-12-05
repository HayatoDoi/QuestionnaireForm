<?php

/* File name : qform.php
 * Author : Hayato Doi
 * Outline : 選択式アンケートのxのテンプレート
 * License : These codes are licensed under CC0.
 * http://creativecommons.org/publicdomain/zero/1.0/deed.ja
 * Copyright (c) 2016, Hayato Doi
 */
?>
<li id="<?= $labelid ?>" class="ragiof">
<label class="description" for="<?= $labelid ?>" ><?= $qflabel ?></label>
	<p class="hiddenerror">入力されていません。</p>
	<span>
		<?php
			// 質問の内容をfor文でひとつずつ入れる
			for($i = 0; $i < count($anslist);$i++){
				echo "<input id=\"".$labelid."_".$i."\" name=\"".$labelid."\" class=\"element checkbox\" type=\"radio\" value=\"".$anslist[$i]."\"/>";
				echo "<label class=\"choice\" for=\"".$labelid."_".$i."\">".$anslist[$i]."</label>";
			}
		?>
	</span>
</li>
