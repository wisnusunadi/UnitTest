<?php

namespace Tests\Feature;

use App\Models\Club;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class hapusTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_deleteData()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => '12345678',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
        $this->assertAuthenticated();

        $response = Club::create([
            'nama' => 'Persebaya',
            'negara' => 'Indonesia',
        ]);

        $this->post('/hapus/' . $response->id, [
            '_method' => 'DELETE'
        ]);
    }
}
