<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class regisTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HalamanRegister()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
        $response->assertSee('login');
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('name="password_confirmation"', false);
        $response->assertSee('type="submit"', false);
    }
    public function test_RegisterBenar()
    {
        $response = $this->post('/register', [
            'name' => 'supriyadi',
            'email' => 'supriyadi@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }
    public function test_RegisterSalah()
    {
        $response = $this->post('/register', [
            'name' => 'supriyadi',
            'email' => 'supriyadi@gmail.com',
            'password' => '12345678',
            'password_confirmation' => '123456789',
        ]);
        $response->assertStatus(302);
    }
}
