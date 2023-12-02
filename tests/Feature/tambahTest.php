<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class tambahTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tambahData()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
        $this->assertAuthenticated();


        $response = $this->get('/tambah');
        $response = $this->post('/store', [
            'nama' => 'AC Milan',
            'negara' => 'Italia',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }
}
