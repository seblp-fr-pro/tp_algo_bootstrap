<style>
#accordion {
    height:500px;
}
.ace_editor {
    width:600px;
    height:300px;
}
</style>

<script>
$(function() {
    var editor1 = ace.edit("editor1");
    editor1.getSession().setMode("ace/mode/java");
                            
    
    var editor2 = ace.edit("editor2");
    var editor3 = ace.edit("editor3");
    $( "#accordion" ).accordion({
        fillSpace: true,
        change: function() {
            $(editor1).resize(); 
            $(editor2).resize(); 
            $(editor3).resize(); 
        }
        });
    
    //work
    editor1.getSession().on('change', function(e) { 
         $('.ace_identifier').css("background-color","black");
    });
    
    //doesn't work
     $('.ace_identifier').css("background-color","black");
});

</script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/south-street/jquery-ui.css" type="text/css" media="all">
<script src="http://ace.ajax.org/build/src/ace.js" type="text/javascript" charset="utf-8"></script>
<div id="accordion">
    <h3><a href="#">Section 1</a></h3>
    <div>
        <div class="myeditor" id="editor1">public class InfiniteLoop {

    /*
     * This will cause the program to hang...
     *
     * Taken from:
     * http://www.exploringbinary.com/java-hangs-when-converting-2-2250738585072012e-308/
     */
    public static void main(String[] args) {
        double d = Double.parseDouble("2.2250738585072012e-308");

        // unreachable code
        System.out.println("Value: " + d);
    }
}</div>
    </div>
    <h3><a href="#">Section 2</a></h3>
    <div>
        <div class="myeditor" id="editor2" style="height: 250px; width: 500px">some text 2</div>
    </div>
    <h3><a href="#">Section 3</a></h3>
    <div>
        <div class="myeditor" id="editor3" style="height: 250px; width: 500px">some text 2</div>
    </div>
</div>