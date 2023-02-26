<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
    public function forma(){
        return view("skaiciuokle");
    }

    public function rezultatas(Request $request){
       $ugis=$request->ugis;
       $svoris=$request->svoris;

        $kmiRezultatas=$svoris/(($ugis/100)**2);

        if ($kmiRezultatas < 18.5) {
            $reiksme="Jūsų svoris yra <b style='font-size: 20px;font-style: italic'> per mažas</b>";
        }

        if ($kmiRezultatas >= 18.5 && $kmiRezultatas < 25) {
            $reiksme="Jūsų svoris yra <b style='font-size: 20px;font-style: italic'> normalus</b>";
        }

        if ($kmiRezultatas >= 25 && $kmiRezultatas < 30) {
            $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> viršsvorį</b>";
        }

        if ($kmiRezultatas >= 30 && $kmiRezultatas < 35) {
            $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> I laipsnio nutukimą</b>";
        }

        if ($kmiRezultatas >= 35 && $kmiRezultatas < 40) {
            $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> II laipsnio nutukimą</b>";
        }

        if ($kmiRezultatas >= 40) {
            $reiksme="Jūsų turite <b style='font-size: 20px;font-style: italic'> III laipsnio nutukimą</b>";
        }

        return view("rezultatas",[
            'ugis'=>$ugis,
            'svoris'=>$svoris,
            'kmiRezultatas'=>round($kmiRezultatas,2),
            'reiksme'=>$reiksme

        ]);
    }
}
