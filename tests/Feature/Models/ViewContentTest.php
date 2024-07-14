<?php

namespace Models;

use App\Models\UserAction\ViewContent;
use Tests\TestCase;

class ViewContentTest extends TestCase
{
    public function test_view_content_factory(): void
    {
        $this->loggedInUser();

        ViewContent::factory(1)->create();

        $this->assertDatabaseCount('view_contents', 1);
    }
}
