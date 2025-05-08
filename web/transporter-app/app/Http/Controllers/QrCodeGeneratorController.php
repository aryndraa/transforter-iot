<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGeneratorController extends Controller
{
    public function generate() {
        $qrCode = QrCode::size(200)->generate('https://example.com');

        return view('qr-codes', compact('qrCode'));

    }
}
