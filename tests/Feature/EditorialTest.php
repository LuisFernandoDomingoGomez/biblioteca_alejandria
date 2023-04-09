<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditorialControllerTest extends TestCase
{

    public function testEditorialRegistration()
    {
        $editorialData = [
            'name' => 'Olimpo',
        ];

        $response = $this->post('/editorials', $editorialData);

        $response->assertStatus(201);
        $response->dd();
    }
}
