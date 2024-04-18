<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User; // Import the User model

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test unauthenticated access to /api/products endpoint.
     */
    public function test_unauthenticated_access_to_products_endpoint()
    {
        $response = $this->get('/api/products');

        $response->assertStatus(401); // Expecting Unauthorized status code
    }

    /**
     * Test authenticated access to /api/products endpoint.
     */
    public function test_authenticated_access_to_products_endpoint()
    {
        $user = User::factory()->create(); // Use the factory method on the User model
        $token = $user->createToken('TestToken');

        $plainTextToken = Str::of($token->plainTextToken);

        $response = $this->withHeader('Authorization', 'Bearer ' . $plainTextToken)->get('/api/products');

        $response->assertStatus(200); // Expecting OK status code
        // Add more assertions as needed to test the response data
    }
}
