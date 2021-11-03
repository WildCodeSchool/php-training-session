<?php

namespace App\Model;

class UserModel
{
    private array $testUser;

    public function __construct()
    {
        $this->testUser = [
            'email' => 'tacos@mail.com',
            'password' => password_hash('tacostacos', PASSWORD_DEFAULT),
            'avatar' => 'https://randomuser.me/api/portraits/men/70.jpg',
            'phone' => '(911)-579-9788'
        ];
    }

    // TODO: create a sign in fonction and store the user infos in session
    // use password_verify: https://www.php.net/manual/en/function.password-verify.php

    // TODO: create a sign out fonction and clear the session
}
