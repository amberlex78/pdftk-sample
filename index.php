<?php

/*
 * A PDF conversion and form utility based on pdftk.
 * https://github.com/mikehaertl/php-pdftk
 *
 * If pdftk not installed:
 * sudo apt-get install pdftk
 *
 * For test create your PDF document using service:
 * https://www.pdfescape.com/open/
 * Select create a new PDF document.
 * Create document with fields.
 */

include 'vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

// Fill form with data array
//
$pdf = new Pdf('form.pdf');
$pdf->fillForm([
    'customer_number' => '1234-4321',
    'phone_number'    => '(000) 99-88-7777',
])->needAppearances();

if (!$pdf->saveAs('filled.pdf')) {
    echo $pdf->getError();
}
