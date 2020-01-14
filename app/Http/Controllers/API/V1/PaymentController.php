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

    /**
     * Este método tem como objetivo procesar uma requisição para pagamento de conta
     * Gerando uma nova instancia de Payment para o usuario
     */
    public function payAccount(Request $request, PaymentService $service)
    {
        $request->validate([
            'payment_id' => 'required|string'
        ]);

        $payment_id = $request->get('payment_id');
        $payment = $service->show($payment_id);

        if (! $payment) {
            return response()->json([
                'statue' => false,
                'message' => 'Pagamento não encontrado'
            ], 404);
        }

        $paid = $service->payAccount($payment);

        if ($paid) {
            return response()->json([
                'statue' => true,
                'message' => 'Pagamento realizado com sucesso'
            ], 200);
        }

        return response()->json([
            'statue' => false,
            'message' => 'Não foi possivel realizar o pagamento'
        ], 500);

    }
}
