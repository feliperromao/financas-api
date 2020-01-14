<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Payment;
use App\Services\PaymentService;
use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{

    public function index(Request $request, PaymentService $service)
    {
        $paginate = true;
        $query = $request->all();

        $result = $service->index($paginate, $query);
        return response()->json($result);
    }


    public function store(PaymentRequest $request, PaymentService $service)
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


    public function show(Payment $payment)
    {
        if ($payment) {
            return response()->json($payment);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Pagamento não encontrado'
        ], 404);
    }


    public function update(PaymentRequest $request, Payment $payment)
    {
        $data = $request->all();

        $payment->update($data);

        return response()->json($payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
    }
}
