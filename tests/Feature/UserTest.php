<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
//    public function test_homepage_contains_empty_table(): void
//    {
//        $response = $this->get('/users');
//
//        $response->assertStatus(200);
//        $response->assertSee('User list is empty');
//    }

//    public function test_homepage_contains_non_empty_table(): void
//    {
//        $users = User::factory(15)->create();
//        $lastUser =  $users->last();
//
//        $response = $this->get('/users');
//
//        $response->assertStatus(200);
//        $response->assertDontSee('User list is empty');
//
//        $response->assertViewHas('users', function ($collection) use ($lastUser){
//            return $collection->contains($lastUser);
//        });
//    }
}
