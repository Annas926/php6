<?php
//PHP Function
function tampilkan_nama(){
    echo "Nama saya malas ngoding";

} 
tampilkan_nama();
//String Function
$nama = "muhammad raden iqbal hafidz fauzi";
echo $nama;
echo '</br>';
echo strtoupper($nama);
echo '</br>';
echo ucwords($nama);
echo '</br>';
echo lcfirst($nama);
echo '</br>';
echo strtolower($nama);
   
//Function void
function salam($nama) {
    echo "<h2> Assalamu'alaikum".strtoupper($nama)."</h2>";
}
 
salam("ali");
salam("fadil");
salam();

//Function define By User :: return value
function jumlah($a , $b){
    return $a + $b;
}

echo '$a + $b= ' .jumlah(2,8);

//Function define By User :: void
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "perkenalkan, nama saya bedu/> ";
    echo "senang belenalan dengan anda<br/>";
}
 //memanggil fungsi yang sudah dibuat
 perkenalan();

 echo "<hr/>";

 //memanggil lagi
 perkenalan();

//membuat fungsi 
function perkenalan($nama, $salam){
    echo $salam.",";
    echo " perkenalkan, nama saya ".$nama."<br/>";
    echo " senang berkenalan dengan anda <br/>";

}
//memanggil fungsi yang sudah dibuat 
perkenalan("usro", "hai");

echo "<hr/>";

$saya = "bedu";
$ucapansalam = "selamat pagi";

//memanggilnya lagi
perkenalan($saya, $ucapansalam);

//membuat fungsi 
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo " perkenalkan, nama saya ".$nama."<br/>";
    echo " senang berkenalan dengan anda <br/>";
}
//memanggil fungsi yang sudah dibuat 
perkenalan("jarwo", "hai");

echo "<hr>";

$saya = "bambang";
$ucapansalam = "selamat pagi";

//memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);

//membuat fungsi 
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "umur saya adalah ". hitungumur(2003,2022) ." tahun";
 
//membuat fungsi 
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
 function perkenalan($nama, $salam="Assalamualaikum"){
 echo $salam.",";
    echo " perkenalkan, nama saya ".$nama."<br/>";
    //memanggil fungsi lain 
    echo "saya berusia ". hitungumur(1994,2015) ."tahun<br/>";
    echo "senang berkenalan dengan anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("ardiantara");


function faktorial($angka){
    if ($angka < 2){
        return 1;
    } else{
        return ($angka * faktorial($angka-1));
    }
}

//memanggilfungsi 
echo "faktorial 5 adalah " . faktorial(5);

//////////////////Variable local Function
funtion pangkatdua($a){
    $a = $a * $a;
}
$a = 20;
echo 'sebelum nilai $a :'.$a;
pangkatdua($a);
echo '<br/>sesudah nilai $a :'.$a;



////////Variable global
function pangkatdua($a){
    global $a;
    $a = $a * $a;
}
$a = 20;
echo 'sebelum nilai $a :'.$a;
pangkatdua($a);
echo '<br/>sesudah nilai $a :'.$a;

?>