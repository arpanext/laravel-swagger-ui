<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Api\Hub;

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
        $urls = file_get_contents(url("/api/v1/swagger/schemas"));

        return $urls;
    }
}
