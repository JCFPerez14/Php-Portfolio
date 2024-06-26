<?php
 
class database{
    function opencon(){
        return new PDO('mysql:host=localhost; dbname=phpcrud', 'root', '');
    }
    
    function check($username, $password) {
        // Open database connection
        $con = $this->opencon();
 
        // Prepare the SQL query
        $query = $con->prepare("SELECT * FROM users WHERE user_name = ?");
        $query->execute([$username]);
 
        // Fetch the user data as an associative array
        $user = $query->fetch(PDO::FETCH_ASSOC);
 
        // If a user is found, verify the password
        if ($user && password_verify($password, $user['user_pass'])) {
            return $user;
        }
 
        // If no user is found or password is incorrect, return false
        return false;
    }
 
    function view() {
        $con = $this->opencon();    
        return $con->query("SELECT 
    users.user_id, 
    users.user_firstname, 
    users.user_lastname, 
    users.user_birthday, 
    users.user_sex,
    users.about_me,
    users.user_email,  
    users.user_name, 
    users.phone_num,
    users.user_profile_picture, 
    CONCAT(user_address.city,' ',user_address.barangay,' ', user_address.street,' ',user_address.province) AS address
FROM 
    users 
INNER JOIN 
    user_address 
ON 
    users.user_id = user_address.user_id;
")->fetchAll();
    }
 
    function viewdata($id) {
        try {
            $con = $this->opencon();
            $query = $con->prepare("SELECT users.user_id, 
            users.user_firstname, 
            users.user_lastname, 
            users.user_birthday, 
            users.user_sex, 
            users.about_me, 
            users.user_name,
            users.phone_num,
            users.user_profile_picture, 
            user_address.street, 
            user_address.barangay, 
            user_address.city, 
            user_address.province 
            from users 
            INNER JOIN user_address ON users.user_id = user_address.user_id 
            WHERE users.user_id = ? ");
            $query->execute([$id]);
            return $query->fetch();
        } catch (PDOException $e) {
            return [];
        }
    }

    function updateUser($id, $firstname, $lastname, $birthday, $sex , $about_me, $phone_num) {
        try {
            $con = $this->opencon();
            $con->beginTransaction();
            /* $query = $con->prepare("UPDATE users SET user_firstname = ?, user_lastname = ?, user_birthday = ?, about_me = ?, user_sex = ? WHERE user_id = ?"); */
            $query = $con->prepare("UPDATE users SET user_firstname = ?, user_lastname = ?, user_birthday = ?, user_sex = ?, about_me = ?, phone_num = ? WHERE user_id = ?");
            $query->execute([$firstname, $lastname, $birthday, $sex, $about_me, $phone_num, $id]);
            $con->commit();
            return true;
        } catch (PDOException $e) {
            $con->rollBack();
            return false;
        }
    }
 
    function updateUserAddress($id, $street, $barangay, $city, $province) {
        try {
            $con = $this->opencon();
            $con->beginTransaction();
            $query = $con->prepare("UPDATE user_address SET street = ?, barangay = ?, city = ?, province = ? WHERE user_id = ?");
            $query->execute([$street, $barangay, $city, $province, $id]);
            $con->commit();
            return true;
        } catch (PDOException $e) {
            $con->rollBack();
            return false;
        }
    }
 
function validateCurrentPassword($userId, $currentPassword) {
    // Open database connection
    $con = $this->opencon();

    // Prepare the SQL query
    $query = $con->prepare("SELECT user_pass FROM users WHERE user_id = ?");
    $query->execute([$userId]);

    // Fetch the user data as an associative array
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // If a user is found, verify the password
    if ($user && password_verify($currentPassword, $user['user_pass'])) {
        return true;
    }

    // If no user is found or password is incorrect, return false
    return false;
}
function updatePassword($userId, $hashedPassword){
try {
    $con = $this->opencon();
    $con->beginTransaction();
    $query = $con->prepare("UPDATE users SET user_pass = ? WHERE user_id = ?");
    $query->execute([$hashedPassword, $userId]);
    // Update successful
    $con->commit();
    return true;
} catch (PDOException $e) {
    // Handle the exception (e.g., log error, return false, etc.)
     $con->rollBack();
    return false; // Update failed
}
}

 function updateUserProfilePicture($userID, $profilePicturePath) {
try {
    $con = $this->opencon();
    $con->beginTransaction();
    $query = $con->prepare("UPDATE users SET user_profile_picture = ? WHERE user_id = ?");
    $query->execute([$profilePicturePath, $userID]);
    // Update successful
    $con->commit();
    return true;
} catch (PDOException $e) {
    // Handle the exception (e.g., log error, return false, etc.)
     $con->rollBack();
    return false; // Update failed
}
 }
 
}