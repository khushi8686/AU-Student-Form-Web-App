<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "air_university"; 

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {

    // Get form data
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $birthdate = $_POST['birthdate'];
    $address_line_1 = $_POST['address-line-1'];
    $address_line_2 = $_POST['address-line-2'];
    $city = $_POST['city'];
    $state_province = $_POST['state-province'];
    $zip_postal = $_POST['zip-postal'];
    $country = $_POST['country'];
    $degree_name = $_POST['degree-name'];
    $degree_type = $_POST['degree-type'];
    $credits_required = $_POST['credits-required'];
    $course_list = $_POST['course-list'];
    $prerequisites = $_POST['prerequisites'];

    // Insert student information into database
    $sql = "INSERT INTO student_info (first_name, last_name, birthdate, address_line_1, address_line_2, city, state_province, zip_postal, country, degree_name, degree_type, credits_required, course_list, prerequisites)
            VALUES ('$first_name', '$last_name', '$birthdate', '$address_line_1', '$address_line_2', '$city', '$state_province', '$zip_postal', '$country', '$degree_name', '$degree_type', '$credits_required', '$course_list', '$prerequisites')";

    if (mysqli_query($conn, $sql)) {
        echo "Student information inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}

?>
