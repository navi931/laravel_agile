<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TasksApiDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testDeleteReturnsOk()
     {
         //arrange

         //act
         $response = $this->delete('/api/tasks');

         //assert
         $response->assertStatus(201);
     }
     // public function testDeleteReturnsId()
     // {
     //     //arrange
     //
     //     //act
     //     $response = $this->delete('/api/tasks');
     //
     //     //assert
     //     $response->assertStatus(201);
     // }
}
