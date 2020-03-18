<?php
include('config1.php');
?>

<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $enrolment = $_POST['enrollment'];
 $username = $_POST['username'];
 $age = $_POST['age'];
 $course = $_POST['course'];
 $branch = $_POST['branch'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `details` (enrollment,name, age, course, branch, contact, email) 
    VALUES ('$enrolment','$username', '$age', '$course','$branch','$contact', '$email')";
    mysqli_query($conn, $sql);
}
else{
    echo "Welcome Guest";
}
?>