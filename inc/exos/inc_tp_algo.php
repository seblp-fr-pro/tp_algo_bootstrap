<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <?php
            // Folders
                 $tp_algo_folder='inc/exos/s_' . $saison . '/exo_' . $exercice . '/';

            // GET tab number 
                $number_tab = $_GET['tab'];

            // CHANGE title on HTML page with dynamic data
                echo "<title>TP Algo - S". $saison . "-Ex" . $exercice . "</title>";

            // ARRAY with differents tab availables
                $tab_list = array("Consignes", "PseudoCode", "JS", "JQ", "PHP");
            
            // LOOP with all tabs
                foreach ($tab_list as $tab_name){

                    // Precise file used by this scipt
                        switch ($tab_name) {
                            case "Consignes":
                                $exo_file_name = $tp_algo_folder . 'exoCONSIGNES.txt';
                            break;

                            case "PseudoCode":
                                $exo_file_name = $tp_algo_folder . 'exoPSEUDOCODE.txt';
                            break;

                            case "JS":
                                $exo_file_name = $tp_algo_folder . 'exoJS.js';
                            break;

                            case "JQ":
                                $exo_file_name = $tp_algo_folder . 'exoJQ.js';
                            break;

                            case "PHP":
                                $exo_file_name = $tp_algo_folder . 'exoPHP.php';
                            break;
                        }


                    // UPPERCASE $tab_name as $tab_name_CAP
                        $tab_name_CAP = strtoupper($tab_name);

                    // DISPLAY text in files inc/exos/s_xx/exo-xx/exoXXXX.XXX
                        // DISPLAY TABS names
                            ${"txt$tab_name_CAP"} = file_get_contents($exo_file_name);

                            echo <<< _END
                            <a class="nav-item nav-link" id="nav-$tab_name-tab" data-toggle="tab" href="#nav-$tab_name" role="tab" aria-controls="nav-$tab_name" aria-selected="false">$tab_name</a>
                            _END;
                }

                foreach ($tab_list as $tab_name){
                    // Display each TAB content
                        echo <<<_END
                            TEST
                            <form action="?s=$saison&e=$exercice&tab=1#nav-$tab_name" method="post">
                                <p><pre id="editor$tab_name_CAP" class="myeditor" name="texte$tab_name_CAP">${"txt$tab_name_CAP"}</pre></p>

                                TEST2

                                <button type="submit" name="submit$tab_name_CAP" class="btn btn-danger">Enregistrer $tab_name_CAP</button>
                                <button type="button" class="btn btn-success">Exécuter $tab_name_CAP</button>
                            </form>
                        _END;

                    // WRITE functions to write text on txtfiles
                        function write($tab_name_CAP, $data_exo){
                            $file_name=${txt_};
                            $fh=fopen($file_name,'w');
                            $data=$_POST["texte$tab_name_CAP"];
                            fwrite($fh,$data);
                            fclose($fh);
                        }

                    // Method POST with differents forms
                        if(isset($_POST["submit$tab_name_CAP"])){write($tab_name_CAP);}
                }
        ?>
    </div>
</div>

<div class="row">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-consignes" role="tabpanel" aria-labelledby="nav-consignes-tab">
            <?php

            ?>
        </div>
    </div>
</div>