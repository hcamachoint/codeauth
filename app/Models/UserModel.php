<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['uuid', 'firstname', 'lastname', 'email', 'password'];

    public function getProfile($id)
    {
      return $this->where(['uuid' => $id])->first();
    }

    public function login($email, $password)
    {
      $query = $this->where("email", $email)->first();
      if ($query) {
        if (password_verify($password, $query['password'])) {
          $session = \Config\Services::session();
          $userdata = [
                  'firstname'  => $query['firstname'],
                  'lastname' => $query['lastname'],
                  'email' => $query['email'],
                  'logged_in' => TRUE
          ];
          $session->set($userdata);
          return true;
        }
      }
      return false;
    }
}
