<!--* File name : qform.php
    * Author : Hayato Doi
    * Outline : 文字入力式アンケートのxのテンプレート
    * License : These codes are licensed under CC0.
    *           http://creativecommons.org/publicdomain/zero/1.0/deed.ja
    * Copyright (c) 2016, Hayato Doi
-->
<li id="<?= $labelid ?>" class="textareaf">
<label class="description" for="<?= $labelid ?> "><?= $qflabel ?></label>
	<p class="hiddenerror">入力されていません。</p>
	<div>
		<textarea id="<?= $labelid ?>" name="<?= $labelid ?>" class="element textarea medium"></textarea> 
	</div> 
</li>
