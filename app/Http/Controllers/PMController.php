<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use App\Models\Dosen;
use App\Models\Gap;
use App\Models\User;
use App\Models\Hasil;

class PMController extends Controller
{
    public function hitung(Request $request)
    {
        $kompetensi = $request->get('kompetensi');
        $jumlah = $request->get('jumlah');
        $jabatan = $request->get('jabatan');

        if ($kompetensi == '1') {
            $i_jarkom = 5;
            $i_progmob = 0;
            $i_progweb = 0;
            $i_uiux = 0;
            $i_inforsec = 0;
            $i_dataan = 0;
        } else if ($kompetensi == '2') {
            $i_jarkom = 0;
            $i_progmob = 7;
            $i_progweb = 0;
            $i_uiux = 0;
            $i_inforsec = 0;
            $i_dataan = 0;
        } else if ($kompetensi == '3') {
            $i_jarkom = 0;
            $i_progmob = 0;
            $i_progweb = 6;
            $i_uiux = 0;
            $i_inforsec = 0;
            $i_dataan = 0;
        } else if ($kompetensi == '4') {
            $i_jarkom = 0;
            $i_progmob = 0;
            $i_progweb = 0;
            $i_uiux = 6;
            $i_inforsec = 0;
            $i_dataan = 0;
        } else if ($kompetensi == '5') {
            $i_jarkom = 0;
            $i_progmob = 0;
            $i_progweb = 0;
            $i_uiux = 0;
            $i_inforsec = 7;
            $i_dataan = 0;
        } else if ($kompetensi == '6') {
            $i_jarkom = 0;
            $i_progmob = 0;
            $i_progweb = 0;
            $i_uiux = 0;
            $i_inforsec = 0;
            $i_dataan = 7;
        } else {
            $i_jarkom = 0;
            $i_progmob = 0;
            $i_progweb = 0;
            $i_uiux = 0;
            $i_inforsec = 0;
            $i_dataan = 0;
        }

        if ($jumlah == '1') {
            $i_lebih10 = 7;
            $i_kurang10 = 0;
        } else if ($jumlah == '2') {
            $i_lebih10 = 0;
            $i_kurang10 = 6;
        } else {
            $i_lebih10 = 0;
            $i_kurang10 = 0;
        }

        if ($jabatan == '1') {
            $i_wd1 = 7;
            $i_wd2 = 0;
            $i_wd3 = 0;
            $i_dosen = 0;
        } else if ($jabatan == '2') {
            $i_wd1 = 0;
            $i_wd2 = 6;
            $i_wd3 = 0;
            $i_dosen = 0;
        } else if ($jabatan == '3') {
            $i_wd1 = 0;
            $i_wd2 = 0;
            $i_wd3 = 5;
            $i_dosen = 0;
        } else if ($jabatan == '4') {
            $i_wd1 = 0;
            $i_wd2 = 0;
            $i_wd3 = 0;
            $i_dosen = 4;
        } else {
            $i_wd1 = 0;
            $i_wd2 = 0;
            $i_wd3 = 0;
            $i_dosen = 0;
        }

        $h1 = 0;
        $h2 = 0;
        $h3 = 0;
        $nidn1 = 0;
        $nidn2 = 0;
        $nidn3 = 0;
        $dd = Dosen::count();
        for ($x = 1; $x <= $dd; $x++) {
            $dosens = Dosen::where('id', $x)->get();
            foreach ($dosens as $d)
            {
                $nidn = $d->nidn;
                $nama = $d->nama;
                $email = $d->email;
                $jarkom = $d->jarkom;
                $progmob = $d->progmob;
                $progweb = $d->progweb;
                $uiux = $d->uiux;
                $inforsec = $d->inforsec;
                $dataan = $d->dataan;
                $lebih10 = $d->lebih10;
                $kurang10 = $d->kurang10;
                $wd1 = $d->wd1;
                $wd2 = $d->wd2;
                $wd3 = $d->wd3;
                $dosen = $d->dosen;
            }
            $jarkom = $jarkom - $i_jarkom;
            $progmob = $progmob - $i_progmob;
            $progweb = $progweb - $i_progweb;
            $uiux = $uiux - $i_uiux;
            $inforsec = $inforsec - $i_inforsec;
            $dataan = $dataan - $i_dataan;
            $lebih10 = $lebih10 - $i_lebih10;
            $kurang10 = $kurang10 - $i_kurang10;
            $wd1 = $wd1 - $i_wd1;
            $wd2 = $wd2 - $i_wd2;
            $wd3 = $wd3 - $i_wd3;
            $dosen = $dosen - $i_dosen;

            $g_jarkom = Gap::select('value')->where('gap', $jarkom)->get();
            foreach ($g_jarkom as $gjar)
            {
                $h_jarkom = $gjar->value;
            }
            $g_progmob = Gap::select('value')->where('gap', $progmob)->get();
            foreach ($g_progmob as $gmob)
            {
                $h_progmob = $gmob->value;
            }
            $g_progweb = Gap::select('value')->where('gap', $progweb)->get();
            foreach ($g_progweb as $gweb)
            {
                $h_progweb = $gweb->value;
            }
            $g_uiux = Gap::select('value')->where('gap', $uiux)->get();
            foreach ($g_uiux as $gui)
            {
                $h_uiux = $gui->value;
            }
            $g_inforsec = Gap::select('value')->where('gap', $inforsec)->get();
            foreach ($g_inforsec as $ginfor)
            {
                $h_inforsec = $ginfor->value;
            }
            $g_dataan = Gap::select('value')->where('gap', $dataan)->get();
            foreach ($g_dataan as $gdata)
            {
                $h_dataan = $gdata->value;
            }
            $g_lebih10 = Gap::select('value')->where('gap', $lebih10)->get();
            foreach ($g_lebih10 as $glbh)
            {
                $h_lebih10 = $glbh->value;
            }
            $g_kurang10 = Gap::select('value')->where('gap', $kurang10)->get();
            foreach ($g_kurang10 as $gkrg)
            {
                $h_kurang10 = $gkrg->value;
            }
            $g_wd1 = Gap::select('value')->where('gap', $wd1)->get();
            foreach ($g_wd1 as $g1)
            {
                $h_wd1 = $g1->value;
            }
            $g_wd2 = Gap::select('value')->where('gap', $wd2)->get();
            foreach ($g_wd2 as $g2)
            {
                $h_wd2 = $g2->value;
            }
            $g_wd3 = Gap::select('value')->where('gap', $wd3)->get();
            foreach ($g_wd3 as $g3)
            {
                $h_wd3 = $g3->value;
            }
            $g_dosen = Gap::select('value')->where('gap', $dosen)->get();
            foreach ($g_dosen as $gdsn)
            {
                $h_dosen = $gdsn->value;
            }
            $cf1 = ($h_jarkom + $h_progmob + $h_progweb)/3;
            $sf1 = ($h_uiux + $h_inforsec + $h_dataan)/3;
            $kompetensi = ($cf1*0.6) + ($sf1*0.4);
            $cf2 = $h_lebih10;
            $sf2 = $h_kurang10;
            $jumlah_bim = ($cf2*0.7) + ($sf2*0.3);
            $cf3 = ($h_wd1+ $h_wd2 + $h_wd3)/3;
            $sf3 = $h_dosen;
            $jabatan= ($cf3*0.6) + ($sf3*0.4);
            $hasil = ($kompetensi*0.5) + ($jumlah_bim*0.3) + ($jabatan*0.2);
            if ($hasil > $h1) {
                $h3 = $h2;
                $nidn3 = $nidn2;
                $h2 = $h1;
                $nidn2 = $nidn1;
                $h1 = $hasil;
                $nidn1 = $nidn;
              } else if ($hasil > $h2) {
                $h3 = $h2;
                $nidn3 = $nidn2;
                $h2 = $hasil;
                $nidn2 = $nidn;
              } else if ($hasil > $h3){
                $h3 = $hasil;
                $nidn3 = $nidn;
              }
        }
        Hasil::create([
            'nim' => $request->nim,
            'judul' => $request->judul,
            'nidn1' => $nidn1,
            'nidn2' => $nidn2,
            'nidn3' => $nidn3,
        ]);
            $dosen1 = Dosen::where('nidn', $nidn1)->get();
            $dosen2 = Dosen::where('nidn', $nidn2)->get();
            $dosen3 = Dosen::where('nidn', $nidn3)->get();
            return view('\Hasil', compact('dosen1', 'dosen2', 'dosen3'));
    }
}
