<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            $session->set(['user_id' => $user['id'], 'email' => $user['email'], 'logged_in' => true]);
            return redirect()->to('/students');
        }
        return redirect()->back()->with('error', 'Invalid login credentials.');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        $userModel = new UserModel();
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
