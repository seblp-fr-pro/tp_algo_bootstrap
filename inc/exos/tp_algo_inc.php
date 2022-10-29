<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <?php
            $number_tab = $_GET['tab'];
            switch($number_tab) {      
                case 2:
                    echo '<a class="nav-item nav-link" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="false">Ennoncé</a>';
                    echo '<a class="nav-item nav-link active" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="true">PseudoCode</a>';    
                    echo '<a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>';
                break;

                case 3:
                    echo '<a class="nav-item nav-link" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="false">Ennoncé</a>';
                    echo '<a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>';    
                    echo '<a class="nav-item nav-link active" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="true">JS</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>';
                break;

                case 4;
                    echo '<a class="nav-item nav-link" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="false">Ennoncé</a>';
                    echo '<a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>';    
                    echo '<a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>'; 
                    echo '<a class="nav-item nav-link active" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="true">JQ</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>'; 
                break;

                case 5;
                    echo '<a class="nav-item nav-link" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="false">Ennoncé</a>';
                    echo '<a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>';    
                    echo '<a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>'; 
                    echo '<a class="nav-item nav-link active" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="true">PHP</a>'; 
                break;
                
                default:
                    echo '<a class="nav-item nav-link active" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="true">Ennoncé</a>';
                    echo '<a class="nav-item nav-link" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="false">PseudoCode</a>';    
                    echo '<a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>'; 
                    echo '<a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>'; 
                break;
            }

            echo "<title>TP Algo - S". $saison . "-Ex" . $exercice . "</title>";
            $txtENNONCE = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');
            $txtPSEUDO = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');
            $txtJS = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');
            $txtJQ = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
            $txtPHP = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php');
        ?>
    </div>
</div>

<div class="row">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-ennonce" role="tabpanel" aria-labelledby="nav-ennonce-tab">
                <?php
                    echo '<form name="ENNONCEForm" action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-ennonce" method="post">';
                    echo '<p><pre id="editorENNONCE" class="myeditor">' . $txtENNONCE . '</pre></p>';
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer Énnoncé</button>
            </form>
        </div>
            
        <div class="tab-pane fade" id="nav-pseudo" role="tabpanel"  aria-labelledby="nav-pseudo-tab">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-js" method="post">';
                    echo '<p><pre id="editorPSEUDO" class="myeditor">' . $txtPSEUDO . '</pre></p>'; 
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer PseudoCode</button>
            </form>
        </div>
            
        <div class="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-js" method="post">';
                    echo '<p><pre id="editorJS" class="myeditor">' . $txtJS . '</pre></p>'; 
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer JS</button>   
                <button type="button" class="btn btn-success">Executer JS</button>
            </form>
        </div>

        <div class="tab-pane fade" id="nav-jq" role="tabpanel" aria-labelledby="nav-jq-tab">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&tab=4#nav-jq" method="post">';
                    echo '<p><pre id="editorJQ" class="myeditor">' . $txtJQ . '</pre></p>';
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer JQ</button>             
                <button type="button" class="btn btn-success">Executer JQ</button>
            </form>
        </div>

        <div class="tab-pane fade" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
                <?php
                    echo '<form name="JSForm" action="?s=' . $saison . '&e=' . $exercice . '&tab=5#nav-php" method="post">';
                    echo '<p><pre id="editorPHP" class="myeditor">' . $txtPHP . '</pre></p>';
                ?>
                <button type="submit" class="btn btn-danger">Enregistrer PHP</button>
                <button type="button" class="btn btn-success">Executer PHP</button>
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['PSEUDOForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt',$_POST['PSEUDOtxt'],FILE_APPEND);
        echo "JS enregistré";
    }

    if(isset($_POST['JSForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js',$_POST['JStxt'],FILE_APPEND);
        echo "JS enregistré";
    }

    if(isset($_POST['JQForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js',$_POST['JQtxt'],FILE_APPEND);
        echo "JQ enregistré";
    }

    if(isset($_POST['PHPForm']))
    {
        file_put_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exo.php',$_POST['PHPtxt'],FILE_APPEND);
        echo "PHP enregistré";
    }
?>

