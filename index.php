<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LuckName</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slotmachine.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var textMachine = $("#textMachine").slotMachine({
            active	: 0,
            delay	: 500
        });
        $("#slotMachineButtonShuffle").click(function(){
            textMachine.shuffle();
        });
        $("#slotMachineButtonStop").click(function(){
            if( textMachine.isRunning() ){
                textMachine.stop(true);
            }
        })
    });
</script>
</head>
<body>
<div id="header">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <div class="content">
                    <div id="textMachine">
                    <?php
                        include_once ('Lib/textToArr.class.php');
                        $txtArr = new textToArr();
                        $txtArr->setTextPath('name.txt');
                        $arr = $txtArr->getArray();
                        foreach($arr as $v){
                            echo '<div>'.$v.'</div>';
                        }
                    ?>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div style="text-align: center">
        <div id="slotMachineButtonShuffle" class="slotMachineButton">转</div>
        <div id="slotMachineButtonStop" class="slotMachineButton">停</div>
    </div>
</div>
</body>
</html>
