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

    public function test_aGradeCanBeDeletedByAdmin(){
        $this->withExceptionHandling();

        $grade = Grade::factory()->create();
        $this->assertCount(1, Grade::all());

        $response = $this->delete(route('deleteGrade', $grade->id));
        $this->assertCount(0, Grade::all());
    }
}
