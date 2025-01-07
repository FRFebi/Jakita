<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Shield\Models\GroupModel;
use CodeIgniter\Shield\Models\UserModel;

class Role extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $groupModel = new GroupModel();

        $data = [
            'users' => $userModel->findAll(),
            'groups' => ['superadmin', 'admin', 'developer', 'user', 'beta']
        ];
        if (!in_array("superadmin", auth()->user()->getGroups())) {
            return view("homepage");
        }
        return view('role', $data);
    }

    public function updateRole()
    {
        $userId = $this->request->getPost('user_id');
        $role = $this->request->getPost('role');

        if ($userId && $role) {
            $model = new UserModel();
            $user = $model->findById($userId);

            if ($user) {
                $user->addGroup($role);
                return redirect()->to('/role')->with('message', 'Role assigned successfully.');
            }
        }

        return redirect()->to('/role')->with('error', 'Failed to assign role.');
    }

    public function removeRole()
    {
        $userId = $this->request->getPost('user_id');
        $role = $this->request->getPost('role');

        if ($userId && $role) {
            $model = new UserModel();
            $user = $model->findById($userId);

            if ($user) {
                $user->removeGroup($role);
                return redirect()->to('/role')->with('message', 'Role removed successfully.');
            }
        }

        return redirect()->to('/role')->with('error', 'Failed to remove role.');
    }
}
