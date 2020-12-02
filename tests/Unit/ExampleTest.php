<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/api/information');
        $this->assertEquals(200, $response->status());
//        $response->dumpHeaders();
//
//        $response->dumpSession();
//
//        $response->dump();
//        $response->assertStatus(200);
    }
}
