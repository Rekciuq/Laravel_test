<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    public function addUrl(Request $request): object|string
    {
        if(!self::UrlValidation($request->url)) {
            return 'Please provide correct url';
        }
        $newUrl = Url::create($request->only(['url']));

        return self::MakeObjectToResponse($newUrl->id);
    }

    public static function UrlValidation($url): bool|int
    {
        static $regex = '^(http|https)://(www.)?[a-zA-Z0-9@:%.\+~#?&//=]{2,256}.[a-z]{2,6}\b([-a-zA-Z0-9@:%.\+~#?&//=]*)??^';
        return preg_match($regex, $url);
    }

    public static function MakeObjectToResponse(int $id): object
    {
        $response = new \stdClass();
        $response->id = $id;

        return (object) [
            "response" => $response
        ];
    }
}
