<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['uuid', 'firstname', 'lastname', 'username', 'email', 'password'];
    protected $primaryKey = 'id';

    public function login($username, $password)
    {
      $session = \Config\Services::session();
      $query = $this->where("username", $username)->first();
      if ($query) {
        if (password_verify($password, $query['password'])) {
          $userdata = [
                  'firstname'  => $query['firstname'],
                  'lastname' => $query['lastname'],
                  'username'  => $query['username'],
                  'email' => $query['email'],
                  'logged_in' => TRUE
          ];
          $session->set($userdata);
          return true;
        }
      }
      $session->setFlashdata('error', 'Wrong username or password!');
      return false;
    }
}
