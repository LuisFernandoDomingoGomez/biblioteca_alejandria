<?php

namespace Tests\Unit;

use Tests\TestCase;

class AuthorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $res = $this->put('/author/1', [
            'name' => 'Fernando Gomez'
        ]);

        $res->assertStatus(301);
        $res->dd();
    }
}