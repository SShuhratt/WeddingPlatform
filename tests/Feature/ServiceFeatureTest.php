<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_service_index_displays_correctly(): void
    {
        $service = Service::factory()->create([
            'name' => 'Test Service',
        ]);

        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('Test Service');
    }

    public function test_service_can_be_created(): void
    {
        $response = $this->post('/services', [
            'name' => 'New Service',
            'description' => 'Test Description',
            'price' => 1000,
            'image_url' => 'http://example.com/image.jpg',
            'url' => 'http://example.com',
        ]);

        $response->assertRedirect('/services');
        $this->assertDatabaseHas('services', ['name' => 'New Service']);
    }

    public function test_service_show_page_works(): void
    {
        $service = Service::factory()->create();
        $response = $this->get('/services/' . $service->id);
        $response->assertStatus(200);
        $response->assertSee($service->name);
    }

    public function test_service_can_be_updated(): void
    {
        $service = Service::factory()->create();
        $response = $this->put("/services/{$service->id}", [
            'name' => 'Updated Name',
            'description' => $service->description,
            'price' => $service->price,
            'image_url' => $service->image_url,
            'url' => $service->url,
        ]);

        $response->assertRedirect('/services');
        $this->assertDatabaseHas('services', ['name' => 'Updated Name']);
    }

    public function test_service_can_be_deleted(): void
    {
        $service = Service::factory()->create();
        $response = $this->delete("/services/{$service->id}");
        $response->assertRedirect('/services');
        $this->assertDatabaseMissing('services', ['id' => $service->id]);
    }
}
