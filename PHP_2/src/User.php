<?php
interface Authenticate {
    static function authenticate();
}

class User {
    protected string $username;
    protected string $email;
    protected bool $isAdmin;
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