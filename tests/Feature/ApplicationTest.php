<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiAuthentication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApplicationTest extends TestCase
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

    public function testAuthenticationApplications()
    {
        $response = $this->get('/api/v1/applications');

        $response->assertStatus(401);
    }

    public function testGetApplications()
    {
        $response = $this->get('/api/v1/applications', self::getToken());

        $response->assertStatus(200);
    }

    public function testCreateApplication() {

        $data = [];

        $response = $this->post('/api/v1/applications', $data, self::getToken());

        $response->assertStatus(422);

        $data = [
            'comment' => 'Comment',
            'freelancer_id' => 1,
            'order_id' => 1
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());

        $response->assertStatus(201);
    }

    private static function getToken() {

        return [ApiAuthentication::API_KEY_HEADER => config('services.api.token')];
    }
}
