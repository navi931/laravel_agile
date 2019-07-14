<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TasksApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetReturnsOk()
    {
        //arrange

        //act
        $response = $this->get('/api/tasks');

        //assert
        $response->assertStatus(200);

    }
    public function testGetReturnsJSON()
    {
      //arrange
      $api_json = [
        'data' =>
        [
          'tasks' => []
        ]
      ];

      //act
      $response = $this->get('/api/tasks');

      //assert
      $response->assertJson($api_json);
    }
}
