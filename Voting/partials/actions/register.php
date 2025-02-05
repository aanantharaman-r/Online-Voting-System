<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$Cpassword = $_POST['Cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

if ($password != $Cpassword) {
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
} else {
    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "INSERT INTO userdata (username, mobile, password, photo, standard, status, votes) VALUES ('$username', '$mobile', '$password', '$image', '$std', 0, 0)";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '<script>
        alert("Registration successful");
        window.location="../";
        </script>';
    } else {
        echo '<script>alert("Error in registration");</script>';
    }
}
?>