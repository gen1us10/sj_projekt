<?php
    include_once('partials/header.php');
?>
    
    <section class="section-form">
        <h1 class="h-pri center">You can write us</h1>

        <form id="contact" action="thankyou.php" method="POST">
            <input type="text" placeholder="Your name" name="name" required><br>
            <input type="email" placeholder="Your email" name="email" required><br>
            <textarea placeholder="Your text" name="message"></textarea><br>
            <input type="checkbox" name="acceptance" value="1" required>
            <label> I consent to the processing of my personal data.</label><br>
            <input type="submit" name="contact_submitted"value="Send" >
          </form>

    </section>
<?php
    include_once('partials/footer.php');
?>