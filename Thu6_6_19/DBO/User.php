<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author MOR DEV
 */
class User {

    function User($username, $fullname,$email, $birthday, $avatar) {
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->avatar = $avatar;
    }

    //put your code here
}
