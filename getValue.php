<?php
// set_time_limit(300);

// 	session_start();
// 	define('HOST', "localhost");
//     define('USERNAME', "root");
//     define('PASSWORD', "");
//     define('DB', "getvalue");
//  	$connect = mysqli_connect(HOST, USERNAME, PASSWORD, DB);
//  	if ($connect) {
//         //var_dump($connect);
//     } else {
//         die(mysqli_error($connect));
//     }


$html = file_get_contents('https://www.reddit.com/');
var_dump($html);

// preg_match('/&lt;tbody&gt;(.*)&lt;\/tbody&gt;/i', $html, $all);

// //echo($all[1]);
// $str = $all[0];
// $input = [];
// while (strpos($str, "&lt;td&gt;</span>")){
// 	$str = substr($str,  strpos($str, "&lt;td&gt;</span>"));
// 	$inputValue = substr($str, 17, strpos($str, '<span class="html-tag">&lt;/td&gt;') - 17);
	
// 	array_push($input, $inputValue);

	
// 	$str = substr($str, strpos($str, '<span class="html-tag">&lt;/td&gt;'));
// 	if (strpos($str, "&lt;td&gt;</span>") ===false ) break;
// }
// //time zone set...
// //date_default_timezone_set('UTC');

// $date = date("Y-m-d H:i:s");
// for ($i=1; $i < count($input) + 1; $i++) {
// 	if ($i % 5 == 0){
// 		$sql = "INSERT INTO tbl_input SET login='".$input[$i-5]."', volume='".$input[$i - 4]."', commission='".$input[$i-3]."', rebate = '".$input[$i-2]."', balance = '".$input[$i - 1]."', created_at = '".$date."'";

// 		$q = $connect->query($sql);
		
// 	}
// }
// echo "success inputed";

?>
