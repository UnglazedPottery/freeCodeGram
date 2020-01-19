<?php

namespace Tests\Feature;

use App\User;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PostsTest extends TestCase
{

    use RefreshDatabase;    //migrate your database cause empty database in testing

    /** @test */
    public function only_logged_in_user_can_see_make_post_page()
    {
        $response = $this->get('/p/create')     //will redirect to login when trying to go to make post page
            ->assertRedirect('/login');

    }

    /** @test */
    public function authenticated_user_can_see_make_post_page()
    {
        $this->actingAs(factory(User::class)->create());    //make a random user

        $response = $this->get('/p/create')                 //can go to make post page
            ->assertOk();

        $response->assertSee('Add New Post');
        $response->assertSee('<h1>Add New Post</h1>');
        $response->assertSee('<button class="btn btn-primary">Add New Post</button>');

    }

    
    public function a_post_can_be_added_through_the_form()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());    //make a random user

        $response = $this->post('/p', [             //make post with test data
            'caption' => 'test post',
            'image' => '/private/var/folders/6q/qgdx9n4n1tjbzz30jfrzwn300000gn/T/phpBQ9Eqf',         
            'user_id' => 1,                      
        ]);
        
        //'image' => '/private/var/folders/6q/qgdx9n4n1tjbzz30jfrzwn300000gn/T/phpBQ9Eqf'
        //UploadedFile::fake()->image('avatar.jpg');
        $this->assertCount(1, Post::all());
    }
}