<?php

namespace Arpanext\Swagger\Consoles\Ui\App\Http\Controllers\Swagger\Consoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

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
        $console = (object) Config::get('vendor.arpanext.swagger.consoles.ui.consoles')[$id];

        return view('Arpanext/Swagger/Consoles/Ui::consoles.show', [
            'console' => $console,
        ]);
    }
}
