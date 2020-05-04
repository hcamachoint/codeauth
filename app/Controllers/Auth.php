<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
	public function profile($id)
  {
		$model = new UserModel();
		$data = [
        'user'  => $model->getProfile($id),
    ];
    return view('/auth/view', $data);
	}

	public function login()
	{
		if ($this->request->getMethod() == 'get') {
			return view('auth/login');
		}else {
			$model = new UserModel();
			if ($model->login($this->request->getVar('email'), $this->request->getVar('password'))) {
				return redirect()->to(base_url().'/home');
			}else {
				return view('auth/login');
			}
		}
	}

	public function logout()
	{
		$session = \Config\Services::session();
		$session->destroy();
		return redirect()->to(base_url().'/auth/login');
	}

	public function register()
	{
		if ($this->request->getMethod() == 'get') {
			return view('auth/register');
		}else {
			$model = new UserModel();
	    if (! $this->validate([
	        'firstname' => 'required|min_length[3]|max_length[30]',
	        'lastname' => 'required|min_length[3]|max_length[30]',
					'email' => 'required|valid_email|is_unique[users.email]|min_length[5]|max_length[100]',
					'password' => 'required|min_length[6]|max_length[100]',
					'password_confirm' => 'required|min_length[6]|max_length[100]|matches[password]'
	    ]))
	    {
					return view('auth/register');
	    }
	    else
	    {
	        $model->save([
	            'firstname' => $this->request->getVar('firstname'),
	            'lastname'  => $this->request->getVar('lastname'),
	            'email'  => $this->request->getVar('email'),
							'password'  => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
							'uuid' => uuid(),
							'status' => 1
	        ]);
					return redirect()->to(base_url().'/auth/login');
	    }
		}
	}
}

function uuid()
{
		return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
				mt_rand(0, 0xffff), mt_rand(0, 0xffff),
				mt_rand(0, 0xffff),
				mt_rand(0, 0x0fff) | 0x4000,
				mt_rand(0, 0x3fff) | 0x8000,
				mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
		);
}
