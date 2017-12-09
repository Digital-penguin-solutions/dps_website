<?php include "partials/load.php"; ?>
<?php include "partials/head.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital penguin solutions Home</title>
</head>

<body class="wrapper">

<?php
include "functions/functions.php";
$con             = connect();

include "partials/nav.php";
?>
<!-- Head -->
<section class="c_head">
  <div class="c_head_container">
    <h2><span id="time"></span>, Nice to meat you! Go on an adventure with us. Together we will find a creative solution</h2>
  </div>
</section>

<!-- Form -->
<section class="c_form">
  <div class="c_form_container">

    <h3>Let's discuss your needs, please fill out the form below</h3>

    <form action="">

      <!-- Name -->
      <div class="form">
        <label>Full name</label>
        <div class="form_input">
          <input type="text" name="name" placeholder="Your full name">
        </div>
      </div>

      <!-- E-mail -->
      <div class="form">
        <label>Email Address</label>
        <div class="form_input">
          <input type="text" name="e-mail" placeholder="Your email address">
        </div>
      </div>

      <!-- Name -->
      <div class="form">
        <label>Phone Number</label>
        <div class="form_input">
          <input type="text" name="phone" placeholder="a number we can call you on">
        </div>
      </div>

      <!-- Message -->
      <div class="form">
        <label>Message</label>
        <div class="form_input">
          <textarea name="message"
                    placeholder="please describe your project, the basic idea with an overview of features required"
                    rows="5"></textarea>
        </div>
      </div>

      <button type="submit" value="submit">submit</button>

    </form>
  </div>
</section>

<!--  -->
<section class="c_info">
  <div class="c_info_container">
    <h3>Hello</h3>
    <div class="c_info_links">
      <a href="https://www.instagram.com/digitalpenguins/?hl=en">
        <img src="img/contact/icons/instagram.svg" alt="instagram">
      </a>

      <a href="https://www.facebook.com/Digitalpenguinsolution/">
        <img src="img/contact/icons/facebook.svg" alt="Facebook">
      </a>

      <a href="https://www.behance.net/digitalpenguins">
        <img src="img/contact/icons/behance.svg" alt="behance">
      </a>
    </div>
  </div>
</section>

</body>
</html>
