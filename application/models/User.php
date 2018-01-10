<?php

class User extends CI_Model {
  public $email;
  public $password;
  public $phoneNumber;

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function subscribe($email, $password, $phoneNumber)
  {
    $instance = [
      'email' => $email,
      'password' => password_hash($password, PASSWORD_BCRYPT),
      'phoneNumber' => $phoneNumber
    ];
    $this->db->insert('users', $instance);
  }

  public function check($email, $password)
  {
    $query = $this->db->get_where('users', ['email' => $email]);
    $user = $query->row();
    if (!$user) {
      return false;
    } else if (!password_verify($password, $user->password))  {
      return false;
    } else {
      return true;
    }
  }
}
