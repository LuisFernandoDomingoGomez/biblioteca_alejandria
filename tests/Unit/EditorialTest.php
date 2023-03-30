<?php

namespace Tests\Unit;

use Tests\TestCase;

class EditorialTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $res = $this->post('/editorials', [
            'name' => 'Utvt'
        ]);

        $res->assertStatus(201);
        $res->dd();
    }
}