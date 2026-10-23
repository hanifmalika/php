<?php
    // $buah=["Apel", "Semangka","Pisang", "Kedondong"];

    // echo $buah[0];
    // echo $buah[1];
    // echo $buah[2];

    //Array Asosiatif
    // $mahasiswa = ["nama" => "aditya","umur" =>24, "hobi" => "Main game", "warna"=>"Biru"];

    // echo $mahasiswa["nama"];
    // echo $mahasiswa["warna"];

    //Array Multidimensi (Array didalam array)

    $mahasiswa = [
        ["aditya",24,"Informatika"],
        ["fakhri",25,"Manajemen"],
        ["rey",26, "Multimedia"]];

    echo $mahasiswa[2][2];//Memanggil multimedia

    //gabungan array Asosiatif dan Multimedia
        $mahasiswa = [[
        "nama" => "aditya",
        "umur" =>24, 
        "jurusan" =>"Informatika"
        ],
        [
        "nama" => "fakhri",
        "umur" =>25, 
        "jurusan" =>"Manajemen"
        ],
        [
        "nama" => "rey",
        "umur" =>26, 
        "jurusan" =>"Multimedia"
        ]
    ];

    echo $mahasiswa[2]['jurusan'];//Memanggil multimedia
?>