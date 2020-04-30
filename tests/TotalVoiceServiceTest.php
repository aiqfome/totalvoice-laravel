<?php

namespace Aiqfome\TotalVoiceLaravel\Tests;

use TotalVoice\Client as TotalVoiceClient;

class TotalVoiceServiceTest extends TestCase
{
    /**
     * @test
     */
    public function it_binds_the_client_to_the_container()
    {
        $totalVoiceClient = app('totalvoice');

        $this->assertInstanceOf(TotalVoiceClient::class, $totalVoiceClient);
    }
}
