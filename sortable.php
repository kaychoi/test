<?php 
include  $_SERVER['DOCUMENT_ROOT']."/db.php"; 
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Display as grid</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
  #sortable div { margin: 2%; padding: 0px; float: left; width: 96%; height: 200px; font-size: 4em; text-align: center; }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
  
  </head>
<body>

<input type="text" id="number" value="">
<div id="sortable" class="ui-sortable collection">
<?php
        $sql3 = mq("select * from sortable1 order by sort asc");  
        $row_num = mysqli_num_rows($sql3); //게시판 총 레코드 수
        while($board3 = mysqli_fetch_array($sql3)){ ?>
<div class="ui-state-default ui-sortable-handle collection-item avatar z-depth-3" id="<?=$board3['id']?>"><?=$board3['name']?></div>
      <?php } ?>


        </div>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
    $('#sortable').sortable({
        update: function(event, ui) {
            var newOrder = $(this).sortable('toArray');
          //  $.get('savesortable.php', {order:newOrder,total:<?php echo $row_num?>});
            document.getElementById("number").value = newOrder;
            console.log(newOrder);
          //  alert(newOrder);
            
        }
    });
    $( "#sortable" ).disableSelection();
});

function input_Text(){
  var newOrder = document.getElementById("number").value; 
  var total = <?=$row_num?>;
  $.get( 
            "savesortable.php", 
            { order : newOrder,
	            total : total }, 
            function(data){ 
                if(data){ 
                    $("#response").html(data); 
                //   $('#load_area').load("./survey_load.php?bid=<?php //echo $board['subnum']?>");
                    
                } 
            } 
        ); 
}

</script>

<div id="btn" onclick="input_Text()">저장</div>
<div id="response"></div>
 
</body>
</html>




