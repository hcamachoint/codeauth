<?php namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
  public function profile()
  {
    $model = new UserModel();
    $user = $model->find(session()->id);
    return view('user/profile', ['user' => $user]);
  }

  public function update()
  {
    $model = new UserModel();
    if ($this->request->getMethod() == 'get') {
      $user = $model->find(session()->id);
      $data = [
        'firstname' => $user['firstname'],
        'lastname' => $user['lastname']
      ];
			return view('user/update', ['user' => $data]);
		}else {
      if ($this->validate([
        'firstname' => ['label' => 'Firstname', 'rules' => 'required|alpha|min_length[3]|max_length[30]'],
        'lastname' => ['label' => 'Lastname', 'rules' => 'required|alpha|min_length[3]|max_length[30]']
	    ])){
        $data = [
          'firstname' => $this->request->getVar('firstname'),
          'lastname' => $this->request->getVar('lastname'),
        ];
        if ($model->update(session()->id, $data)) {
          return redirect()->route('user-profile');
        }
      }else {
        return view('user/profileUpdate');
      }
    }
  }

  public function security()
  {
    return view('user/security');
  }

  public function password()
  {
    if ($this->validate([
				'password' => ['label' => 'Password', 'rules' => 'required|min_length[6]|max_length[100]'],
				'password_confirm' => ['label' => 'Password Confirm', 'rules' => 'required|min_length[6]|max_length[100]|matches[password]']
    ])){
      $model = new UserModel();
      if ($model->passChange(session()->id, password_hash($this->request->getVar('password'), PASSWORD_BCRYPT))) {
        return redirect()->route('user-security')->with('success', 'Password changed!');
      }
    }else {
      return redirect()->route('user-security');
    }
  }

  public function disconnect()
  {
    $model = new UserModel();
    try {
      $model->delete(session()->id);
      $session->destroy();
      return redirect()->route('user-login');
    } catch (\Exception $e) {
      return redirect()->route('user-profile')->with('error', $e);
    }
  }
}
