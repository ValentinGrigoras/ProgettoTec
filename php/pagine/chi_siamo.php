<?php 
$page = file_get_contents(dirname(dirname(__DIR__)) . '/' . "html" . '/' . "pagine" . '/' . "chi_siamo.html");

// Directory
$directory = "../../img/about_us";

// Returns array of files
$files = scandir($directory);
unset($files[0]); unset($files[1]); //rimossi '.' e '..'
$generaimg="";
// Count number of files and store them to variable..
$num_files = count($files);


		$i=2;
		while($i<=$num_files+1){
			$generaimg.="
				<div class=\"mySlides fade\">";
    		$generaimg.= "
    				<img src=\"./img/about_us/$files[$i]\"/>
    				<div class=\"numbertext\">".($i-1)." / $num_files</div>
  				</div>";

  			$i++;
		}
$page = str_replace("*generaimg*",$generaimg,$page);

echo $page;
?>