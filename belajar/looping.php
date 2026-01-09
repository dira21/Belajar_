<?php
/* 
ada 2 jenis looping:
1. yg memiliki nilai batas
2. yg tdk memiliki nilai batas

function looping di php
1. for[1]
2. while[1,2]
3. do...while[1,2]
4. foreach[2]

komponen yg wajib ada di perulangan [1]
1. nilai awal
2. nilai batas
3. increment/decrement
*/
 
// for
for($i = 1; $i <= 10; $i++) {
    echo "Mahasiswa ke-$i <br>";
}
echo "<br>";
echo "<hr>";
// for ($i = 10; $i >= 1; $i--) {
//     echo "Mahasiswa ke-$i <br>";
// }

// while
$awal = 1;
while ($awal <= 10) {
    echo "siswa ke-$awal <br>";
    $awal++;
}

echo "<br>";
// do...while

$dw = 11;
do {
    echo "Mahasiswa ke-$dw <br>";
    $dw++;
} while ($dw <= 20);

echo "<br>";
// foreach
$is63 = array("andi", "budi", "citra", "dina", "fira");
foreach($is63 as $data) {
    echo "$data <br>";
}
?>