<?php

namespace App\Http\Controllers\Api\Image;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class GetController extends Controller
{
    public function __invoke($filename)
    {
        $path = storage_path('app/public/' . $filename);
        if (!File::exists($path)) {
            abort(404);
        }
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
