<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{

    public function testCategoryRegistration()
    {
        $categoryData = [
            'name' => 'Botanica',
        ];

        $response = $this->post('/category', $categoryData);

        $response->assertStatus(201);
        $response->dd();
    }
}
