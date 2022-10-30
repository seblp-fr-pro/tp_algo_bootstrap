        <!-- ============================================ BEGIN JS GENERIC scripts ============================================ -->

        <!-- jquery JS -->
        <script src="js/jquery/jquery-3.6.0.min.js"></script>

        <!-- datatablesJS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.js"></script>

        <!-- Bootstrap JS -->
            <script src="js/bootstrap/bootstrap.js"></script>

            <!-- specific tp_crud JS -->
            <script src="js/tp_crud.js"></script>
        <!-- ============================================ End of JS GENERIC scripts ============================================ -->

        <!-- ============================================ BEGIN of JS CUSTOM scripts ============================================ -->
            <!-- Main JS for ALL and COMMON tp_exercices -->
                <script src="js/main.js"></script>

            <!-- Specific JS file for tp_algo -->
                <script src="js/tp_algo.js"></script>

            <!-- Specific JS file for tp_crud -->
                <script src="js/tp_crud.js"></script>

            <!-- GitHUB ACE Code Editor USED BY TP-ALGO -->
                <script src="api/ace-builds/src/ace.js" type="text/javascript" charset="utf-8"></script>

                <script>
                    // SCRIPT ACE EDITOR for TP-ALGO ENNONCE
                    var editorENNONCE = ace.edit("editorENNONCE");
                    editorENNONCE.setTheme("ace/src/theme/dracula");

                    // SCRIPT ACE EDITOR for TP-ALGO PSEUDOCODE
                    var editorPSEUDO = ace.edit("editorPSEUDO");
                    editorPSEUDO.setTheme("ace/src/theme/dracula");

                    // SCRIPT ACE EDITOR for TP-ALGO JAVASCRIPT
                    var editorJS = ace.edit("editorJS");
                    editorJS.setTheme("ace/src/theme/dracula");
                    editorJS.session.setMode("ace/src/mode/javascript");

                    // SCRIPT ACE EDITOR for TP-ALGO JQUERY
                    var editorJQ = ace.edit("editorJQ");
                    editorJQ.setTheme("ace/src/theme/dracula");
                    editorJQ.session.setMode("ace/src/mode/javascript");

                    // SCRIPT ACE EDITOR for TP-ALGO PHP
                    var editorPHP = ace.edit("editorPHP");
                    editorPHP.setTheme("ace/src/theme/dracula");
                    editorPHP.session.setMode("ace/src/mode/php");
                </script>

        <!-- ============================================ END of JS CUSTOM scripts ==================================================== -->