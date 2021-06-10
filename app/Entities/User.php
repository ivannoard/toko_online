<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    public function setPassword(String $password)
    {
        // Pengaman Ganda
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        $this->attributes['password'] = md5($salt . $password);

        return $this;
    }
}
