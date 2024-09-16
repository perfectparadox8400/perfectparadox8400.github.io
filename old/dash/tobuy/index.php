<?php
session_start();
if(!isset($_SESSION['usern'])){
    $show = false;
    header('location:/');
} else {
    $show = true;
    if ($_SESSION['type'] == "G"){
    header('location:/');
    }else if ($_SESSION['type'] == "J"){
    header('location:/');
    }
}
?>
<html id="hi">
 <head>
     <script>
    if(window==window.top) {
    document.location.href = "/";
}
     </script>
     <title>Things To Buy | Perfect Paradox 8400</title>
  <!-- Favicons -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="/img/lll.png" rel="icon">
  <link href="/img/lll.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  
    <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   margin-bottom: 30px;
   width: 98%;
   padding:10px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  table,.table-responsive, {
  width: 100% !important;
  table-layout:fixed !important;
}
.table-responsive {
    word-wrap: break-word;
    overflow-x: inherit!important;
}
    table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 0 !important;
}
table.dataTable.no-footer {
    border-bottom: 0 !important;
}
.sorting,table.dataTable thead .sorting_asc,table.dataTable thead .sorting_desc,table.dataTable thead .sorting_asc_disabled,table.dataTable thead .sorting_desc_disabled{cursor:pointer;*cursor:hand}table.dataTable thead .sorting,table.dataTable thead .sorting_asc,table.dataTable thead .sorting_desc,table.dataTable thead .sorting_asc_disabled,table.dataTable thead .sorting_desc_disabled{background-repeat:no-repeat;background-position:center right}table.dataTable thead .sorting{background-image:url("https://cdn.datatables.net/1.10.15/images/sort_both.png")}table.dataTable thead .sorting_asc{background-image:url("https://cdn.datatables.net/1.10.15/images/sort_asc.png")}table.dataTable thead .sorting_desc{background-image:url("https://cdn.datatables.net/1.10.15/images/sort_desc.png")}table.dataTable thead .sorting_asc_disabled{background-image:url("https://cdn.datatables.net/1.10.15/images/sort_asc_disabled.png")}table.dataTable thead .sorting_desc_disabled{background-image:url("https://cdn.datatables.net/1.10.15/images/sort_desc_disabled.png")}table.dataTable tbody tr{background-color:#ffffff}table.dataTable tbody tr.selected{background-color:#B0BED9}table.dataTable tbody th,table.dataTable tbody td{padding:8px 10px}table.dataTable.row-border tbody th,table.dataTable.row-border tbody td,table.dataTable.display tbody th,table.dataTable.display tbody td{border-top:1px solid #ddd}table.dataTable.row-border tbody tr:first-child th,table.dataTable.row-border tbody tr:first-child td,table.dataTable.display tbody tr:first-child th,table.dataTable.display tbody tr:first-child td{border-top:none}table.dataTable.cell-border tbody th,table.dataTable.cell-border tbody td{border-top:1px solid #ddd;border-right:1px solid #ddd}table.dataTable.cell-border tbody tr th:first-child,table.dataTable.cell-border tbody tr td:first-child{border-left:1px solid #ddd}table.dataTable.cell-border tbody tr:first-child th,table.dataTable.cell-border tbody tr:first-child td{border-top:none}table.dataTable.stripe tbody tr.odd,table.dataTable.display tbody tr.odd{background-color:#f9f9f9}table.dataTable.stripe tbody tr.odd.selected,table.dataTable.display tbody tr.odd.selected{background-color:#acbad4}table.dataTable.hover tbody tr:hover,table.dataTable.display tbody tr:hover{background-color:#f6f6f6}table.dataTable.hover tbody tr:hover.selected,table.dataTable.display tbody tr:hover.selected{background-color:#aab7d1}table.dataTable.order-column tbody tr>.sorting_1,table.dataTable.order-column tbody tr>.sorting_2,table.dataTable.order-column tbody tr>.sorting_3,table.dataTable.display tbody tr>.sorting_1,table.dataTable.display tbody tr>.sorting_2,table.dataTable.display tbody tr>.sorting_3{background-color:#fafafa}table.dataTable.order-column tbody tr.selected>.sorting_1,table.dataTable.order-column tbody tr.selected>.sorting_2,table.dataTable.order-column tbody tr.selected>.sorting_3,table.dataTable.display tbody tr.selected>.sorting_1,table.dataTable.display tbody tr.selected>.sorting_2,table.dataTable.display tbody tr.selected>.sorting_3{background-color:#acbad5}table.dataTable.display tbody tr.odd>.sorting_1,table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{background-color:#f1f1f1}table.dataTable.display tbody tr.odd>.sorting_2,table.dataTable.order-column.stripe tbody tr.odd>.sorting_2{background-color:#f3f3f3}table.dataTable.display tbody tr.odd>.sorting_3,table.dataTable.order-column.stripe tbody tr.odd>.sorting_3{background-color:whitesmoke}table.dataTable.display tbody tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_1{background-color:#a6b4cd}table.dataTable.display tbody tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_2{background-color:#a8b5cf}table.dataTable.display tbody tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody tr.odd.selected>.sorting_3{background-color:#a9b7d1}table.dataTable.display tbody tr.even>.sorting_1,table.dataTable.order-column.stripe tbody tr.even>.sorting_1{background-color:#fafafa}table.dataTable.display tbody tr.even>.sorting_2,table.dataTable.order-column.stripe tbody tr.even>.sorting_2{background-color:#fcfcfc}table.dataTable.display tbody tr.even>.sorting_3,table.dataTable.order-column.stripe tbody tr.even>.sorting_3{background-color:#fefefe}table.dataTable.display tbody tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_1{background-color:#acbad5}table.dataTable.display tbody tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_2{background-color:#aebcd6}table.dataTable.display tbody tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody tr.even.selected>.sorting_3{background-color:#afbdd8}table.dataTable.display tbody tr:hover>.sorting_1,table.dataTable.order-column.hover tbody tr:hover>.sorting_1{background-color:#eaeaea}table.dataTable.display tbody tr:hover>.sorting_2,table.dataTable.order-column.hover tbody tr:hover>.sorting_2{background-color:#ececec}table.dataTable.display tbody tr:hover>.sorting_3,table.dataTable.order-column.hover tbody tr:hover>.sorting_3{background-color:#efefef}table.dataTable.display tbody tr:hover.selected>.sorting_1,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_1{background-color:#a2aec7}table.dataTable.display tbody tr:hover.selected>.sorting_2,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_2{background-color:#a3b0c9}table.dataTable.display tbody tr:hover.selected>.sorting_3,table.dataTable.order-column.hover tbody tr:hover.selected>.sorting_3{background-color:#a5b2cb}
</style>
 </head>
  <div class="container box">
   <h1 align="center">Things To Buy</h1>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add Something</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="display dataTable table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>Small Description</th>
       <th>Price</th>
       <th>Action</th>
      </tr>
     </thead>
       <tfoot>
            <tr>
                <th></th>
                <th style="text-align:right">Total:</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    <h2>Things To Buy:</h2>
    <p>Make sure that you include the $ sign.</p>
   </div>
  </div>
  <script type="text/javascript" language="javascript">
let height;
const sendPostMessage = () => {
     document.getElementsByTagName('html').id = "hi";
    if(document.getElementsByTagName('html').id == 'hi'){
    var height = document.getElementById('hi').offsetHeight;
    window.parent.postMessage({
      frameHeight: height
    }, '*');
    console.log(height); // check the message is being sent correctly
    }
  };
window.onload = () => sendPostMessage();
window.onresize = () => sendPostMessage();
  </script>
<script type="text/javascript" language="javascript" >
sendPostMessage();
 $(document).ready(function(){
  fetch_data();
 function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
 "footerCallback": function ( row, data, start, end, display ) {
			var api = this.api(), data;

			// Remove the formatting to get integer data for summation
			var intVal = function ( i ) {
 if(typeof i === 'string') {
        var a = i.replace(/\$|<div contenteditable class="update" data-id="[A-Za-z0-9]*" data-column="[A-Za-z0-9]*">|<[\{\}\[\]\\\/]*div>/g, '')*1;
    return a;
  }
  
  return typeof i === 'number' ?
    i : 0;
                
                         
            };

			// Total over all pages
			total = api
				.column(2)
				.data()
				.reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );

			// Total over this page
			pageTotal = api
				.column( 2, { page: 'current'} )
				.data()
				.reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
  var nu = total.toFixed(2);
  var nu2 = pageTotal.toFixed(2);
			// Update footer
			$( api.column( 2 ).footer() ).html(
				'$'+ nu +' ( $'+ nu2 +' Total)'
			);
		},
    "processing" : true,
    "serverSide" : true,
    "order" : [[ 2, "asc" ]],
    "ajax" : {
     url:"fetch.php",
     type:"POST",
    },
    "drawCallback": function ( json ) {
                //Make your callback here.
                setTimeout(function(){
    sendPostMessage();
}, 500);
               
            }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div id="div1" class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
    sendPostMessage();
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert Something to buy!</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
    sendPostMessage();
  });
  
  $(document).on('click', '#insert', function(){
   var username = $('#data1').text();
   var password = $('#data2').text();
   var type = $('#data3').text();
   if(username != '' && password != '' && type != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{username:username, password:password, type:type},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
     sendPostMessage();
    }, 5000);
   }
   else
   {
    alert("All Fields are required");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div id="div2" class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
     sendPostMessage();
    }, 5000);
   }
  });
 });
</script>
</html>