<? 
$file_name = "acadvlx-cleanv2.exe"; 
$file_dir = "http://ivanlau.com/acadvlx-clean/down/1/"; 
$file = @ fopen($file_dir . $file_name,"r"); 
if (!$file) { 
echo "文件找不到"; 
} else { 
Header("Content-type: application/octet-stream"); 
Header("Content-Disposition: attachment; filename=" . $file_name); 
while (!feof ($file)) { 
echo fread($file,50000); 
} 
fclose ($file); 
} 
?>

