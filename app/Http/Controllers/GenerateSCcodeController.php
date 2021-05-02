<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class GenerateSCcodeController extends Controller
{

    public function index()
    {
        return view("generator.index");
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'min:4|string'
        ]);

        $packageID = $request->input('product_id');

        $code = $this->getCode($packageID);

        return redirect()->route('generator.show')->with('code', $code);

    }

    public function show()
    {
        if(! session()->has('code'))
            return back();

        $code = session()->get('code');

        return view('generator.store', compact('code'));
    }


    /**
     * @param string $packageID
     * @return string
     */
    private function getCode(string $packageID) : string
    {
        // Code variables
        // ID from Package
        $ID = substr($packageID, 2); //last 2 digits of package ID

        // Date created
        $date = date('mY');
        $date = substr($date, 0, 2) . substr($date, -2, 2); //date of creation mmYY

        // 4 random digits
        $randDigits = rand(1000, 9999); //4 random digits


        // Concat string to code
        return $ID . $date . $randDigits;
    }


}
