<?php
function open_database(){
$mysqli = new mysqli("localhost", "root", "", "penjualan");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
return $mysqli;
}

function insert($tabel,$field){
   global $konek;
   $a="insert into ".$tabel." (";
   $j=count($field)-1;
   $n=0;
   foreach ($field as $key => $value) {
      $a .= $key;
      if ($n<$j) {$a.=",";};
      $n++;
   }
   $a.=") values (";
   $n=0;
   foreach ($field as $key ) {
      $a .= "'".$key."'";
      if ($n<$j) {$a.=",";};
      $n++;
   }
   $a.=")";
   $hsl=$konek->query($a);
   return $hsl;
}

function delete($tabel,$where) {
   global $konek;
   $a="delete from ".$tabel." where ".$where;
   $hsl=$konek->query($a);
   return $hsl;
}

function update($tabel,$field,$where) {
   global $konek;
   $a="update ".$tabel." set ";
   $j=count($field)-1;
   $n=0;
   foreach ($field as $key => $value) {
      $a .= $key."='".$value."'";
      if ($n<$j) {$a.=",";};
      $n++;
   }
   $a.=" where ".$where;
   $hsl=$konek->query($a);
   return $hsl;
}
?>