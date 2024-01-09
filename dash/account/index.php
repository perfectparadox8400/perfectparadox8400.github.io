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
    }else if ($_SESSION['type'] == "T"){
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
     <title>Edit Accounts | Perfect Paradox 8400</title>
  <!-- Favicons -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="/img/lll.png" rel="icon">
  <link href="/img/lll.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
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
h5 {
  font-size: 1.15em;
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
   <h1 align="center">Edit Accounts</h1>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-info">Add</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Frist Name</th>
       <th>Password</th>
       <th>User Status</th>
       <th>Action</th>
      </tr>
     </thead>
    </table>
    <h2>For User Status:</h2>
    <h5 id="txt">A = Admin: See and do everthing!<br id="txt2">
        M = Manager: See and do everthing except admin settings. (for Coaches)<br>
        T = Team Member: Team member things!<br>
        J = Judge: Things for the judge's!<br>
        G = Gest: People you want to impress or sponsors!</h5>
    <h2>Tip:</h2>
    <h5>Click off of the text you edited and it will update.</h5>
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
    "order": [[ 2, "asc" ]],
    "columnDefs": [ { orderable: false, targets: [3] } ],
    "processing" : true,
    "serverSide" : true,
    "ajax" : {
     url:"fetch.php",
     type:"POST",
    },
    "drawCallback": function ( json ) {
                //Make your callback here.
                 remo();
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
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
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
 var type = "<?php echo $_SESSION['type'];?>";
if(type == "M"){
    $('#txt:contains("A = Admin: See and do everthing!")').each(function(){
    $(this).html($(this).html().split("A = Admin: See and do everthing!").join(""));});
    $( "#txt2" ).remove();
}
function remo(){
    var type = "<?php echo $_SESSION['type'];?>";
if(type == "M"){
    $( "tr" ).remove( ":contains('Allan-Admin')" );

} 
}
</script>
</html>