<?php
class Controller_viewans extends Controller
{
	public function action_index()
	{
		$tablebody = "";
		$query = DB::query('SELECT qes.qText,ans.aText FROM ans INNER JOIN qes ON ans.ansid = qes.id')->execute()->as_array();
		//var_dump($query);
		$count = count($query); //for文の外で宣言すると早くなるらしい。
		//echo $count;
		for ( $i = 0; $i < $count; $i++ ){
			$tablebody.="<tr>";
			$tablebody.="<td>".$query[$i]["qText"]."</td>";
			$tablebody.="<td>".$query[$i]["aText"]."</td>";
			$tablebody.="</tr>";
		}
		//echo $tablebody;
		return Response::forge(View::forge('questionnaire/table',array("tablebody" => $tablebody,),false));
	}
	public function action_404()
	{
		echo "404 Not found.";
	}
}
