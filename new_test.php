<?php 
	$str_str = '1';
	$num_str = 1;
	if($str_str == $num_str){
		echo '等于'.'<br/ >';
	}else{
		echo '不等于'.'<br/ >';
	}
	if($str_str === $num_str){
		echo '等于'.'<br/ >';
	}else{
		echo '不等于'.'<br/ >';
	}
	$a = ['test' => 1, 'hello' => NULL];
	var_dump(isset($a['hello']));
	var_dump(isset($a['asd']));
	var_dump(empty($a['hello']));
	var_dump(empty($a['asd']));

	$astr = '我的';
	$bstr = &$astr;
	echo '<br />'.$bstr.'<br />';
	$astr = '你的';
	echo $bstr.'<br />';
?>