<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="true">Ennoncé</a>
    <a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>
    <a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>
    <a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>
    <a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>
</div>
<div id="LabelExercice" justify-content-start>
    <?php
        echo "<title>TP Algo - S". $saison . " - Ex" . $exercice . "</title>";
        $txtPRINCIPALennonce = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');
        $txtPRINCIPALpseudo = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');
        $txtPRINCIPALjs = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');
        $txtPRINCIPALjq = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
        $txtPRINCIPALphp = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php'); 
    ?>
</div>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-ennonce" role="tabpanel" aria-labelledby="nav-ennonce-tab">
        <?php
            echo '<p><textarea id="ENNONCE" name="ENNONCE" rows="6" cols="120">' . $txtPRINCIPALennonce . '</textarea></p>'; 
        ?>      
    </div>
    
    <div class="tab-pane fade" id="nav-pseudo" role="tabpanel"  aria-labelledby="nav-pseudo-tab">
        <?php
            echo '<p><textarea id="PSEUDO" name="PSEUDO" rows="6" cols="120">' . $txtPRINCIPALpseudo . '</textarea></p>'; 
        ?>
    </div>
    
    <div class="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
        <?php
            echo '<p><textarea id="JS" name="JS" rows="6" cols="120">' . $txtPRINCIPALjs . '</textarea></p>'; 
        ?>            
    </div>

    <div class="tab-pane fade" id="nav-jq" role="tabpanel" aria-labelledby="nav-jq-tab">
        <?php
            echo '<p><textarea id="JQ" name="JQ" rows="6" cols="120">' . $txtPRINCIPALjq . '</textarea></p>'; 
        ?>             
    </div>

    <div class="tab-pane fade" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
        <?php
            echo '<p><textarea id="PHP" name="PHP" rows="6" cols="120">' . $txtPRINCIPALphp . '</textarea></p>'; 
        ?>    
    </div>
</div>