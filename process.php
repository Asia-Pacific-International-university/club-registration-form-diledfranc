<?php
// Club Registration Form Processing
// TODO: Add your PHP processing code here starting in Step 3

/* 
Step 3 Requirements:
- Process form data using $_POST
- Display submitted information back to user
- Handle name, email, and club fields

Step 4 Requirements:
- Add validation for all fields
- Check for empty fields
- Validate email format
- Display appropriate error messages

Step 5 Requirements:
- Store registration data in arrays
- Display list of all registrations
- Use loops to process array data

Step 6 Requirements:
- Add enhanced features like:
  - File storage for persistence
  - Additional form fields
  - Better error handling
  - Search functionality
*/

$name = $_POST["name"];
$email = $_POST["email"];
$club = $_POST["club"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Registration Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you've submitted:</p>
    <ol>
      <li><b>Name: </b><?php echo $name ?></li>
      <li><b>Email: </b><?php echo $email ?></li>
      <li><b>Club: </b><?php echo $club ?></li>
    </ol>
</body>
</html>