<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class LoginTest extends TestCase
{

  public function testLogin()
  {
    $this->withoutMiddleware();
    $response = $this->call('POST', '/login', [
    'email' => '101624317@student.swin.edu.au',
    'password' => bcrypt('123123')
    ]);
    if($response->assertRedirect('/'))
    {
      echo "Test Login: SUCCESS \n";
    }
  }
}
