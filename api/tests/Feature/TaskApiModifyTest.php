<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TasksApiModifyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testPutReturnsOk()
     {
         //arrange
         $id = 1;
         //act
         $response = $this->put('/api/tasks/'.$id);

         //assert
         $response->assertStatus(201);

     }
     public function testModifyIsJson()
     {
         //arrange
         $id = 1;
         $api_json = [
           'data' =>
           [
             'tasks' => []
           ]
         ];
         //act
         $response = $this->json('PUT', '/api/tasks/'.$id);

         //assert
         $response->assertJson($api_json);
         $objeto = json_encode($response->getContent());
     }
}
