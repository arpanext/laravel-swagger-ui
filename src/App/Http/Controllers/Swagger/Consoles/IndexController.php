<?php

namespace Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles;

use Config;
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
        $consoles = array_map(function ($key) {	
            return (object) [	
                'id' => $key,	
            ];	
        }, array_keys(config('vendor.arpanext.swagger.consoles.index')));

        return view('Arpanext/Swagger/Consoles::consoles.index', [
            'consoles' => $consoles,
        ]);
    }
}
