<?php

namespace Models;

use App\Models\Course\Category;
use App\Models\Course\Content\TextContent;
use Tests\TestCase;

class TextContentTest extends TestCase
{
    public function test_text_content_factory(): void
    {
        TextContent::factory(1)->create();

        $this->assertDatabaseCount('text_contents', 1);
    }

    public function test_text_content_resource_key_is_valid_uuid(): void
    {
        $user = TextContent::factory(1)->create();
        $this->checkResourceKeyIsValid($user->first()->resource_key);
    }
}
