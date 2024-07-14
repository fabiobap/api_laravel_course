<?php

namespace Models;

use App\Models\Course\Quiz\Answer;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    public function test_answer_factory(): void
    {
        $this->loggedInUser();

        Answer::factory(1)->create();

        $this->assertDatabaseCount('answers', 1);
    }
}
