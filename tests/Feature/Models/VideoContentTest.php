<?php

namespace Models;

use App\Models\Course\Category;
use App\Models\Course\Content\TextContent;
use App\Models\Course\Content\VideoContent;
use Tests\TestCase;

class VideoContentTest extends TestCase
{
    public function test_video_content_factory(): void
    {
        VideoContent::factory(1)->create();

        $this->assertDatabaseCount('video_contents', 1);
    }

    public function test_video_content_resource_key_is_valid_uuid(): void
    {
        $model = VideoContent::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
