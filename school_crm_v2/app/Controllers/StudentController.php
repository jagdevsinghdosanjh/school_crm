<?php
// app/Controllers/StudentController.php

require_once __DIR__ . '/../Core/Session.php';
require_once __DIR__ . '/../Core/Helpers.php';
require_once __DIR__ . '/../Core/Auth.php';
require_once __DIR__ . '/../Models/Student.php';

class StudentController
{
    private $model;

    public function __construct()
    {
        $this->model = new Student();
    }

    private function adminOnly()
    {
        if (!Auth::check('admin')) {
            Helpers::redirect('/login/admin_login.php');
        }
    }

    public function list()
    {
        $this->adminOnly();
        $students = $this->model->all();
        include __DIR__ . '/../Views/student/list.php';
    }

    public function add()
    {
        $this->adminOnly();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create(
                Helpers::sanitize($_POST['username']),
                Helpers::sanitize($_POST['name']),
                Helpers::sanitize($_POST['email']),
                Helpers::sanitize($_POST['class']),
                $_POST['password']
            );

            Helpers::redirect('/students/student_list.php');
        }

        include __DIR__ . '/../Views/student/add.php';
    }

    public function edit()
    {
        $this->adminOnly();

        $id = intval($_GET['id']);
        $student = $this->model->find($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update(
                $id,
                Helpers::sanitize($_POST['username']),
                Helpers::sanitize($_POST['name']),
                Helpers::sanitize($_POST['email']),
                Helpers::sanitize($_POST['class']),
                $_POST['password'] ?: null
            );

            Helpers::redirect('/students/student_list.php');
        }

        include __DIR__ . '/../Views/student/edit.php';
    }

    public function delete()
    {
        $this->adminOnly();

        $id = intval($_GET['id']);
        $this->model->delete($id);

        Helpers::redirect('/students/student_list.php');
    }

    public function dashboard()
    {
        if (!Auth::check('student')) {
            Helpers::redirect('/login/student_login.php');
        }

        include __DIR__ . '/../Views/student/dashboard.php';
    }
}
