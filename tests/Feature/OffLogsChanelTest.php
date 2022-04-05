<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class OffLogsChanelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShouldSendLog()
    {
        Log::error('errorerrorerror');
        Log::debug('debug debug debug');
//        $response->assertStatus(200);
        $this->assertTrue(true);
    }
}
