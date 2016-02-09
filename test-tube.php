<?php
// date('', time());
// $s = 1;
// $b = 2;
// switch ($s) {
// 	case '1':
// 		echo "Ok";
// 		break;
	
// 	default:
// 		echo "False";
// 		break;
// }
 $mounth = ['01', '03', '05', '07', '09', '11', '12'];
                $i = -1;
                while($i < count($mounth) - 1){
                    $i++;
                    echo $mounth[$i];
                    echo 'Point' . "<br>";
                }