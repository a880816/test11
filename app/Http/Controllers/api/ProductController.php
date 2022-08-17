<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\payment;
use App\Models\paymentDetail;
use App\Models\product;
use App\Models\user;
use Illuminate\Http\Request;
use PaymentDetails;

class ProductController extends Controller
{
    public function findAllProducts() {

        return response()->json(product::all());
    }

    public function findAllPayments() {
    
        return response()->json(payment::all());
    }

    public function createPayment($paymentVo) {
        $userName = $paymentVo['userName'];

        $user = user::select('user_id', 'userName', 'phone')->where('user_id', $paymentVo['user_id'])->first();

        if (!isset($user) && !empty($user)) {
            $newPayment = new Payment;
            $newPayment->orderPrice = $paymentVo['orderPrice'];
            $newPayment->orderStatus = $paymentVo['orderStatus'];
            $newPayment->save();

            $input['orderInfo']= json_encode($paymentVo['orderInfo']);

            $newPaymentDetail = new PaymentDetail;
            $newPaymentDetail->payment_id = $newPayment['payment_id'];
            $newPaymentDetail->user_id = $paymentVo['user_id'];
            $newPaymentDetail->orderInfo = $paymentVo['orderInfo'];
            $newPaymentDetail->save();
            echo '{$userName}的一筆訂單已建立';
        } else {
            echo '查無此使用者：{$paymentVo["userName"]}';
        }
    }

    public function findPaymentDetail($payment_id, $user_id) {
        $paymentDetail = paymentDetail::leftJoin('payments', 'payments.payment_id', '=', 'paymentDetails.payment_id')
                                        ->select(
                                                'paymentDetails.payment_id',
                                                'paymentDetails.user_id',
                                                'paymentDetails.orderInfo',
                                                'payments.orderPrice',
                                                'payments.orderStatus',
                                                'payments.create_at'
                                                )
                                        ->where('payment_id', $payment_id)
                                        ->first();
        if (strcmp($paymentDetail['user_id'], $user_id)) {
            return response()->json($paymentDetail);
        } else {
            $user = user::select('user_id', 'userName', 'phone')->where('user_id', $user_id)->first();

            echo '使用者：{$user["userName"]} 無此訂單查詢權限';
        }
    }
}
