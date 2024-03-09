<?php
namespace Azuriom\Plugin\Shop\Payment\Method;

use Azuriom\Plugin\Shop\Cart\Cart;
use Azuriom\Plugin\Shop\Models\Payment;
use Azuriom\Plugin\Shop\Payment\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

$apikey = '';
$secretkey = '';

$access_token = $apikey.':'.$secretkey;

$curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-sbx.dlocalgo.com/v1/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => json_encode($dados),  // DATOS DE LA COMPRA
        CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        'content-type: application/json',
        'Authorization: Bearer '.$access_token
    ),
    ));
    $response = curl_exec($curl);
    $resultado = json_decode($response);
    //var_dumb($response);
curl_close($curl);