<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Consoles;

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
        return view('Arpanext/SwaggerUi::consoles.show', [
            'id' => $id,
        ]);
    }
}
