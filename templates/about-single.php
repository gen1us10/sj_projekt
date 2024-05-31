<?php
include_once('partials/header.php');
?> 
        <main>
             
              <section class="container">
                <?php
                    $about_object = new About();
                    $about_single = $about_object->select_single();

                    echo '<h2>'.$about_single->name.'</h2>';
                    echo '<img src="'.$about_single->image.'" width="600"/>';
                    echo '<br><br>';
                    echo '<p>'.$about_single->text.'</p>';
              
                ?>
            </section>   

        </main>
<?php
    include_once('partials/header.php');
?> 