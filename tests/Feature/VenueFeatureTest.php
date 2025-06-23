<?php

namespace Tests\Feature;

use App\Models\Venue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VenueFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_venue_index_displays_correctly(): void
    {
        $venue = Venue::factory()->create([
            'name' => 'Test Venue',
        ]);

        $response = $this->get('/venues');
        $response->assertStatus(200);
        $response->assertSee('Test Venue');
    }

    public function test_venue_can_be_created(): void
    {
        $response = $this->post('/venues', [
            'name' => 'New Venue',
            'description' => 'Test Description',
            'address' => 'New Address',
            'location_url' => 'https://maps.example.com/location123',
            'price' => 1000,
            'image_url' => 'http://example.com/image.jpg',
            'capacity' => '1000',
            'url' => 'http://example.com',
        ]);

        $response->assertRedirect('/venues');
        $this->assertDatabaseHas('venues', ['name' => 'New Venue']);
    }

    public function test_venue_show_page_works(): void
    {
        $venue = Venue::factory()->create();
        $response = $this->get('/venues/' . $venue->id);
        $response->assertStatus(200);
        $response->assertSee($venue->name);
    }

    public function test_venue_can_be_updated(): void
    {
        $venue = Venue::factory()->create();
        $response = $this->put("/venues/{$venue->id}", [
            'name' => 'Updated name',
            'description' => $venue->description,
            'address' => 'Updated Address',
            'location_url' => 'https://maps.example.com/location12',
            'price' => $venue->price,
            'image_url' => $venue->image_url,
            'capacity' => '1500',
            'url' => $venue->url,
        ]);

        $response->assertRedirect('/venues');
        $this->assertDatabaseHas('venues', ['name' => 'Updated name']);
    }

    public function test_venue_can_be_deleted(): void
    {
        $venue = Venue::factory()->create();
        $response = $this->delete("/venues/{$venue->id}");
        $response->assertRedirect('/venues');
        $this->assertDatabaseMissing('services', ['id' => $venue->id]);
    }
}
