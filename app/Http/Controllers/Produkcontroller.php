<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Produkcontroller extends Controller
{
    public function index(){
        return view('filebaru');
    }
    public function cek_plat($angka){
        //$angka = 8911;
        if($angka%2==0) $hasil = "Bilangan Genap";
            else $hasil = "Bilangan Ganjil";
        echo $hasil;
    }
    public function form_angka(){
        return view("formAngka");
    }
    public function form_action (Request $request){
        $angka = $request->angka;
        if($angka%2==0) $hasil = "Bilangan Genap";
            else $hasil = "Bilangan Ganjil";
        echo $hasil;
    }
    public function form_tagihan(){
        return view("tagihan");
    }
    public function form_actionTagihan (Request $request){
        $usage = $request->usage;
        if($usage<=25){
            $cost = $usage * 150;
            echo "Total Penggunaan $usage dengan biaya $cost";
        }
        elseif($usage<=50){
            $cost = ($usage-25) * 170 + 3750;
            echo "Total Penggunaan $usage dengan biaya $cost";
        }
        elseif($usage<=75){
            $cost = ($usage-50) * 210 + 3750 + 4350;
            echo "Total Penggunaan $usage dengan biaya $cost";
        }
        else{
            $cost = ($usage-75) * 250 + 3750 + 4350 + 5250;
            echo "Total Penggunaan $usage dengan biaya $cost";
        }
    }
}
