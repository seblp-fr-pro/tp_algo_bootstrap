<?php
    echo <<<_END
        <form action="test_form.php" method="post">
            <textarea name="textdata" cols="50" rows="20"></textarea>
            <input type="submit" name="submit" value="CLICK ME">
            <input type="hidden" name="submit_check" value="1">
        </form>
    _END;

    function write(){
        $fname="test.txt";
        $fh=fopen($fname,'w');
        $data=$_POST['textdata'];
        fwrite($fh,$data);
        fclose($fh);
    }

    if(isset($_POST['submit_check'])){
        write();
    }
?>