<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskApiInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testInsertPostReturnsOk()
     {
         //arrange
         $data = ['user_id'=>2994475,'title'=>'title98','description'=>'hola description','status'=>1];

         //act
         $response = $this->json('POST', '/api/tasks',$data);

         //assert
         $response->assertStatus(201);
     }
     public function testInsertIsJson()
     {
         //arrange
         $data = ['user_id'=>2994475,'title'=>'title98','description'=>'hola description','status'=>1];
         $api_json = [
           'data' =>
           [
             'tasks' => []
           ]
         ];
         //act
         $response = $this->json('POST', '/api/tasks',$data);

         //assert
         $response->assertJson($api_json);
     }
     public function testJsonInsertedIsOk()
     {
         //arrange
         $data = ['user_id'=>2994475,'title'=>'title98','description'=>'hola description','status'=>1];
         $api_json = [
           'data' =>
           [
             'tasks' => $data
           ]
         ];
         //act
         $response = $this->json('POST', '/api/tasks',$data);
         //assert
         $response->assertJson($api_json);
         $objeto = json_encode($response->getContent());
     }
     
}
