<?php

namespace ZepsonSms\SDK\Tests;

use PHPUnit\Framework\TestCase;
use ZepsonSms\SDK\ZepsonSms;

class ZepsonSmsTest extends TestCase
{
    /** @test */
    public function itMustPass()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function zepsonSmsIsInstantiable()
    {
        $sms = new ZepsonSms(['apiKey' => 'ok']);
        $this->assertInstanceOf('ZepzonSms\SDK\ZepsonSms', $sms);
        // $this->markTestSkipped('Not implemented yet');
    }

    /** @test */
    public function itMustFailWithException()
    {
        $this->expectException(\Exception::class);

        $this->markTestSkipped('Not implemented yet');
    }
}
