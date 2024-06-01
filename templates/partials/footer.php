<footer class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                    <?php
                        $pages = array('Home'=>'home.php',
                        'About us'=>'about.php',
                        'Contact us'=>'kontakt.php',
                        'Question'=>'question.php'  
                        );
                        //echo(generate_menu($pages));
                        $menu_object = new Menu($pages);
                        echo($menu_object->generate_menu());
                    ?>
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
    <?php
       $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
       $page_object = new Page($page_name);
       $page_object->add_scripts();
    ?>
</body>
</html>
