<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssignmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetIndex()
    {
        $response = $this->get("/assignments");

        $response->assertStatus(200);
        $response->assertViewHas("assignments");
    }

    public function testGetShow()
    {
        $id = 1;
        $response = $this->get("/assignments/$id");

        $response->assertStatus(200);
        $response->assertViewHas("assignment");
    }

    public function testGetEdit()
    {
        $id = 1;
        $response = $this->get("/assignments/$id/edit");

        $response->assertStatus(200);
        $response->assertViewHas("assignment");
    }

    public function testGetCreate()
    {
        $response = $this->get("/assignments/create");

        $response->assertStatus(200);
    }

    public function testCreateAssignment()
    {
        $token = csrf_token();
        $name = "bob";
        $url = "https://images4.persgroep.net/rcs/ElZF1l4u47v3nUSuzK6oZGj9EK4/diocontent/137099491/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.9";
        $description = "bob";

        $response = $this
                        ->withSession(["_token" => $token])
                        ->post(
                            "/assignments",
                            [
                                "_token" => $token,
                                "name" => $name,
                                "url" => $url,
                                "description" => $description,
                            ]
                        );

        $this->assertDatabaseHas(
            "assignments",
            [
                "name" => $name,
                "url" => $url,
                "description" => $description,
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect("/");
    }
}
