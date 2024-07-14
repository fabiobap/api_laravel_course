<?php

namespace Models;

use App\Models\Course\Course;
use Tests\TestCase;

class CourseTest extends TestCase
{
    public function test_course_factory(): void
    {
        $this->loggedInUser();

        Course::factory(1)->create();

        $this->assertDatabaseCount('courses', 1);
    }

    public function test_course_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Course::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
