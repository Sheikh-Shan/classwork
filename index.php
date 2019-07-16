<?php

// $i="ba";
// switch ($i) {
// 	case 'bacha':
// 		echo "aeyyee";
// 		break;

// 	case 'baba_ma':
// 		echo "oeee";
// 		break;
// 	case 'Ami':
// 		echo "hello";
// 		break;
	
// 	default:
// 		echo "Go to hell";
// 		break;
//}

	// ---------recursion function------------------
function greet ($n){
if ($n<=0){


}else{

	echo "$n.hello <br>";
	$n--;
	greet ($n);
}

}
	greet (5);
?>