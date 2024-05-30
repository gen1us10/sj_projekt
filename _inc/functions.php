<?php 
require('config.php');
/**
 * Generuje odkazy na CSS súbory pre hlavičku stránky
 *
 * Táto funkcia generuje odkazy na základné CSS súbory a pridáva odkazy na špecifické
 * CSS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené priamo do hlavičky HTML.
 *
 * @return void
 */
function add_stylesheet() {
    echo '<link rel="stylesheet" href="../assets/css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    echo '<link rel="stylesheet" href="../assets/css/footer.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
    
    switch($page_name){
        case 'home':
            echo '<link rel="stylesheet" href="../assets/css/slider.css">';
            break;
        case 'contact':
            echo '<link rel="stylesheet" href="../assets/css/contact.css">';
            echo '<link rel="stylesheet" href="../assets/css/back.css">';
            break;
        case 'about':
            echo '<link rel="stylesheet" href="../assets/css/gallery.css">';
            break;
        case 'question':
            echo '<link rel="stylesheet" href="../assets/css/accardion.css">';
            echo '<link rel="stylesheet" href="../assets/css/back.css">';
            break;
        case 'thankyou':
            echo '<link rel="stylesheet" href="../assets/css/back.css">';
            break;
    }
}

function add_scripts(){
    echo('<script src="../assets/js/main.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'home':
        echo('<script src="../assets/js/slider.js"></script>');
        break;
    case 'question':
        echo('<script src="../assets/js/accardion.js"></script>');
        break;  
    }
    
}
function generate_menu(array $pages): string{
    $menuItems = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
    
    // Prechádza všetky položky v zadanom zozname stránok a URL adries
    foreach($pages as $page_name => $page_url){
        // Pre každú stránku pridá odkaz do navigačného menu
        $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
    }

    // Vráti vygenerovaný HTML kód pre navigačné menu
    return $menuItems;
}

/**
 * Generuje HTML kód pre posuvníkové snímky s obrázkami a nadpisami.
 *
 * @param array $headings Pole s nadpismi pre jednotlivé snímky
 * @param string $img_folder Cesta k adresáru so súbormi obrázkov
 * @return void
 */

function redirect_homepage(){
    header("Location: templates/home.php");
    die("Nepodarilo sa nájsť Domovskú stránku");
}


?>