<?php

use person as GlobalPerson;

class person {
  public $name;
  public $email;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
}

$person1 = new person();
$person1->set_name('Abdullah Al Noman');
$person1->set_email('nomann.info@gmail.com');
echo "Name: " . $person1->get_name();
echo PHP_EOL;
echo "Email: " . $person1->get_email();
?>