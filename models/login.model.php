<?php
class LoginModel extends Model {
    private $userList;

    public function __construct() {
        parent::__construct();
    }

    public function AddUser($user): void
    {
        $this->userList[] = $user;
    }
    public function authenticate(){

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

       // echo $username;
       // echo $password;
    }

    public function getUserList(): array
    {
        return $this->userList;

    }
}

$users = new User("beni","sampay");
$list[] = $users;

print_r($list);
