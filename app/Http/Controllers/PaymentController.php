<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\PaymentService;
use App\Http\Requests\PaymentRequest as Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PaymentService $service)
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
    public function store(Request $request, PaymentService $service)
    {
        $data = $request->all();
        $newPayment = $service->store($data);
        if ($newPayment) {
            return response()->json($newPayment, 201);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Não foi possivel cadastrar novo pagamento'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        if ($payment) {
            return response()->json($payment);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Pagamenti não encontrado'
        ], 404);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $data = $request->all();

        $payment->update($data);

        return response()->json($payment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        return $payment->delete();
    }
}
