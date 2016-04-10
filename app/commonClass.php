<?php namespace App;

/*
|--------------------------------------------------------------------------
| original class for common functions
|--------------------------------------------------------------------------
*/

class commonClass {

	/* DEBUG */
	/*
		echo "/////////// DUMP /////////////";
		dmp($data);
		echo "//////////////////////////////";
	*/
	public static function dmp($data){
		// echo "<pre>";
	// 	if(!is_array($data)){
	// 		foreach($data as $val){
	// 			var_dump($val);
	// 			echo "<br>";
	// 		}
	// 	}else{
		var_dump("EEEEE");
	// 	}
		// echo "</pre>";
	}

	public static function test() {
		return 'commonClass!';
	}

}
