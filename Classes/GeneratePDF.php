<?php

namespace Classes;
use mikehaertl\pdftk\PDF;

class GeneratePDF{

    public function generate($data, $FN, $LN, $clientID){
        $filename = 'Audenthalt_' .$FN.'_'.$LN.'_'.$clientID. '.pdf';
        $pdf = new PDF('./Application.pdf');
        $pdf->fillForm($data)

        ->saveAs('./completed/' . $filename);

        return $filename;
    }
    public function generatevolmacht($data2, $FN, $LN, $clientID){
        $filename = 'Vollmacht_' .$FN.'_'.$LN.'_'.$clientID. '.pdf';
        $pdf = new PDF('./Vollmacht.pdf');
        $pdf->fillForm($data2)

        ->saveAs('./vollmacht/' . $filename);

        return $filename;   
    }
}

?>