<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_user_factory(): void
    {
        User::factory(1)->create();

        $this->assertDatabaseCount('users', 1);
    }

    public function test_user_resource_key_is_valid_uuid(): void
    {
        $user = User::factory(1)->create();
        $this->checkResourceKeyIsValid($user->first()->resource_key);
    }
}
