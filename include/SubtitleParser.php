<?php
class Subtitleparser{
	

function convert_srt($filename)
{

$begin = "";
$end = "";
$full_line = "";
$result = array();
 
  if(substr(strtolower($filename), (strlen($filename) - 4), 4) == '.srt') //check if srt file 
  {

$fh = fopen($filename, 'r');
$file_content = fread($fh, filesize($filename));
fclose($fh);

//echo $file_content;

$subtitle_array = explode("\n", $file_content);
//print_r($subtitle_array);
//echo count($subtitle_array);

$filterd_array = array();

//rem,ove blank lines
$count = -1; 
for ($i = 0; $i <= count($subtitle_array)-1; $i++) {
if(!empty($subtitle_array[$i]) or $subtitle_array[$i]!="")
    {
	$count = $count + 1;
	$filterd_array[] = trim($subtitle_array[$i]);
	}
}

//print_r($filterd_array);
//echo count($filterd_array);

$index = '1' ;
$line_index = array();

for ($i = 0; $i <= count($filterd_array)-1; $i++) {
//$line_content = explode("\n", $filterd_array[$i]);
//print_r($line_content);
//echo $filterd_array[$i]."<br>";
if(is_numeric($filterd_array[$i]) and $filterd_array[$i]==$index and strpos($filterd_array[$i+1], "-->")  and strpos($filterd_array[$i+1], ":"))
{
//echo $filterd_array[$i]."<br>";
$line_index[] = $i;
$index = $index + 1; 
}
}

//print_r($line_index);

$counter = -1;
for ($i = 0; $i <= count($line_index)-1; $i++) {
$line_start = $line_index[$i];
if($i!=count($line_index)-1)
{
$line_end = $line_index[$i+1] -1;
}
else
{
$line_end = $line_index[$i];
}

if($line_end - $line_start >= 3)
{
$counter = $counter + 1 ;
$result[$counter]['line'] = $filterd_array[$line_start];
$line_time = explode( "-->", $filterd_array[$line_start+1]);
$result[$counter]['begin'] = $line_time[0];
$result[$counter]['end'] = $line_time[1];
$text = "";
for ($j = $line_start+2; $j <= $line_end-1; $j++) {
$text = $text . $filterd_array[$j];
}
$result[$counter]['text'] = $text;
//echo $line_start . " " . $line_end . "<br>";
//echo $filterd_array[$line_start+1];
}
}
//echo "<pre>"; print_r($result); echo "</pre>";

  }

return $result;
}

//convert_srt("../tmp/24999081312729840.srt");

}
?>
