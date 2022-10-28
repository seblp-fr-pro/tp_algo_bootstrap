<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="true">Ennoncé</a>
    <a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>
    <a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>
    <a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>
    <a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>
</div>

<?php
    echo "<title>TP Algo - S". $saison . " - Ex" . $exercice . "</title>";
    $txtPRINCIPALennonce = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');
    $txtPRINCIPALpseudo = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');
    $txtPRINCIPALjs = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');
    $txtPRINCIPALjq = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
    $txtPRINCIPALphp = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php'); 
?>


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
        <div class="row">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&r=3" method="post">';
                    echo '<p><textarea id="JS" name="JS" rows="6" cols="120">' . $txtPRINCIPALjs . '</textarea></p>'; 
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer JS</button>   
                <button type="button" class="btn btn-success">Executer JS</button>
            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-jq" role="tabpanel" aria-labelledby="nav-jq-tab">
        <div class="row">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&r=4" method="post">';
                    echo '<p><textarea id="JQ" name="JQ" rows="6" cols="120">' . $txtPRINCIPALjq . '</textarea></p>';
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer JQ</button>             
                <button type="button" class="btn btn-success">Executer JQ</button>
            </form>
        </div>
    </div>

    <div class="tab-pane fade" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
        <div class="row">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&r=5" method="post">';
                    echo '<p><textarea id="PHP" name="PHP" rows="6" cols="120">' . $txtPRINCIPALphp . '</textarea></p>'; 
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer PHP</button>
                <button type="button" class="btn btn-success">Executer PHP</button>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['JSForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js',$_POST['JS'],FILE_APPEND);
        echo "JS enregistré";
    }

    if(isset($_POST['JQForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js',$_POST['JQ'],FILE_APPEND);
        echo "JQ enregistré";
    }

    if(isset($_POST['PHPForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exo.php',$_POST['PHP'],FILE_APPEND);
        echo "PHP enregistré";
    }
?>

