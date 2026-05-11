<?php

$status = 500;

$message = match ($status) {
    200, 201 => "Success",
    400, 404 => "Not Found",
    500 => "Server Error",
    default => "Unknown Status",
};

echo $message . "\n";