<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateLanesTest extends TestCase
{
    use DatabaseMigrations;

    protected $lane;

    protected function setUp()
    {
        parent::setUp();

        $this->lane = factory('App\Models\Lane')->create();
    }

    /** @test */
    function guests_may_not_create_lanes()
    {
        $this->json('post', route('lanes.store'))
            ->assertStatus(401);
    }

    /**
     * @test
     *
     * User Story 7
     * Acceptance Criteria 3
     */
    function task_board_must_have_at_least_one_lane()
    {
        $this->signedIn();

        $this->json('get', route('lanes.index'))
            ->assertJsonFragment(['name' => $this->lane->name]);
    }
}
