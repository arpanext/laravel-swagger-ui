<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $consoles = (new \Arpanext\SwaggerUi\App\Http\Controllers\Api\Consoles\IndexController)()->content();

        return view('Arpanext/SwaggerUi::consoles.index', [
            'consoles' => json_decode($consoles),
        ]);
    }
}
