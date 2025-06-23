<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookFeatureTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;

    public function test_books_index_displays_correctly(): void
    {
        $book = Book::factory()->create([
            'title' => 'Test Book',
        ]);

        $response = $this->get('/books');
        $response->assertStatus(200);
        $response->assertSee('Test Book');
    }

    public function test_book_can_be_created(): void
    {
        $response = $this->post('/books', [
            'title' => 'New Book',
            'author' => 'Test Author',
            'description' => 'Test Description',
            'price' => 1000,
            'image_url' => 'http://example.com/image.jpg',
            'url' => 'http://example.com',
        ]);

        $response->assertRedirect('/books');
        $this->assertDatabaseHas('books', ['title' => 'New Book']);
    }

    public function test_book_show_page_works(): void
    {
        $book = Book::factory()->create();
        $response = $this->get('/books/' . $book->id);
        $response->assertStatus(200);
        $response->assertSee($book->title);
    }

    public function test_book_can_be_updated(): void
    {
        $book = Book::factory()->create();
        $response = $this->put("/books/{$book->id}", [
            'title' => 'Updated Title',
            'author' => $book->author,
            'description' => $book->description,
            'price' => $book->price,
            'image_url' => $book->image_url,
            'url' => $book->url,
        ]);

        $response->assertRedirect('/books');
        $this->assertDatabaseHas('books', ['title' => 'Updated Title']);
    }

    public function test_book_can_be_deleted(): void
    {
        $book = Book::factory()->create();
        $response = $this->delete("/books/{$book->id}");
        $response->assertRedirect('/books');
        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }
}
