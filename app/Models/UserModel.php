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

    public function getUser($id)
    {
      $query = $this->find($id);
      return $query;
    }

    public function  passChange($id, $password)
    {
      try {
        $this->update($id, ['password' => $password]);
        return true;
      } catch (\Exception $e) {
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'Something went wrong: '.$e);
        return false;
      }

    }

    public function profileUpdate($id, $data)
    {
      try {
        $this->update($id, ['firstname' => $data['firstname'], 'lastname' => $data['lastname']]);
        return true;
      } catch (\Exception $e) {
        $session = \Config\Services::session();
        $session->setFlashdata('error', 'Something went wrong: '.$e);
        return false;
      }

    }

    public function login($username, $password)
    {
      $session = \Config\Services::session();

      try {
        $query = $this->where("username", $username)->first();
      } catch (\Exception $e) {
        $session->setFlashdata('error', 'Something went wrong: '.$e);
        return false;
      }

      if ($query) {
        if (password_verify($password, $query['password'])) {
          if ($query['status'] == 9) {
            $session->setFlashdata('error', 'Your account is banned!');
            return false;
          }else{
            $userdata = [
                    'id'  => $query['id'],
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
