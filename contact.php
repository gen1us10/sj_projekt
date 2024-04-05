<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal Football Club</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/accardion.css">
    <link rel="stylesheet" href="css/back.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header class="container main-header">
        <div>
          <a href="index.html">
            <img src="img/logo.png" height="40" alt="Arsenal FC">
          </a>
        </div>
        <nav class="main-nav">
          <ul class="main-menu" id="main-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="question.html">Question</a></li>
              <li><a href="contact.html">Contact</a></li>
          </ul>
          <a class="hamburger" id="hamburger">
              <i class="fa fa-bars"></i>
          </a>
        </nav>
    </header>
    
    <section class="section-form">
        <h1 class="h-pri center">You can write us</h1>
        <form action="thankyou.html">
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
    <footer class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="contact.html">contact us</a></li>
                        <li><a href="question.html">question</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order now</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop arsenal</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                

            </div>
        </div>

    </footer>
    <script src="js/main.js"></script>
    <script src="js/accardion.js"></script>
</body>
</html>