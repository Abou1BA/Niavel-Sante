<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostCreationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    use RefreshDatabase;
    public function testPostCreation()
    {
        // Create a new post and save it to the database
        $post = Post::create([
            'title' => 'Sample Post Title',
            'description' => 'Sample Post Description',
            'image' => 'sample_image.jpg',
        ]);
 
        // Retrieve the post from the database and assert its existence
        $createdPost = Post::find($post->id);
        $this->assertNotNull($createdPost);
        $this->assertEquals('Sample Post Title', $createdPost->title);
    }
}
