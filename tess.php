<?php

require "tess2.php";
// $b["alamat"] = "jalan";

// $b["jumlah_hobi"] = count ($b["hobi"]);

// var_dump($b);

// echo count($b);

// kondisi -- code
// if ($b["umur"] >= 25){
//     echo $b["pekerjaan"] . PHP_EOL;
// } elseif ($b["umur"] <= 7){
//     echo $b["hobi"][0] . PHP_EOL;
//     echo $b["hobi"][1] . PHP_EOL;
//     echo $b["hobi"][2] . PHP_EOL;
// } else {
//     echo $b["pendidikan"];
// } 



// switch ($b["nilai"]) {
//     case 'A':
//         echo "sangad baik";
//         break;
//     case 'B':
//         echo "baik";
//         break;
//     case 'C':
//         echo "cukup";
//         break;
//     case 'D':
//         echo "dengang";
//         break;

//     default:
//         echo "tidak lulus";
//         break;
// }

// perulangan for loop
// for ($i=0; $i < count($b["hobi"]) ; $i++) { 
//     echo $b["hobi"][$i] . PHP_EOL;
// }


// tugas perulangan for loop
// $a = [
//     "katak", "kodok", "laptop", "lele", "ikan", "sate", "tidur", "pulang"
// ];

// for ($i=0; $i < count($a) ; $i++) { 
//    echo $a[$i] . PHP_EOL;
// }


// while loop
// $i = 0;
// while ($i <= 10) {
//     echo "iyaa" . PHP_EOL;
//     $i++;
// }


// foreach ($b as $key => $value) {
//     if ($key == 'pekerjaan'&& $b ['umur'] < 20 )  {
//         continue;
//     }
//     if ($key == 'pendidikan' && $b ['umur'] >= 20) {
//         continue;
//     }
//     if ($key == "hobi") {
//         $a = "Hobi Ke 1";
//         foreach ($value as $hobi) {
//             echo $a . ": " . $hobi . PHP_EOL;
//             $a++;
//         }
//     } else {
//         echo $key . ':' . $value . PHP_EOL;
//     }
// }

// foreach ($b['nilai'] as $k => $v) {
//     $s = "semester " . ($k + 1);
//     echo "nilai {$s} : {$v} \n";

//     switch ($v) {
//         case 'A':
//             echo "Predikat {$s} : Sangat Baik \n";
//             break;
//         case 'B':
//             echo "Predikat {$s} : Baik \n";
//             break;
//         case 'C':
//             echo "Predikat {$s} : Cukup \n";
//             break;
//         case 'D':
//             echo "Predikat {$s} : Kurang \n";
//             break;
//         default:
//             echo "Predikat {$s} : - \n";
//             break;
//     }
// }

function genPredikat($n)
{
    switch ($n) {
        case 'A':
            return "Sangat Baik";
        case 'B':
            return "Baik";
        case 'C':
            return "Cukup";
        case 'D':
            return "Kurang";
        default:
            return "-";
    }
}

foreach ($b['nilai'] as $k => $v) {
    $s = "semester " . ($k + 1);
    echo "nilai {$s} : {$v} \n";
    echo "Predikat {$s} : " . genPredikat($v) . " \n";
}

echo "----------------\n";


foreach ($b['kedisiplinan'] as $k => $v) {
    $s = "semester " . ($k + 1);
    echo "kedisiplinan {$s} : {$v} \n";
    echo "Predikat kedisiplinan {$s} : " . genPredikat($v) . " \n";
}