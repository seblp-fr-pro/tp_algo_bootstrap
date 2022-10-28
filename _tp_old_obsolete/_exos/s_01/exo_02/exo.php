<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

        echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
        echo "<p>DÉBUT</p>";

        $variableA = 51;
        $variableB = 34;
        $variableC = $variableA + $variableB;


        echo "<p>Variable A = ".$variableA."</p>";
        echo "<p>Variable B = ".$variableB."</p>";
        echo "<p>Variable C = ".$variableC."</p>";

        $variableA = 21;
        echo "<p>Variable A = ".$variableA."</p>";

        $variableC = $variableB + $variableA;
        echo "<p>Variable C = ".$variableC."</p>";

        echo "<p> FIN </p>";

        ?>
    </p>
</form>