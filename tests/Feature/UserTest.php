<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function teste_neu_user_registered()
    {
        $user = User::factory()->create();

        $response = $this->post('/register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        // $response = $this->post('/login', [
        //     'email' => $user->email,
        //     'password' => 'password'
        // ]);

        //$this->assertAuthenticated();

        // $response = $this->get('/users');

        $response->assertStatus(200);
    }
}