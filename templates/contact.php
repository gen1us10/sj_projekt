<?php
    include_once('partials/header.php');
?>
    
    <section class="section-form">
        <h1 class="h-pri center">You can write us</h1>
        <form action="thankyou.php">
            <label for="name">Meno:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Správu:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <label for="phone">Telefon:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                placeholder="For example, 123-45-678" required>

            <button type="submit">Odoslať</button>
        </form>
    </section>
<?php
    include_once('partials/footer.php');
?>