<?php
session_start();

$heading = "Login";

$db = new Database(base_path("notes_mini_app.sqlite"));

$error = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['username'] ?? '', 1, 255)) {
        $error['username'] = "Username is required";
    }
    if (!Validator::string($_POST['password'] ?? '', 1, 255)) {
        $error['password'] = "Password is required";
    }

    if (empty($error)) {
        // Attempt to find user
        $stmt = $db->query("SELECT * FROM users WHERE username = :username", [
            ':username' => $_POST['username']
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($_POST['password'], $user['password'])) {
            "<script>
                alert('Invalid username or password.');
              </script>";
        } else {
            echo "<script>
                alert('Login successful!');
              </script>";
            $_SESSION['full_name'] = $user['full_name'];
            header('Location: /notes');
        }
    }
}

require view('login.view.php');
