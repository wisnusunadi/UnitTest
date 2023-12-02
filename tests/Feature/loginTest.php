<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HalamanLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('login');
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('type="submit"', false);
    }
    public function test_LoginBenar()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }
    public function test_LoginSalah()
    {
        $response = $this->post('/login', [
            'email' => 'tes@gmail.com',
            'password' => '22222222',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/');
    }
}
