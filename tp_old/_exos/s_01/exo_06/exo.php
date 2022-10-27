<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

        echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
        echo "<p>DÉBUT</p>";

        $variableA = 15;
        echo "<p>Variable A = " . $variableA . "</p>";

        $variableB = 25;
        echo "<p>Variable B = " . $variableB . "</p>";

        $variableC = 0;
        echo "<p>Variable C = " . $variableC . "</p>";

        $variableD = 0;
        echo "<p>Variable D = " . $variableD . "</p>";


        $variableC = $variableD;
        echo "<p>Variable A = Variable D = " . $variableC . "</p>";

        $variableB = $variableC;
        echo "<p>Variable B = Variable C = " . $variableC . "</p>";

        echo "<p> FIN </p>";

        ?>
    </p>
</form>