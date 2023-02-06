<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Grade;
use App\Models\User;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /* public function test_listGradeAppearInHomeViewByAdmin(){
        $this->withoutExceptionHandling();

        $grades = Grade::factory()->create();

        $users = User::factory(3)->create(['user_id'=>$grades->id]);

        $readUsers = $grades->users;

        $this->assertCount(3, $readUsers);
        $this->assertTrue($users->contains($readUsers->first()));

    } */

    public function test_readGradeCRUD(){
        $this->withExceptionHandling();

        $users = User::factory()->create();
        $user = $users[0];
        $grades = Grade::factory()->create();
        $grade = $grades[0];

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response=$this->get(route('showUser', $user->id));
        $response->assertSee($user->name, $grade->subject);
        $response->assertStatus(200)
                ->assertViewIs('showUser');

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response=$this->get(route('homeTeacher', $user->id, $grade->subject));
        $response->assertSee($user->name, $grade->subject);
        $response->assertStatus(200)
                ->assertViewIs('home');

        /* $response->assertSee($user->name);

        $grades = Grade::factory()->create();
        $grade = $grades[0];

        $response = $this->get('/homeTeacher');

        $response->assertSee($user->name, $grade->subject);

        $response->assertStatus(200)
                ->assertViewIs('home'); */
    }

    /* public function test_aGradeCanBeDeletedByAdmin(){
        $this->withExceptionHandling();

        $grade = Grade::factory()->create(['user_id'=>3, 'grade'=>7, 'trimester'=>2, 'subject'=>'Historia', 'exam'=>3, 'schoolYear'=>2023]);
        $this->assertCount(1, Grade::all());

        $response = $this->delete(route('deleteGrade', $grade->user_id));
        $this->assertCount(0, Grade::all());
    } */
}
