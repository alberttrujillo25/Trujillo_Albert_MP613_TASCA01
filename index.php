<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Bloc 1 Tasca 1</title>
    </head>

    <body>
        <?php
            include("dades.php");
            define('MAX_ESTRELLES',5);
            $llegits= 0;
            $no_llegits= 0;
            $suma_valoracions= 0;
            $nombre_llegits= 0;

            echo '<br><h1>Pàgina principal</h1><hr/><br/>';

            echo "<p>Ús de variables i outputs:</p>";

            //ex1.
            foreach($biblioteca as $llibre){
                if($llibre["llegit"]==true){
                    $llegits++;
                }else{
                    $no_llegits++;
                }
            }
            echo "<p>1. Llibres llegits: ". $llegits .". Llibres no llegits: ". $no_llegits ."</p>";

            /*ex2.
            foreach($biblioteca as $llibre){
                if($llibre["llegit"]==true){
                    $suma_valoracions+= $llibre["valoracio"];
                    $nombre_llegits++;
                }
            }
            if($nombre_llegits>0){
                $valoracioMitjana= round($suma_valoracions/$nombre_llegits, 1);
            }else{
                $valoracioMitjana= 0;
            }
            echo "2. Valoració mitjana dels llibres llegits: ". $valoracioMitjana;
            */

            //ex3. Aquí comprovo que les estrelles no superen el màxim.
            foreach($biblioteca as $llibre){
                if($llibre["llegit"]==true){
                    if($llibre["valoracio"]<=MAX_ESTRELLES){
                        $suma_valoracions+= $llibre["valoracio"];
                        $nombre_llegits++;
                    }else{
                        echo "Error: La valoració de ". $llibre["titol"] ." supera les ". MAX_ESTRELLES ." estrelles.<br/>"; 
                    }
                }
            }
            if($nombre_llegits>0){
                $valoracioMitjana= round($suma_valoracions/$nombre_llegits, 1);
            }else{
                $valoracioMitjana= 0;
            }
            echo "2/3. Valoració mitjana dels llibres llegits: ". $valoracioMitjana ."<br/><br/>";

            //ex4.
            echo "4.<br/>";
            var_dump($biblioteca[0]);
            //Serveix per veure l'estructura i contingut de l'array. Mostro només un element perquè tots són iguals.
            echo "<br/><hr/>";
        ?>
        <a href="taula.php">
            <button>Taula</button>
        </a>
        <a href="llista.php">
            <button>Llista</button>
        </a>
    </body>
</html>