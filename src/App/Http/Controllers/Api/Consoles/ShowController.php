<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Api\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function __invoke(string $id): JsonResponse
    {
        $urls = [];

        foreach (config('vendor.arpanext.swagger-ui.consoles')[$id] as $schemas) {
            $schemas = file_get_contents($schemas['url']);

            $schemas = json_decode($schemas);            

            $urls = array_merge($urls, array_map(function ($schema) {
                return $schema->url;
            }, $schemas));
        }

        return response()->json($urls);
    }
}
