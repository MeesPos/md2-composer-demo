<?php
// Laad de composer autoloader in

require './vendor/autoload.php';

use Zxing\QrReader;

// Lees de documentatie van de khanamiryan/qrcode-detector-decoder package:
// Zo weet je hoe je deze package kunt gebruiken
// https://github.com/khanamiryan/php-qrcode-detector-decoder/

$qrcode = new QrReader('./qrcode.png');
$text = $qrcode->text(); //return decoded text from QR Code

echo "\nAR CODE = " . $text . "\n\n";

// Je hebt NU dus een "qrcode.png" die je kunt inladen

// Zet de tekst op het scherm die in de QR Code zit!