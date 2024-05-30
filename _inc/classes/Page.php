<?php

    class Page{

        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            echo '<link rel="stylesheet" href="../assets/css/style.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            echo '<link rel="stylesheet" href="../assets/css/footer.css">';
        
            // $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
            
            switch($this->page_name){
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
            /**
         * Generuje odkazy na JS súbory pre pätu stránky
         *
         * Táto funkcia generuje odkazy na základné JS súbory a pridáva odkazy na špecifické
         * JS súbory podľa názvu aktuálnej stránky. Odkazy sú vložené na koniec body tagu.
         *
         * @return void
         */
        function add_scripts(){
            echo('<script src="../assets/js/main.js"></script>');
            // $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($this->page_name){
            case 'home':
                echo('<script src="../assets/js/slider.js"></script>');
                break;
            case 'question':
                echo('<script src="../assets/js/accardion.js"></script>');
                break;  
            }
            
        }
    }

?>