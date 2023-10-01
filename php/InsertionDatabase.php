<?php
// Handle the form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $companyName = $_POST['company-name'];
  $contactName = $_POST['contact-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $submissionDate = date('Y-m-d H:i:s'); // Get the current date and time

  // Perform any additional processing or database operations as needed
  // ...

  // Return a response indicating success
  echo 'Form submitted successfully!';
} else {
  // Return an error response
  http_response_code(400);
  echo 'Invalid request.';
}
?>