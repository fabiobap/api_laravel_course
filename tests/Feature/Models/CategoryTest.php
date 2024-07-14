<?php

namespace Tests\Feature\Models;

use App\Models\Course\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_category_factory(): void
    {
        Category::factory(1)->create();

        $this->assertDatabaseCount('categories', 1);
    }

    public function test_category_resource_key_is_valid_uuid(): void
    {
        $user = Category::factory(1)->create();
        $this->checkResourceKeyIsValid($user->first()->resource_key);
    }
}
