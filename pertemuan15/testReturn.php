<?php

// membuat bintang kebawah mulai dari urutan pertama 1 bintang, urutan kedua 2 bintang, dst...
// $bin=10;
// for($a=$bin;$a>0;$a--){
//     for($i=1; $i<=10; $i++){
//         echo "&nbsp";
//     }
//     for($a1=$bin;$a1>=$a;$a1--){
//         echo "*";
//     }
//     echo "<br>";
// }

// $star=10;
// 	for( $a=10;$a>0;$a--){
// 	for($i=0; $i<=$a; $i++){
// 		echo "&nbsp";
// 	}
// 	for($a1=10;$a1>=$a;$a1--){
// 		echo"*";
// 	}
// 	echo"<br>";
// 	}

$bin = 10;
for($a=0;$a<=$bin;$a++){
    for($i=$bin;$i>=$a;$i--){
        echo "*";
    }

    echo "<br>";
}

?>
