<?php

namespace App\Jobs;

use App\Models\Url;
use Exception;
use Goutte\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ParseUrlJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $url = Url::find($this->id);
        $url->title = self::ParseUrl($url->url);
        $url->save();
    }

    public static function ParseUrl(string $url) : ?string
    {
        $client = new Client();

        try {
            $page = $client->request('GET', $url);
        } catch (Exception $e) {
            return 'failed';
        }

        // The URL was parsed successfully
        return $page->filter('title')->text();
    }
}
