<?php
    include_once('partials/header.php');
?>
    <main>
        
        <section class="container">
        <?php
        $about_object = new About();
        $about = $about_object->select();
        
        for ($i = 0; $i < count($about); $i++) {
            $temp_i = $i + 1;
            if ($temp_i % 4 == 1) {
                echo '<div class="row">';
            }

            echo '<div class="col-25 gallery text-white text-center" style="background-image: url(\''.$about[$i]->image.'\');">';
            echo '<a href="">'.$about[$i]->name.'</a>';
            echo '</div>';

            if ($temp_i % 4 == 0 || $temp_i == count($about)) {
                echo '</div>'; // Close row after every four items or at the end
            }
        }
        ?>
        </section>  
    </main>

<?php
    include_once('partials/footer.php');
?>