<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <?php
            // CHANGE title on HTML page with dynamic data
                echo "<title>TP Algo - S". $saison . "-Ex" . $exercice . "</title>";

            // ARRAY with differents tab availables
                $tab_list = array("ennonce", "pseudo", "js", "jq", "php");
            
            // LOOP with all tabs
                foreach ($tab_list as $tab_name) 
                {
                    // UPPERCASE $tab_name as $tab_name_CAP
                        $tab_name_CAP = strtoupper($tab_name);

                    // DISPLAY text in files inc/exos/s_xx/exo-xx/exoXXXX.XXX
                        // Exo
                            ${"txt$tab_name_CAP"} = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . "/exo${"txt$tab_name_CAP"}.txt");

                    // Display tab content
                        echo <<<_END
                            <form action="?s=$saison&e=$exercice&tab=1#nav-$tab_name" method="post">
                                <p><pre id="editor$tab_name_CAP" class="myeditor" name="texte$tab_name_CAP">${"txt$tab_name_CAP"}</pre></p>

                                <button type="submit" name="submit$tab_name_CAP" class="btn btn-danger">Enregistrer $tab_name_CAP</button>
                                <button type="button" class="btn btn-success">Exécuter $tab_name_CAP</button>
                            </form>
                        _END;

                    // WRITE functions to write text on txtfiles
                        function writeENNONCE(){
                            $fname=$txtENNONCE;
                            $fh=fopen($fname,'w');
                            $data=$_POST['texteENNONCE'];
                            fwrite($fh,$data);
                            fclose($fh);
                        }

                    // Method POST with differents forms
                        if(isset($_POST['submitENNONCE'])){writeENNONCE();}
                }


            $number_tab = $_GET['tab'];
            switch($number_tab) {      
                case 2:
                    echo <<< _END
                        <a class="nav-item nav-link" id="nav-ennonce-tab" data-toggle="tab" href="#nav-ennonce" role="tab" aria-controls="nav-ennonce" aria-selected="false">Ennoncé</a>
                        <a class="nav-item nav-link active" id="nav-pseudo-tab" data-toggle="tab" href="#nav-pseudo" role="tab" aria-controls="nav-pseudo" aria-selected="true">PseudoCode</a>    
                        <a class="nav-item nav-link" id="nav-js-tab" data-toggle="tab" href="#nav-js" role="tab" aria-controls="nav-js" aria-selected="false">JS</a>
                        <a class="nav-item nav-link" id="nav-jq-tab" data-toggle="tab" href="#nav-jq" role="tab" aria-controls="nav-jq" aria-selected="false">JQ</a>
                        <a class="nav-item nav-link" id="nav-php-tab" data-toggle="tab" href="#nav-php" role="tab" aria-controls="nav-php" aria-selected="false">PHP</a>
                    _END;
                break;
                
                default:

                break;
            }







        ?>
    </div>
</div>

<div class="row">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-ennonce" role="tabpanel" aria-labelledby="nav-ennonce-tab">
            <?php

            ?>
        </div>
    </div>
</div>




// Given these variables ...
$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach($nameTypes as $type)
  print ${"name_$type"} . "\n";

// ... equivalent to this print statement.
print "$name_first\n$name_last\n$name_company\n";