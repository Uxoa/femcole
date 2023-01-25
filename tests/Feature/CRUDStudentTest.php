<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
 

class CRUDStudentTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_listStudentAppearInHomeView(){
        $this->withExceptionHandling();

        $students = Student::factory(2)->create();
        $student = $students[0];

        $response = $this->get('/');
        $response -> assertSee($student->studentName);
        $response ->assertStatus(200)
                  ->assertViewIs('home');
        

    }
    public function test_aStudentCanBeDeleted(){
        $this->withExceptionHandling();

        $student = Student::factory()->create();
        $this->assertCount(1,Student::all());
        $response = $this->delete(route('deleteStudent',$student->id));
        $this->assertCount(0,Student::all());


}
}