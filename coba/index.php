<?php
echo "<pre />";
$array =[
   "satu" => 1,
   "dua"  => 200.5,
   "tiga" =>"kucing",
   "empat"=> [
      0,1,2,3
   ],
];
print_r($array);
print_r($array['empat'][3]);
$array ['lima'] = "sapi";

$array []= ['kambing'];
echo "<br />";

//object
class student {
    public $nama;
    public $nim;

    function __construct( $nim,  $nama){
        
    }
    
        
    }

?>