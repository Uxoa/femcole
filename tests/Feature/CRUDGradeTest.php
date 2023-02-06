<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Grade;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDGradeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_listGradesAppearInHomeViewForATeacher()
    {
        $this->withExceptionHandling();

        $grades = Grade::factory(2)->create();
        $grade = $grades[0];
    }
}
