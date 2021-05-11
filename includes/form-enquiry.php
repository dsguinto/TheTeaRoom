<form method="POST" action="">
    <div class="form-row">
        <input class="half-input" type="text" name="fname" placeholder="First Name" required>
        <input class="half-input" type="text" name="lname" placeholder="Last Name" required>
    </div>
    <div class="form-row">
        <input class="full-input" type="text" name="email" placeholder="Email" required>
    </div>
    <div class="form-row">
        <textarea class="full-input" name="enquiry" placeholder="Your Message Here..." required></textarea>
    </div>
    <div class="form-row">
        <button class="submit-button" type="submit" name="submit">Submit</button>
    </div>
</form>

<?php
    $admin_email = get_option('admin_email');

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname =  $_POST['lname'];
        $email =  $_POST['email'];
        $enquiry =  $_POST['enquiry'];

        $subject = "The Tea Room: Enquiry from " . $fname . " " . $lname . " (" . $email . ")";
        
        $message = $enquiry;

        $headers[] = 'Content-Type: text/html; charset=UTF-8';

        if (wp_mail($admin_email, $subject, $message, $headers))
        {
            $message = "Your message has been sent! We will get back to you as soon as possible.";
        }
        else{
            $message =  "There seems to be an error, unfortunately your message did not go through. Please try again later.";
        }

    }
?>

<div class="row">
    <h2 style="text-align:center"> <?php echo $message ?> </h2>
</div>