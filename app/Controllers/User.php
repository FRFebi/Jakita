<?php

namespace App\Controllers;

class User extends BaseController
{
    public function homepage(): string
    {
        return view('homepage');
    }
    public function register()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $db = db_connect();
        $sql = "insert into users (email, password) values(?,?)";
        $db->query($sql, [$email, $password]);
        $db->close();

        $data =  array("email" => $email, "password" => $password);

        return view('register', $data);
    }

    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $db = db_connect();
        $sql = "select password from users where email = ?";
        $data = $db->query($sql, [$email]);
        $row = $data->getRow();
        $db->close();

        if ($row->password == $password) {
            echo "Password matched";
        } else {
            echo "Password not matched";
        }
        return view('login');
    }
}
