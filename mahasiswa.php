<?php
$json_data=file_get_contents("data.json");
$obj = json_decode($json_data);
echo "nim : "; echo $obj->nim;
echo "<br>";
echo "nama : "; echo $obj->nama;
echo "<br>";
echo "no_hp : "; echo $obj->no_hp;
echo "<br>";
echo "mata_kuliah: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "mata_kuliah: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "mata_kuliah: ";echo $obj->mata_kuliah[2];
?>