<?php

namespace bng\Controllers;

use bng\Controllers\BaseController;
use bng\Models\Agents;

class Main extends BaseController
{
    // =======================================================
    public function index()
    {
        // check if there is no active user in session
        if (!check_session()) {
            $this->login_frm();
            return;
        }

        $data['user'] = $_SESSION['user'];

        $this->view('layouts/html_header');
        $this->view('navbar', $data);
        $this->view('homepage', $data);
        $this->view('footer');
        $this->view('layouts/html_footer');
    }

    // =======================================================
    // LOGIN
    // =======================================================
    public function login_frm()
    {
        // check if there is already a user in the session
        if (check_session()) {
            $this->index();
            return;
        }

        // check if there are errors (after login_submit)
        $data = [];
        if (!empty($_SESSION['validation_errors'])) {
            $data['validation_errors'] = $_SESSION['validation_errors'];
            unset($_SESSION['validation_errors']);
        }

        // check if there was an invalid login
        if (!empty($_SESSION['server_error'])) {
            $data['server_error'] = $_SESSION['server_error'];
            unset($_SESSION['server_error']);
        }


        // display login form
        $this->view('layouts/html_header');
        $this->view('login_frm', $data);
        $this->view('layouts/html_footer');
    }

    // =======================================================
    public function login_submit()
    {
        // check if there is already an active session
        if (check_session()) {
            $this->index();
            return;
        }

        // check if there was a post request
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }

        // form validation
        $validation_errors = [];
        if (empty($_POST['text_username']) || empty($_POST['text_password'])) {
            $validation_errors[] = "Username e password são obrigatórios.";
        }

        // get form data
        $username = $_POST['text_username'];
        $password = $_POST['text_password'];

        // check if username is valid email and between 5 and 50 chars
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $validation_errors[] = 'O username tem que ser um email válido.';
        }

        // check if username is between 5 and 50 chars
        if (strlen($username) < 5 || strlen($username) > 50) {
            $validation_errors[] = 'O username deve ter entre 5 e 50 caracteres.';
        }

        // check if password is valid
        if (strlen($password) < 6 || strlen($password) > 12) {
            $validation_errors[] = 'A password deve ter entre 6 e 12 caracteres.';
        }

        // check if there are validation errors
        if (!empty($validation_errors)) {
            $_SESSION['validation_errors'] = $validation_errors;
            $this->login_frm();
            return;
        }

        $model = new Agents();
        $result = $model->check_login($username, $password);

        if (!$result['status']) {

            // logger
            logger("$username - Login Inválido", 'error');

            // invalid login
            $_SESSION['server_error'] = 'Login Inválido';
            $this->login_frm();
            return;
        }

        // logger
        logger("$username - Login com sucesso");

        // load user information to the session
        $results = $model->get_user_data($username);

        // add user to session
        $_SESSION['user'] = $results['data'];

        // update the last login
        $update_last_login = $model->set_user_last_login($_SESSION['user']->id);

        // go top the main page
        $this->index();
        return;
    }

    public function logout()
    {
        if (!check_session()){
            $this->index();
            return;
        }

        // logger
        logger($_SESSION['user']->name . ' - fez logout');

        // clear user from session
        unset($_SESSION['user']);

        // go to index (login form)
        $this->index();
    }
}

/*
admin@bng.com - Aa123456
agente1@bng.com - Aa123456
agente2@bng.com - Aa123456
*/