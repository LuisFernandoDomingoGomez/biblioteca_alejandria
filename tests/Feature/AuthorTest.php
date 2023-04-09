<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorControllerTest extends TestCase
{
    /**
     * Prueba para editar un autor.
     *
     * @return void
     */
    public function testEditAuthor()
    {
        $res = $this->put('/author/1', [
            'name' => 'Fernando DG'
        ]);

        $response->assertStatus(301);
        $response->assertRedirect('/authors');
        
    }
}
