<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pajak;
class PajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    {
//         buatlah fungsi post untuk menghitung share revenue ojek online food.
// Input :
// - harga_sebelum_markup : number (misal 10000)
// - markup_persen : number (misal 10 / 20 / 25)
// - share_persen : number (misal 20)
// Output Json :
// - net_untuk_resto
// - share_untuk_ojol
                $markup = new markup();
                $markup->harga_sebelum_markup = 10000;
                $markup->markup_persen = 10;
                $markup->share_persen = 20;
                $markup->hitung();
                $markup->hitung_share();
                $markup->hitung_net();
                $markup->hitung_share_ojol();
                $markup->hitung_net_ojol();
                $markup->hitung_share_food();
                $markup->hitung_net_food();
                $markup->hitung_share_online();
                $markup->hitung_net_online();
                $markup->hitung_share_food_online();
                $markup->hitung_net_food_online();
                $markup->hitung_share_resto();
                $markup->hitung_net_resto();
                $markup->hitung_share_resto_online();
                $markup->hitung_net_resto_online();
                $markup->hitung_share_resto_food();
                
            
            }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
