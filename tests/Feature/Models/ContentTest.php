<?php

namespace Models;

use App\Models\Course\Content;
use Tests\TestCase;

class ContentTest extends TestCase
{
    public function test_content_factory(): void
    {
        $this->loggedInUser();

        Content::factory(1)->create();

        $this->assertDatabaseCount('contents', 1);
    }

    public function test_content_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Content::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
