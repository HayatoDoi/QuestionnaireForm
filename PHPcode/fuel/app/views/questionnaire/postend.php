<!--* File name : qform.php
    * Author : Hayato Doi
    * Outline : アンケートフォームのテンプレート(質問部分のみ後で入れる。)
    * License : These codes are licensed under CC0.
    *           http://creativecommons.org/publicdomain/zero/1.0/deed.ja
    * Copyright (c) 2016, Hayato Doi
-->
<!DOCTYPE html >
<html lang="ja">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>アンケート</title>
		<?= Asset::css('view.css') ?>
		<?= Asset::js('view.js') ?>
		<?= Asset::js('inputcheck.js') ?>
	</head>

	<body id="main_body" >
		<div id="form_container">
			<h1><a>アンケート</a></h1>
			<form id="form_4401" class="appnitro" action="" method="get">
				<div class="form_description">
					<h2>アンケート</h2>
					<p>以下の内容で登録をしました。</p>
				</div>
				<ul id="qes">
					<?= $questio ?>
					<li class="buttons">
						<input id="saveForm" class="button_text" type="button" value=" 元に戻る " onclick="location.href='./'"/>
					</li>
				</ul>
			</form>	
			<div id="footer">
				Copyright &copy; 2016, Hayato Doi.
			</div>
		</div>
	</body>
</html>
