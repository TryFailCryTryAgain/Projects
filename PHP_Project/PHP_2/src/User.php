<?php
interface Authenticate {
    static function authenticate();
}

class User{
    protected string $username;
    protected string $email;
    protected bool $isAdmin;
    
    function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
        $this->isAdmin = false;
    }

    public function isAdmin(): bool {
        return $this->isAdmin;
    }

    static function authenicate() 
    {
        echo "User Authenicated";
    }
}



class Admin extends User {
    private function getUsers() {
        return $users = [
            new User("Alice", "Alice@example.com"),
            new User("Bob", "Bob@example.com"),
            new User("Charlie", "Charlie@example.com"),
            new Admin("Anna", "Anna@example.com"),
            new Admin("Gary", "Gary@example.com")
        ];
    }
}
?>