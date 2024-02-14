<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use Intervention\Image\Facades\Image;
class QrCodeController extends Controller
{
    public function generate(Request $request)
    {
        $message = 'En cette première Saint Valentin ensemble, mon cœur déborde d\'amour pour toi, mon développeur chéri. Si je pouvais être ta machine,
        je serais à tes côtés chaque instant, vibrant au rythme de tes requêtes,
        t\'offrant une performance sans faille.
        Je t\'aime mon cœur, et joyeuse Saint Valentin à mon développeur cheri!

        Par </FULLDEV IVANA>';



        // Générer le code QR avec encodage UTF-8
        $qrcode = QrCode::encoding('UTF-8')->generate($message);







        // Retourner une vue avec l'image du code QR
//return view('qrcode', ['image' => $qrcode]);
         // Retourner une vue avec l'image fusionnée
        //  return view('qrcode', ['image' =>'images/image.jpg']);
        return view('qrcode', [
            'qrCodeImage' => $qrcode,
            'regularImage' => 'images/image.jpg'
        ]);



    }
}













