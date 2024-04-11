<?php 

function add_stylesheet() {
    echo '<link rel="stylesheet" href="css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    echo '<link rel="stylesheet" href="css/footer.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    
    switch($page_name){
        case 'index':
            echo '<link rel="stylesheet" href="css/slider.css">';
            break;
        case 'contact':
            echo '<link rel="stylesheet" href="css/contact.css">';
            echo '<link rel="stylesheet" href="css/back.css">';
            break;
        case 'about':
            echo '<link rel="stylesheet" href="css/gallery.css">';
            break;
        case 'question':
            echo '<link rel="stylesheet" href="css/accardion.css">';
            echo '<link rel="stylesheet" href="css/back.css">';
            break;
        case 'thankyou':
            echo '<link rel="stylesheet" href="css/back.css">';
            break;
    }
}

function add_scripts(){
    echo('<script src="js/main.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'index':
        echo('<script src="js/slider.js"></script>');
        break;
    case 'question':
        echo('<script src="js/accardion.js"></script>');
        break;  
    }
    
}

?>