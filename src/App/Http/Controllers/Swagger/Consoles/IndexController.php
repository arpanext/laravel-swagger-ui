<?php

namespace Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles;

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
        dd(Config::get('vendor.arpanext.swagger.consoles.index'));

        return view('Arpanext/Swagger/Consoles::consoles.index', [
            'consoles' => json_decode($consoles),
        ]);
    }
}
