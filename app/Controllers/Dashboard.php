<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Redirect to the student list after login
        return redirect()->to('/students');
    }
}
