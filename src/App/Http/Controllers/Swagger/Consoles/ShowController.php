<?php

namespace Arpanext\Swagger\Consoles\App\Http\Controllers\Swagger\Consoles;

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
        return view('Arpanext/Swagger/Consoles::consoles.show', [
            'id' => $id,
        ]);
    }
}
