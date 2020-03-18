<?php
include('config1.php');
?>
<?php $id=$_GET['id'];
?>

<?php
    $sql = "SELECT * FROM `details` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $enrolment = $data['enrollment'];
    $username = $data['name'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
    $enrolment = $_POST['enrollment'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `details` SET enrollment='$enrolment',name='$username', age='$age',course='$course',branch='$branch', contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit1.php?id=<?php echo $id ?>" method="post">
      Enrolment: <input type="text" name="enrollment" value="<?php echo $enrolment; ?>"placeholder="Enter enrollment"><br>
      Name: <input type="text" name="username" value="<?php echo $username; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      course: <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Enter course"><br>
      branch: <input type="text" name="branch" value="<?php echo $branch; ?>" placeholder="Enter branch"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter contact"><br>
      Email: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter email"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>
