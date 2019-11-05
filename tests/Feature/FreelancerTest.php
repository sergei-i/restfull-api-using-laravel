<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiAuthentication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FreelancerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->refreshDatabase();
    }

    public function testAuthentication()
    {
        $response = $this->get('/');

        $response->assertStatus(401);
    }

    public function testAuthenticationFreelancers()
    {
        $response = $this->get('/api/v1/freelancers');

        $response->assertStatus(401);
    }

    public function testGetFreelancers()
    {
        $response = $this->get('/api/v1/freelancers', self::getToken());

        $response->assertStatus(200);
    }

    public function testCreateFreelancer() {

        $data = [];

        $response = $this->post('/api/v1/freelancers', $data, self::getToken());

        $response->assertStatus(422);

        $data = [
            'name' => 'Ivan',
            'price' => 300,
            'email' => 'test@gmail.com',
            'phone' => '+792001122334'
        ];

        $response = $this->post('/api/v1/freelancers', $data, self::getToken());

        $response->assertStatus(201);
    }

    private static function getToken() {

        return [ApiAuthentication::API_KEY_HEADER => config('services.api.token')];
    }
}
