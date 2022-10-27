<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

            echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
            echo "<p>DÉBUT</p>";
    
            $variableA = 17;
            $variableB = 0;
                echo "<p>VariableA = ".$variableA."</p>";
            $variableB = $variableA + 2;
                echo "<p>VariableB = " . $variableB . "</p>";
            $variableA = 9;
            echo "<p>VariableA = " . $variableA . "</p>"; 
            echo "<p>VariableB = " . $variableB . "</p>";
    
            echo "<p>FIN</p>";

        ?>
    </p>
</form>