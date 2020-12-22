<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Api\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $consoles = array_map(function ($key) {
            return [
                'id' => $key,
            ];
        }, array_keys(config('vendor.arpanext.swagger-ui.consoles')));

        return response()->json($consoles);
    }
}
