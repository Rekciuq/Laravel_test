<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\UrlController;

class ParseUrlTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_ParseUrl_is_working_properly()
    {
        $title = UrlController::ParseUrl('https://www.speedrun.com/');
        $this->assertTrue($title === 'Home - Speedrun');
    }
}
