<?php
    include_once('partials/header.php');
?>
    <main>
        <section class="section-thankyou">
            <h1>Thank you for sending it!</h1>
            <p>Your message has been successfully sent. We will contact you shortly.</p>
            <?php
                  //print_r($_POST);
                  //$conn = db_connection();
                  $contact_object = new Contact();
                  $contact_object->insert();
               ?>
            
        </section>
    </main>
<?php
    include_once('partials/footer.php');
?>