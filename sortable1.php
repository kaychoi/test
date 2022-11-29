<?php 
include  $_SERVER['DOCUMENT_ROOT']."/db.php"; 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Portlets</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <style>
  body {
    min-width: 520px;
  }
  .column {
    width: 25%;
    float: left;
    padding-bottom:100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }
  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }
  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    border: 1px dotted black;
    margin: 0 1em 1em 0;
    height: 50px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
  
  
</head>
<body>
<input type="text" id="number" value="">
<input type="text" id="number1" value="">
<input type="text" id="number2" value="">
 <div style="max-width:1200px;margin:0 auto;">


<div class="column" id="sortable1">
  
<?php
        $sql3 = mq("select * from sortable where tabletype='sortable1' order by orderby asc");  
        $row_num = mysqli_num_rows($sql3); //게시판 총 레코드 수
        while($board3 = mysqli_fetch_array($sql3)){ ?>
  <div class="portlet" id="<?=$board3['id']?>">
    <div class="portlet-header"><?=$board3['name']?></div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
<?php } ?>
 
</div>
 




<div class="column"  id="sortable2">
 
<?php
        $sql3 = mq("select * from sortable where tabletype='sortable2' order by orderby asc");  
        $row_num = mysqli_num_rows($sql3); //게시판 총 레코드 수
        while($board3 = mysqli_fetch_array($sql3)){ ?>

  <div class="portlet" id="<?=$board3['id']?>">
    <div class="portlet-header"><?=$board3['name']?></div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elitLorem ipsum dolor sit amet, consectetuer adipiscing elitLorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit
    </div>
  </div>
 <?php } ?>
</div>
 
<div class="column"  id="sortable3">
  
<?php
        $sql3 = mq("select * from sortable where tabletype='sortable3' order by orderby asc");  
        $row_num = mysqli_num_rows($sql3); //게시판 총 레코드 수
        while($board3 = mysqli_fetch_array($sql3)){ ?>
  <div class="portlet" id="<?=$board3['id']?>">
    <div class="portlet-header"><?=$board3['name']?></div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
<?php } ?>
 
</div>
 
 
<div class="column"  id="sortable4">
  
<?php
        $sql3 = mq("select * from sortable where tabletype='sortable4' order by orderby asc");  
        $row_num = mysqli_num_rows($sql3); //게시판 총 레코드 수
        while($board3 = mysqli_fetch_array($sql3)){ ?>
  <div class="portlet" id="<?=$board3['id']?>">
    <div class="portlet-header"><?=$board3['name']?></div>
    <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
  </div>
 
<?php } ?>
 
</div>
<div id="response"></div>
<script>
  $( function() {
    $( "#sortable1, #sortable2, #sortable3, #sortable4" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all",

        update: function(event, ui){
            var newOrder = $(this).sortable('toArray');

            if(($(ui.sender).attr('id') == undefined)&&($(this).attr('id') == ui.item.parent().attr('id'))){
              //     alert('UPDATE ' + $(this).attr('id') + ' ' + (ui.item.index()+1) + ' ' + $(ui.item).attr('id'));
               }

              
            document.getElementById("number2").value = $(ui.item).attr('id');
            document.getElementById("number").value = newOrder;
            document.getElementById("number1").value = $(this).attr('id');
            var number1 = $(this).attr('id');
            var id = $(ui.item).attr('id');
   
            console.log(newOrder);
          //  alert($(this).attr('id'));


          $.get('savesortable1.php', {order:newOrder,total:<?=$row_num?>,table:number1,id:id},
              function(data){ 
                if(data){ 
                    $("#response").html(data); 
                } 
            } );



            },
            receive: function(event, ui){
             //  alert('RECEIVE: ' + $(ui.sender).attr('id') + '=>' + $(this).attr('id') + ' ' + (ui.item.index()+1) + ' ' + $(ui.item).text());
            }

    

    });
 
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
 
    $( ".portlet-toggle" ).on( "click", function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });
  } );
  </script>

</body>
</html>

