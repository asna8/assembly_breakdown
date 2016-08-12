<?php

// Open a directory, and read its contents
function showfiles($dir,$i)
{
$i++;
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
       if($file=='.' || $file=='..')
        {
          echo "";
        }
        else if(is_dir($dir."/".$file))
      {
        echo "
         <div class='panel panel-default'>
     <div class='panel-heading'>
       <h4 class='panel-title'>
         <a data-toggle='collapse' href='#collapse".$i."' >$file</a>
       </h4>
     </div>
     <div id='collapse".$i."' class='panel-collapse collapse'>
       <div class='panel-body'>";
        $i=showfiles($dir."/".$file,$i);
        echo " 
       </div>
       <div class='panel-footer'>Panel Footer
         <li>Add another file </li>
       </div>
     </div>
   </div>
        ";
      }
    
      else
      echo "<li><a href=' file:///C:".$dir."/".$file . "'> $file</a></li><br>";
    }
    closedir($dh);
  }
}
return $i;
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <h2>Assembly breakdown demo</h2>
 <div class="panel-group">
   <div class="panel panel-default">
     <div class="panel-heading">
       <h4 class="panel-title">
         <a data-toggle="collapse" href="#collapsea">Images</a>
       </h4>
     </div>
     <div id="collapsea" class="panel-collapse collapse">
       <div class="panel-body">
       <?php $i=0;
       showfiles("/xampp/htdocs/247around",$i); ?>
       </div>
       <div class="panel-footer">Panel Footer
         <li>Add another file </li>
       </div>
     </div>
   </div>
 </div>
</div>
   
</body>
</html>