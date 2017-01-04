<?php

namespace Drupal\my_hello_world\Controller;

class MyHelloWorldController {
  public function hello() {
    return array(
      "#title" => "my hello world!",
      "#markup" => "this is content"
    );
  }
}
