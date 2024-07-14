<?php

namespace Models;

use App\Models\Course\Quiz\Alternative;
use Tests\TestCase;

class AlternativeTest extends TestCase
{
    public function test_alternative_factory(): void
    {
        $this->loggedInUser();

        Alternative::factory(1)->create();

        $this->assertDatabaseCount('alternatives', 1);
    }

    public function test_alternative_resource_key_is_valid_uuid(): void
    {
        $this->loggedInUser();

        $model = Alternative::factory(1)->create();
        $this->checkResourceKeyIsValid($model->first()->resource_key);
    }
}
