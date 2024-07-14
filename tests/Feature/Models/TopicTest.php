<?php

namespace Models;

use App\Models\Course\Topic;
use Tests\TestCase;

class TopicTest extends TestCase
{
    public function test_topic_factory(): void
    {
        $this->loggedInUser();

        Topic::factory(1)->create();

        $this->assertDatabaseCount('topics', 1);
    }

    public function test_topic_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Topic::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
