<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Support\Facades\View;

class ViewTest extends TestCase
{

  public function testViews()
  {
    $views = [
      'account.account',
      'account.myvideos',
      'account.notifications',
      'account.settings',
      'auth.passwords.email',
      'auth.passwords.reset',
      'auth.login',
      'auth.register',
      'comments.show',
      'errors.404',
      'friends.friends',
      'friends.show',
      'layouts.footer',
      'layouts.head',
      'layouts.header',
      'layouts.master',
      'layouts.sidebar',
      'notifications.show',
      'posts.create',
      'posts.search',
      'posts.show',
      'upload.upload',
      'guest',
      'main'
    ];
    echo "\n Testing Views: \n";
    foreach($views as $view)
    {
      if(View::exists($view))
      {
        echo 'Test '.$view." view: SUCCESS \n";
          $this->assertTrue(true);
      }
      else
      {
          echo $view." view not found \n";
          $this->assertTrue(false);
      }
    }
  }
}
