<?php

namespace App\Helpers;

use App\Jobs\ParseUrlJob;
use App\Models\Url;

class getUrlByIdHelper {
    public static function getUrlById($id): object|string
    {

        $url = Url::find($id);

        if($url === null) {
            return 'Id is not found in database';
        }

        if($url->title === null && $url->job_id === null) {
            dispatch(new ParseUrlJob($url->id));
            return self::StatusMessage(0,'In progress');
        }
        if($url->title === 'failed') {
            return self::StatusMessage(2,'Page is not working');
        }

        return (object) [
            "status"=> 1,
            "title"=> $url->title
        ];
    }
    public static function StatusMessage(int $status, string $message) {
        return (object) [
            'status'=>$status,
            'message'=>$message
        ];
    }
}

