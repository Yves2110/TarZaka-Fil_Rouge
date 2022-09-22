<?php



namespace App\Http\Controllers;



use Barryvdh\DomPDF\PDF;

use Illuminate\Http\Request;



class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF()

    {

        $data = [
            'title' => 'Factures',
            // 'date' => date('m/d/Y')
        ];
        $pdf = PDF::loadView('factures.show', $data);
        return $pdf->download('Factures.pdf')
        ->save(public_path("storage/documents/Factures.pdf"));

    }

}
