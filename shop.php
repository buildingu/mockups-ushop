<?php

function processForm() {
  // Retrieve the form data
  $name = $_POST['name'];
  $giftCard = $_POST['gift-card'];

  // Validate the form data
  $errors = array();
  if (empty($name)) {
    $errors[] = "Please enter your name.";
  }
  if (empty($giftCard)) {
    $errors[] = "Please enter your gift card number.";
  }

  // If there are no errors, save the data and redirect to a thank-you page
  if (empty($errors)) {
    // Save the data to a database or file here
    // Redirect to thank-you page
    header("Location: thank-you.php");
    exit;
  }
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  processForm();
}

?>


<!-- Create the modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter your name and gift card</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="gift-card">Gift card:</label>
            <input type="text" class="form-control" id="gift-card">
         



            Try again

          </div>
        </form>
      </div>