<?php

function outputArray($array){
	if(is_array($array)){
		foreach($array as $key => $value){
			echo "$value<br>";
		}
	}
}

?>