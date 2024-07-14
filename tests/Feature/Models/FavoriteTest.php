<?php

namespace Models;

use App\Models\UserAction\Favorite;
use Tests\TestCase;

class FavoriteTest extends TestCase
{
    public function test_favorite_factory(): void
    {
        $this->loggedInUser();

        Favorite::factory(1)->create();

        $this->assertDatabaseCount('favorites', 1);
    }
}
