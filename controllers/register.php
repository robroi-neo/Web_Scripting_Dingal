<?php


$heading = "Register";

$config = require base_path('config.php');
$db = new Database($config);

$allowedGenders = ['male', 'female', 'other'];
$allowedHobbies = ['reading', 'music', 'sports', 'travel'];
$allowedCountries = ['ph', 'us', 'uk', 'ca'];

$registered = false;
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!Validator::string($_POST['full_name'] ?? '', 1, 255)) {
        $error['full_name'] = "Full Name is required";
    }
    if (!Validator::string($_POST['email'] ?? '', 1, 255)) {
        $error['email'] = "Email is required";
    }
    if (!Validator::string($_POST['username'] ?? '', 1, 255)) {
        $error['username'] = "Username is required";
    }
    if (!Validator::string($_POST['password'] ?? '', 1, 255)) {
        $error['password'] = "Password is required";
    }
    if (!Validator::string($_POST['confirm_password'] ?? '', 1, 255)) {
        $error['confirm_password'] = "Password is required";
    }

    if (!Validator::compareStrings($_POST['password'] ?? '', $_POST['confirm_password'] ?? '')) {
        $error['confirm_password'] = "Passwords do not match";
    }

    if (!Validator::inArray($_POST['gender'] ?? null, $allowedGenders)) {
        $error['gender'] = "Required field";
    }

    if (!Validator::arrayInArray($_POST['hobbies'] ?? null, $allowedHobbies)) {
        $error['hobbies'] = "Please select at least one hobby.";
    }

    if (!Validator::select($_POST['country'] ?? null, $allowedCountries)) {
        $error['country'] = "Please select a valid country.";
    }

    if (!empty($error)) {
        $_POST = [];
    } else {
        try {
            $db->beginTransaction();

            // Insert into users
            $db->query("
        INSERT INTO users (full_name, email, username, password, country, gender)
        VALUES (:full_name, :email, :username, :password, :country, :gender)
    ", [
                ':full_name' => $_POST['full_name'],
                ':email' => $_POST['email'],
                ':username' => $_POST['username'],
                ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ':country' => $_POST['country'],
                ':gender' => $_POST['gender']
            ]);

            $user_id = $db->lastInsertId();

            // Insert hobbies
            $hobbies = $_POST['hobbies'] ?? [];

            foreach ($hobbies as $hobbyName) {
                $hobbyName = strtolower($hobbyName);

                if (in_array($hobbyName, $allowedHobbies)) {
                    $stmt = $db->query("SELECT hobby_id FROM hobbies WHERE hobby_name = :hobby", [
                        ':hobby' => $hobbyName
                    ]);

                    $hobby_id = $stmt->fetchColumn();


                    if ($hobby_id) {
                        $db->query("
                    INSERT INTO user_hobbies (user_id, hobby_id)
                    VALUES (:user_id, :hobby_id)
                ", [
                            ':user_id' => $user_id,
                            ':hobby_id' => $hobby_id
                        ]);
                    }
                }
            }

            $registered = true;
            $_POST = [];
            $db->commit();
        } catch (Exception $e) {
            $db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }
    if ($registered) {
        "<script>
                alert('Register Succesful!');
              </script>";
        header('Location: /login');
        exit;
    }
}


require view('register.view.php');
