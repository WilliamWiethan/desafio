<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function errorResponse($message = 'Ocorreu um erro desconhecido, tente novamente mais tarde', $code = 500)
    {
        return response()->json([
            'error' => $message
        ], $code);
    }
}
