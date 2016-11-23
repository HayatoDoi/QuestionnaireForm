/* File name : inputcheck.js
 * Author : Hayato Doi
 * Outline : 送信ボタンが押された時、入力されていない部分があれば警告文を出してsubmitを止める。
 * License : These codes are licensed under CC0.
 *           http://creativecommons.org/publicdomain/zero/1.0/deed.ja
 * Copyright (c) 2016, Hayato Doi
 * */
//送信ボタンが押された時
function inputCheck(){
	// どこかでエラーが起きたら true -> false
	var returnbool = true;
	//質問部分を取り出し
	var qes_list = document.getElementById('qes').children;
	//質問を1つずつfor文で回して処理
	for(var i = 0; i < qes_list.length - 1; i++){
		//ラジオボタンの時
		if( qes_list[i].getAttribute('class').split(' ').indexOf('ragiof') >= 0){
			//子要素からspanを取り出す
			var span = qes_list[i].children[2];
			//spanからli要素のidを取り出し、すべてのli要素の中から1つチェックが付いているか確認
			if( true == (function(spanl){
				//for文ぶん回して要素にチェックが入ってたらtrue
				for(var j = 0; j < spanl.children.length; j++){
					if( span.children[j].id != '' ){
						if( document.getElementById(span.children[j].id).checked == true){
							return true;
						}
					}
				}
				return false;
			})(span) ){
				//要素にチェックが入っていた時の処理
				console.log('ちぇっく入ってた〜!!');
				qes_list[i].children[1].style.display = 'none';
			}
			else{
				//要素にチェックが入っていなかった時の処理
				console.log('どこにもチェックが入っていませんでした〜!!');
				qes_list[i].children[1].style.display = 'block';
				returnbool = false;
			}
		}
		//テキストエリアの時
		else if( qes_list[i].getAttribute('class').split(' ').indexOf('textareaf') >= 0 ){
			console.log("textareaf!!!!!!!!!!!!!!");
			if( qes_list[i].children[2].children[0].value != '' ){
				//テキストエリアが空白ではなかった
				qes_list[i].children[1].style.display = 'none';
			}
			else{
				//テキストエリアが空白だった時
				qes_list[i].children[1].style.display = 'block';
				returnbool = false;
			}
		}
	}
	return returnbool;
}
