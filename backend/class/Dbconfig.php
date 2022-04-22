        <?php

        /* Hieronder bevind zich de database connectie 
        Door middel van een functie. 
        In de functie word er geprobeerd om connectie te maken. 
        Zodra dat niet goed gaat door wat dan ook dan word een bericht getoont 
        dat de connectie niet goed is.*/

        class Dbconfig
        {

            protected $conn;
            public function connect()
            {
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=project_register", "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;
                } catch (PDOException $e) {
                    echo 'Connection failed: ' . $e->getMessage();
                }
            }
        }



        ?> 