<?php

namespace ZepzonSms\SDK\Tests;

use PHPUnit\Framework\TestCase;

class ZepsonSMS extends TestCase
{
    /** @test */
    public function this_test_must_pass()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function zepsonSms_is_instantiable()
    {
        // $sms = new \ZepzonSms\SMS('username', 'password');
        // $this->assertInstanceOf('\ZepzonSms\SMS', $sms);
        $this->markTestSkipped('Not implemented yet');
    }

    /** @test */
    public function this_test_must_fail_with_exception()
    {
        $this->expectException(\Exception::class);

        $this->markTestSkipped('Not implemented yet');
    }

}
