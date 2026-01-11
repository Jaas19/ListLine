<?php

namespace App\Services;

interface UserServiceInterface {
    public function checkIfAdminExists();
    public function registerUser($data);
    public function listUsers($excludedUserId = null);
}