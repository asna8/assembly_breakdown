<?php
$dir = "/xampp/htdocs/img";
$i=0;
// Open a directory, and read its contents
function showfiles($dir)
{
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	 if($file=='.' || $file=='..')
    		{
    			echo "";
    		}
    		else if(is_dir($dir."/".$file))
    	{
    		echo "<a href=''>$file</a><br>";
    	}
    
    	else
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
}
echo "hello";
?>