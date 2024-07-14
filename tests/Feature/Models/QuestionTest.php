<?php

namespace Models;

use App\Models\Course\Quiz\Question;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    public function test_question_factory(): void
    {
        $this->loggedInUser();

        Question::factory(1)->create();

        $this->assertDatabaseCount('questions', 1);
    }

    public function test_question_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Question::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
