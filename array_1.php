<?php
$people = array("kode_barang"=>["A001","A002","A003"],
                "nama_barang"=>["Jaket","Hoodie","Sweeter"],
                "Harga"=>[45000,50000,40000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            // echo "\n";
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>