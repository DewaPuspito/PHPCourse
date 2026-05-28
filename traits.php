<?php

interface Logger {
    public function log(string $message): void;
}

trait Loggable {
    public function log(string $message): void {
        echo "[LOG] " . $message . "\n";
    }
}

class User implements Logger {
    use Loggable;
    public function __construct(public string $name) {}
    public function save():void 
    {
        $this->log("User {$this->name} saved to database.");
    }
}

$user = new User("Alice");
$user->save();