<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
  public function profile()
  {
    $session = \Config\Services::session();
    $model = new UserModel();
    $user = $model->getUser($session->get('id'));
    return view('user/profile', ['user' => $user]);
  }

  public function update()
  {
    if ($this->request->getMethod() == 'get') {
			return view('user/update');
		}else {
      if ($this->validate([
        'firstname' => ['label' => 'Firstname', 'rules' => 'required|alpha|min_length[3]|max_length[30]'],
        'lastname' => ['label' => 'Lastname', 'rules' => 'required|alpha|min_length[3]|max_length[30]']
	    ])){
        $session = \Config\Services::session();
        $model = new UserModel();
        $data = [
          'firstname' => $this->request->getVar('firstname'),
          'lastname' => $this->request->getVar('lastname'),
        ];
        if ($model->profileUpdate($session->get('id'), $data)) {
          return redirect()->to(base_url().'/user/profile');
        }
      }else {
        return view('user/profileUpdate');
      }
    }
  }

  public function password()
  {
    if ($this->request->getMethod() == 'get') {
			return view('user/password');
		}else {
      if ($this->validate([
					'password' => ['label' => 'Password', 'rules' => 'required|min_length[6]|max_length[100]'],
					'password_confirm' => ['label' => 'Password Confirm', 'rules' => 'required|min_length[6]|max_length[100]|matches[password]']
	    ])){
        $session = \Config\Services::session();
        $model = new UserModel();
        if ($model->passChange($session->get('id'), password_hash($this->request->getVar('password'), PASSWORD_BCRYPT))) {
          return redirect()->to(base_url().'/user/profile');
        }
      }else {
        return view('user/password');
      }
    }
  }
}
