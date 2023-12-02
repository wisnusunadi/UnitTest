<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_AutentikasiHalaman()
    {
        $response = $this->get('/home');
        $response->assertStatus(302);
        $response->assertSee('login');
        $response->assertRedirect('/login');
    }
    public function test_AksesHome()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }
}
