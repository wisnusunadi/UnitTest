<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ubahTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ubahData()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
        $this->assertAuthenticated();

        $response = $this->get('/edit/3');
        $response = $this->post('/update/3', [
            'nama' => 'Bayern Munich',
            'negara' => 'German',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }
}
