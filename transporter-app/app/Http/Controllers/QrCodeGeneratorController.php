<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGeneratorController extends Controller
{
    public function generate() {
        $qrCode = QrCode::size(200)->generate('https://www.meme-arsenal.com/memes/9403835694bf12631c77d734ef584a6f.jpg');

        return view('qr-codes', compact('qrCode'));

    }
}
