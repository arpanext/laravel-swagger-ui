<?php

namespace Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles;

use Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $id)
    {
        $console = (object) Config::get('vendor.arpanext.swagger.consoles.index')[$id];
        
        return view('Arpanext/Swagger/Consoles::consoles.show', [
            'console' => $console,
        ]);
    }
}
