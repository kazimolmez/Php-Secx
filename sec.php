<?php

if(isset($_REQUEST)){
	$inj = array('select', 'insert', 'delete', 'update','drop table', 'union', 'null','order by','order+by','from','version','database','tables','query','<','>','<script','/>');
	for ($i = 0; $i < sizeof($_REQUEST); ++$i){
		for ($j = 0; $j < sizeof($inj); ++$j){
			foreach($_REQUEST as $gets){
				if(preg_match (',' . $inj[$j] . ',', strtolower($gets))){
					$temp = key($_REQUEST);
					exit('illegal attack!');
				}
			}
		}
	}
}

?>
