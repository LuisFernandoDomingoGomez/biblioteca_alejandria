<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $res = $this->post('/category', [
            'name' => 'Informatica 2'
        ]);

        $res->assertStatus(201);
        $res->dd();
    }
}