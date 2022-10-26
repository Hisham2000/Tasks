<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

use function PHPUnit\Framework\isEmpty;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients = Client::find(1);
        // $clients->categories;
        // $clients = json_decode(json_encode($clients),true);
        // $categories = $clients['categories'];

        // for($i = 0; $i < count($categories); $i++)
        // {
        //     $categories[$i]['numUnits'] = 1;

        //     for($j = $i+1; $j< count($categories); $j++)
        //     {
        //         if($categories[$i]['id'] == $categories[$j]['id'])
        //         {
        //             $categories[$i]['numUnits']++;
        //             unset($categories[$j]);
        //             break;
        //         }
        //     }
            
        // }


        // return view('Invoice',['Categories'=>$categories]);
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
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::find($id);
        $clients->categories;
        $clients = json_decode(json_encode($clients),true);
        $categories = $clients['categories'];

        for($i = 0; $i < count($categories); $i++)
        {
            $categories[$i]['numUnits'] = 1;

            for($j = $i+1; $j< count($categories); $j++)
            {
                if($categories[$i]['id'] == $categories[$j]['id'])
                {
                    $categories[$i]['numUnits']++;
                    unset($categories[$j]);
                    break;
                }
            }
            
        }


        return view('Invoice',['Categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        // $clients = Client::find(1);
        // $clients-> Categories;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
