<?php

use Illuminate\Support\Facades\Route;
use mikehaertl\pdftk\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $pathPDF = public_path('testing.pdf');
    $publicPath = public_path();
//    //dd($publicPath);
//
//    $pdf = new Pdf($pathPDF);
//    $result = $pdf->fillForm([
//        'name' => 'test names'
//    ])
//      ->saveAs($publicPath.'\filled.pdf');
//    if ($result === false) {
//        $error = $pdf->getError();
//
//        var_dump('error: '.$error);
//    }
//
//    var_dump($result);

    $fields = array(
        'name'    => 'My name',

    );

    $pdf = new FPDM($pathPDF);
    $pdf->Load($fields, false); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
    $pdf->Merge();
    return  $pdf->Output('D', 'other2.pdf');


});
