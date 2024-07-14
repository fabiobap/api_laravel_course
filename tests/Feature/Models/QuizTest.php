<?php

namespace Models;

use App\Models\Course\Quiz\Quiz;
use Tests\TestCase;

class QuizTest extends TestCase
{
    public function test_quiz_factory(): void
    {
        $this->loggedInUser();

        Quiz::factory(1)->create();

        $this->assertDatabaseCount('quizzes', 1);
    }

    public function test_quiz_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Quiz::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
