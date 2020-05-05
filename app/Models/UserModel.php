<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uuid', 'firstname', 'lastname', 'username', 'email', 'password'];
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function login($username, $password)
    {
      $session = \Config\Services::session();
      $query = $this->where("username", $username)->first();
      if ($query) {
        if (password_verify($password, $query['password'])) {
          if ($query['status'] == 9) {
            $session->setFlashdata('error', 'Your account is banned!');
            return false;
          }else{
            $userdata = [
                    'username'  => $query['username'],
                    'logged_in' => TRUE
            ];
            $session->set($userdata);
            return true;
          }
        }
      }
      $session->setFlashdata('error', 'Wrong username or password!');
      return false;
    }
}
