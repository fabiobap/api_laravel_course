<?php

namespace Models;

use App\Models\UserAction\Comment;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function test_comment_factory(): void
    {
        $this->loggedInUser();

        Comment::factory(1)->create();

        $this->assertDatabaseCount('comments', 1);
    }

    public function test_comment_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Comment::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
