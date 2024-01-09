<?php
session_start();
if(!isset($_SESSION['usern'])){
    $show = false;
    header('location:/');
} else {
    $show = true;
    if ($_SESSION['type'] == "G"){
    header('location:/');
    }
}
?>
<?php
    $dir = sys_get_temp_dir(); //path to temporary directory
    echo "Will clean: {$dir}<br />";
    $handle=opendir($dir); 
    while($data=readdir($handle)) 
    { 
        if(!is_dir($data) && $data!="." && $data!="..") //excludes here
        {
            echo " - {$dir}/{$data}<br />";
            unlink("{$dir}/{$data}");
        }
    }
   closedir($handle);
?> 