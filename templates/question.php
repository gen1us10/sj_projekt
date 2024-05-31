<?php
    include_once('partials/header.php');
?>
    <main>
        <section class="back">
        <div class="container text-white">
            <h1 class="text-white">Our history</h1>
        </div>
    </section>
    <section class="blog">
        
    
    <?php
          $question_object = new Question();
          $question = $question_object->select();
          for ($i=0;$i<count($question);$i++){
            echo '<div class="accordion">';
            echo '<div class="question">'.$question[$i]->question.'</div>';
            echo '<div class="answer">'.$question[$i]->answer.'</div>';
            echo '</div>';
          }
          ?>
    </section>
</main>
<?php
    include_once('partials/footer.php');
?>