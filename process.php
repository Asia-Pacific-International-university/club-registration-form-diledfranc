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

//step 3
// $name = $_POST["name"];
// $email = $_POST["email"];
// $club = $_POST["club"];

$name = $email = $club = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $club = trim($_POST["club"] ?? "");

    //step 4
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($club)) {
        $errors[] = "Club is required.";
    }
}
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
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php if (!empty($errors)): ?>
            <div style="color:red;">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else: ?>
            <p>Here is the information you've submitted:</p>
            <ol>
                <li><b>Name: </b><?php echo htmlspecialchars($name); ?></li>
                <li><b>Email: </b><?php echo htmlspecialchars($email); ?></li>
                <li><b>Club: </b><?php echo htmlspecialchars($club); ?></li>
            </ol>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
