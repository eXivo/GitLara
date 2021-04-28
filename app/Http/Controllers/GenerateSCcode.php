<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GenerateSCcode extends Controller
{



    public function ReceiveDataForm(Request $request) {

        $packageID = $request->input('productID');

        $SC_code = $this->getCode($packageID);;



        return view('CodeGenerator', [
            'SC_code' => $SC_code
        ]);

    }

    public function getCode($packageID){


        //Code variables

        $ID = substr($packageID , 2); //last 2 digits of package ID

//        $date = '';
        $date = date('mY');

        $dateMMYY = substr($date, 0, 2) . substr($date, -2, 2); //date of creation mmYY

        $randDigits = rand(1000, 9999); //4 random digits


        //Create the code

        $SC_code = $ID . $dateMMYY . $randDigits;

        return $SC_code;

    }


}
