<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class CRUDUserTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_listUserAppearInHomeViewByAdmin(){
        $this->withExceptionHandling();

        $users = User::factory(2)->create();
        $user = $users[0];

        $response = $this->get('/');
        $response -> assertSee($user->name);
        $response ->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_anUserCanBeDeletedByAdmin(){
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1,User::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteUser',$user->id));
        $this->assertCount(1,User::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteUser',$user->id));
        $this->assertCount(0,User::all());
    }

    public function test_anUserCanBeCreatedByAdmin(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->post(route('storeUser'),
        [
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'password_confirmation' => 'password',
            'surname1'=> 'surname1',
            'surname2' => 'surname2',
            'image' => 'image',
        ]);
        
        $this->assertCount(1, User::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->post(route('storeUser'),
        [
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'password_confirmation' => 'password',
            'surname1'=> 'surname1',
            'surname2' => 'surname2',
            'image' => 'image',
        ]);
        
        $this->assertCount(1, User::all());
    }

    public function test_anUserCanBeUpdated(){
        $this->withExceptionHandling();
        
        $user = User::factory()->create();
        $this->assertCount(1,User::all());

        $response =$this->patch(route('updateUser', $user->id),['name'=>'New Name']);
        $this->assertEquals('New Name', User::first()->name);

    }

    public function test_anUserCanBeShowed(){
        $this->withExceptionHandling();
        $user=User::factory()->create();
        $this->assertCount(1,User::all());
        $response=$this->get(route('showUser', $user->id));
        $response->assertSee($user->name);
        $response->assertStatus(200)->assertViewIs('showUser');
    }

}