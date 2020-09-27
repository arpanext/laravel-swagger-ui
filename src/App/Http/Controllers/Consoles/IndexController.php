<?php

namespace Arpanext\SwaggerUiLpkg\App\Http\Controllers\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('Arpanext/SwaggerUiLpkg::consoles.index');
    }
}
