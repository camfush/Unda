<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\User;

class UpdateInfoTest extends TestCase
{

  public function testUpdateName()
  {
    $this->withoutMiddleware();
    $user = factory(User::class)->create();
    $this->actingAs($user)->call('POST', '/account/update/name', [
    'firstname' => 'Specks',
    'lastname' => 'Aha'
    ]);
    if("Specks Aha"==$user->name)
    {
      echo "Test Update Name: SUCCESS \n";
    }
    $this->assertEquals("Specks Aha", $user->name);
  }

  public function testUpdateEmail()
  {
    $this->withoutMiddleware();
    $user = factory(User::class)->create();
    $this->actingAs($user)->call('POST', '/account/update/email', [
    'email' => 'specks@aha.com'
    ]);
    if($user->email=='specks@aha.com')
    {
      echo "\n Test Update Email: SUCCESS \n";
    }
    $this->assertEquals("specks@aha.com", $user->email);
  }
}
