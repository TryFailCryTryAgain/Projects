<?php
interface Authenticate {
    static function authenticate();
}

class User {
    protected string $username;
    protected string $email;
    protected bool $isAdmin;

    public function __construct($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalide email format"
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAdmin($isAdmin) {
        $this->isAdmin = False;
    }

}




class Admin extends User {
    private function getUsers() {
        return $users = [
            new User("Alice", "Alice@example.com"),
            new User("Bob", "Bob@example.com"),
            new User("Charlie", "Charlie@example.com"),
            new Admin("Anna", "Anna@example.com"),
            new Admin("Gary", "Gary@example.com"),
        ];
    }

    public function __construct($username, $email, $isAdmin) {
        $this->username = $username;
        $this->email = $email;
        $this->isAdmin = True;
    }
}
?>