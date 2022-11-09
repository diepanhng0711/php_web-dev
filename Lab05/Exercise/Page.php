<?php
    namespace Info;

    class Page {
        private $page;
        private $title;
        private $year;
        private $copyright;
    
        function __construct($title, $year, $copyright)
        {
            $this->page = "";
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }

        private function addHeader() {
            $this->page .= "<!DOCTYPE html>
            <html lang=\"en\">
            <head>
                <meta charset=\"UTF-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <title>$this->title</title>
            </head>";   
        }

        private function addFooter() {
            $this->page .= "</html>";
        }


        public function addContent($inContent) {
            $this->addHeader();
            $this->page .= "<body>
                Title: $this->title
                <br>
                Copyright: $this->copyright
                <br>
                Year: $this->year
                <br>
                Content: $inContent
                <br>    
            </body>";
            $this->addFooter();
        }

        public function get() {
            return $this->page;
        }
        
    }
?>
