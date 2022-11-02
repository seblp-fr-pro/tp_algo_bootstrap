<div class="row">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <?php
            // Fonctions used by this script
            // WRITE functions to write text on txtfiles
            function write($tab_name) {
                $file_name=$exo_file_name;
                $fh=fopen($file_name,'w');
                $data=$_POST[${"texte$tab_name"}];
                fwrite($fh,$data);
                fclose($fh);
            }
            // Folders
            $tp_algo_folder='inc/exos/s_' . $saison . '/exo_' . $exercice . '/';
            // GET tab number 
            $tab_get = $_GET['tab'];
            // CHANGE title on HTML page with dynamic data
            echo "<title>TP Algo - S". $saison . "-Ex" . $exercice . "</title>";
            // ARRAY with differents tab availables
            $tab_list = array("Consignes", "PseudoCode", "JS", "JQ", "PHP");
            
            // LOOP with all tabs
            foreach ($tab_list as $tab_name){
                // Create personnalized TAB
                echo <<< _END
                    <a class="nav-item nav-link" id="nav-$tab_name-tab" data-toggle="tab" href="#nav-$tab_name" role="tab" aria-controls="nav-$tab_name" aria-selected="false">$tab_name</a>
                _END;
            }
        ?>
    </div>
</div>
<div class="row">
    <?php
        // LOOP with all tabs
        foreach ($tab_list as $tab_name){
            // Display each TAB content
            echo <<<_END
                <div class="tab-content" id="nav-tabContent">
                    <div class="row">
            _END;
        }
        // Precise location files used by this script
        switch ($tab_get) {
            case 'Consignes':
                echo <<<_END
                    <div tab-pane fade show"    id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade"         id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade"         id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade"         id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade"         id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
            case 'PseudoCode':
                echo <<<_END
                    <div tab-pane fade"         id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade show"    id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade"         id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade"         id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade"         id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
            case 'JS':
                echo <<<_END
                    <div tab-pane fade"         id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade"         id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade show"    id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade"         id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade"         id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
            case 'JQ':
                echo <<<_END
                    <div tab-pane fade"         id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade"         id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade"         id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade show"    id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade"         id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
            case 'PHP':
                echo <<<_END
                    <div tab-pane fade"         id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade"         id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade"         id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade"         id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade show"    id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
            default:
                echo <<<_END
                    <div tab-pane fade show"    id="nav-Consignes"  role="tabpanel" aria-labelledby="nav-Consignes-tab">
                    <div tab-pane fade"         id="nav-PseudoCode" role="tabpanel" aria-labelledby="nav-PseudoCode-tab">
                    <div tab-pane fade"         id="nav-JS"         role="tabpanel" aria-labelledby="nav-JS-tab">
                    <div tab-pane fade"         id="nav-JQ"         role="tabpanel" aria-labelledby="nav-JQ-tab">
                    <div tab-pane fade"         id="nav-PHP"        role="tabpanel" aria-labelledby="nav-PHP-tab">
                _END;
            break;
        }
        // LOOP with all tabs
        foreach ($tab_list as $tab_name){
        // Precise location files used by this script
        switch ($tab_name) {
            case 'Consignes':
                $exo_file_name = $tp_algo_folder . 'exoCONSIGNES.txt';
            break;
            case 'PseudoCode':
                $exo_file_name = $tp_algo_folder . 'exoPSEUDOCODE.txt';
            break;
            case 'JS':
                $exo_file_name = $tp_algo_folder . 'exoJS.js';
            break;
            case 'JQ':
                $exo_file_name = $tp_algo_folder . 'exoJQ.js';
            break;
            case 'PHP':
                $exo_file_name = $tp_algo_folder . 'exoPHP.php';
            break;
        }
        // DISPLAY text in files inc/exos/s_xx/exo-xx/exoXXXX.XXX
        // DISPLAY TABS names
        $displayME = file_get_contents($exo_file_name);
        echo <<<_END
            <form action="?s=$saison&e=$exercice#nav-$tab_name" method="post">
                <p><pre id="editor$tab_name" class="myeditor" name="texte$tab_name">$displayME</pre></p>
                <p><button type="submit" name="submit$tab_name" class="btn btn-danger">Enregistrer</button>
                <button type="button" class="btn btn-success">Exécuter</button></p>
            </form>
        _END;
        // Method POST with differents forms
        if(isset($_POST["submit$tab_name"])){write($tab_name);}
        }
    ?>
</div>