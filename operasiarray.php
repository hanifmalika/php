<?php
    $buah = ["Pisang","semangka","jeruk", "Apple","Tomat"];
    $sayur = ["timun", "wortel", "kol","Tomat"];

    $tanaman = array_merge($buah, $sayur);
    $tanaman2 = array_unique($tanaman); //agar tidak double tomatnya
    $tanaman3 = array_diff($buah, $sayur); //pembeda
    $tanaman4 = array_intersect($buah, $sayur); //yang sama

    
    // array_push($buah,"mangga"); //menambhakan mangga di paling kanan
    // array_pop($buah); //menghapus paling kanan

    // echo count($buah); //menghitung berapa array
    // echo implode (", ",$buah ); //melihat isi array dengan koma sebagai pemisah 
    // echo array_search("Pisang", $buah); //melihat di posisi ke-...
    // echo implode(",  " ,$tanaman);
    // echo implode(",  " ,$tanaman3);
    echo implode(",  " ,$tanaman4);

?>
