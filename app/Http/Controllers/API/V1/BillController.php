<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Bill;
use App\Http\Requests\BillRequest as Request;
use App\Services\BillService;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BillService $service)
    {
        $paginate = true;
        $result = $service->index($paginate);
        return response()->json($result);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, BillService $service)
    {
        $data = $request->all();
        $newBill = $service->store($data);
        if ($newBill) {
            return response()->json($newBill, 201);
        }

        return response()->json([
            'status' => false,
            'message' => 'Não foi possivel adicionar nova conta'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        if ($bill) {
            return response()->json($bill);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Conta não encontrado'
        ], 404);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        $data = $request->all();

        $bill->update($data);

        return response()->json($bill);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
    }
}
