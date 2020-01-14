<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Bill;
use App\Http\Requests\BillRequest;
use Illuminate\Http\Request;
use App\Services\BillService;
use App\Http\Controllers\Controller;

class BillController extends Controller
{

    public function index(Request $request, BillService $service)
    {
        $paginate = true;
        $query = $request->all();

        $result = $service->index($paginate, $query);
        return response()->json($result);
    }

    public function store(BillRequest $request, BillService $service)
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


    public function update(BillRequest $request, Bill $bill)
    {
        $data = $request->all();

        $bill->update($data);

        return response()->json($bill);
    }

    public function destroy(Bill $bill)
    {
        $bill->delete();
    }
}
