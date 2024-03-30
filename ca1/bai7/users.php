<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * username, password, role, email, name =
 * constructor
 * login 
 * in user
 *  get, set
 */

define("USERNAME", "admin");
define("PASS", "123456");
class Users
{
    public $username;
    public $password;
    public $role;
    public $email;
    public $name;

    function __construct($username, $password, $role, $name, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->email = $email;
        $this->name = $name;
        $this->email = $email;
    }
    function get_username()
    {
        return $this->username;
    }
    function set_username($username)
    {
        return $this->username = $username;
    }
    function xuatThongTin()
    {
        echo "thong tin users";
        echo "username = " . $this->username . "<br/>";
        echo "email = " . $this->email . "<br/>";
        echo "name = " . $this->name . "<br/>";
        echo "-------END------------- <br/>";
    }
    function login($username, $password)
    {
        if ($this->username == $username && $this->password == $password) {
            echo 'dang nhap thanh cong!';
            return true;
        } else {
            echo 'dang nhap that bai';
            return false;
        }
    }
}
$hoang = new Users("hoang", "hoangpk@gmail.com", "user", "hoang", 8);
$hoang->xuatThongTin();
$hoang->set_username("hoang11");
$hoang->xuatThongTin();
$hoang->login("hoang11", "hoangpk@gmail.com");
