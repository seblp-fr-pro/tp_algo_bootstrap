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

            // DISPLAY text in files inc/exos/s_xx/exo-xx/exoXXXX.XXX
                // ExoENNONCE
                    $txtENNONCE = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');

                // ExoPSEUDO
                    $txtPSEUDO = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');

                // ExoJS
                    $txtJS = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');

                // ExoJQ
                    $txtJQ = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
                
                // ExoPHP
                    $txtPHP = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php');


            // WRITE functions to write text on txtfiles
                function writeENNONCE(){
                    $fname=$txtENNONCE;
                    $fh=fopen($fname,'w');
                    $data=$_POST['texteENNONCE'];
                    fwrite($fh,$data);
                    fclose($fh);
                }

                function writePSEUDO(){
                    $fname=$txtPSEUDO;
                    $fh=fopen($fname,'w');
                    $data=$_POST['textePSEUDO'];
                    fwrite($fh,$data);
                    fclose($fh);
                }

                function writeJS(){
                    $fname=$txtJS;
                    $fh=fopen($fname,'w');
                    $data=$_POST['texteJS'];
                    fwrite($fh,$data);
                    fclose($fh);
                }            

                function writeJQ(){
                    $fname=$txtJQ;
                    $fh=fopen($fname,'w');
                    $data=$_POST['texteJQ'];
                    fwrite($fh,$data);
                    fclose($fh);
                }

                function writePHP(){
                    $fname=$txtPHP;
                    $fh=fopen($fname,'w');
                    $data=$_POST['textePHP'];
                    fwrite($fh,$data);
                    fclose($fh);
                }

            // Method POST for differents forms
                if(isset($_POST['submitENNONCE'])){writeENNONCE();}
                if(isset($_POST['submitPSEUDO'])){writePSEUDO();}
                if(isset($_POST['submitJS'])){writeJS();}
                if(isset($_POST['submitJQ'])){writeJQ();}
                if(isset($_POST['submitPHP'])){writePHP();}
        ?>
    </div>
</div>

<div class="row">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-ennonce" role="tabpanel" aria-labelledby="nav-ennonce-tab">
            <?php
                echo <<<_END
                    '<form action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-ennonce" method="post">'
                        '<p><pre id="editorENNONCE" class="myeditor name="texteENNONCE">' . $txtENNONCE . '</pre></p>'
                        
                        <button type="submit" name="submitENNONCE" class="btn btn-danger">Enregistrer Énnoncé</button>
                    </form>
                _END;
            ?>
        </div>
            
        <div class="tab-pane fade" id="nav-pseudo" role="tabpanel"  aria-labelledby="nav-pseudo-tab">
                <?php
                    echo <<<_END
                        '<form action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-pseudo" method="post">'
                            '<p><pre id="editorPSEUDO" class="myeditor name="textePSEUDO">' . $txtPSEUDO . '</pre></p>'

                            <button type="submit" name="submitPSEUDO" class="btn btn-danger">Enregistrer PseudoCode</button>
                        </form>
                    _END;
                ?>
        </div>
            
        <div class="tab-pane fade" id="nav-js" role="tabpanel" aria-labelledby="nav-js-tab">
            <?php
                echo <<<_END
                    <form action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-js" method="post">
                        '<p><pre id="editorJS" class="myeditor name="texteJS">' . $txtJS . '</pre></p>'

                        <button type="submit" name="submitJS" class="btn btn-danger">Enregistrer JS</button>
                        <button type="button" class="btn btn-success">Exécuter JS</button>
                    </form>
                _END;
            ?>
        </div>

        <div class="tab-pane fade" id="nav-jq" role="tabpanel" aria-labelledby="nav-jq-tab">
            <?php
                echo <<<_END
                    '<form action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-jq" method="post">'
                        '<p><pre id="editorJQ" class="myeditor name="texteJQ">' . $txtJQ . '</pre></p>'

                        <button type="submit" name="submitJQ" class="btn btn-danger">Enregistrer JQ</button>
                        <button type="button" class="btn btn-success">Exécuter JQ</button>
                    </form>
                _END;
            ?>
        </div>

        <div class="tab-pane fade" id="nav-php" role="tabpanel" aria-labelledby="nav-php-tab">
            <?php
                echo <<<_END
                    '<form action="?s=' . $saison . '&e=' . $exercice . '&tab=3#nav-php" method="post">'
                        '<p><pre id="editorPHP" class="myeditor name="textePHP">' . $txtPHP . '</pre></p>'

                        <button type="submit" name="submitPHP" class="btn btn-danger">Enregistrer PHP</button>
                        <button type="button" class="btn btn-success">Exécuter PHP</button>
                    </form>
                _END;
               ?>
        </div>
    </div>
</div>