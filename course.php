<?php
$file=$_FILES["$picture"];
?>

name:<?php print($file["name"]);?>
<?php print "<br />"; ?>
type:<?php print($file["type"]);?>
<?php print "<br />"; ?>
tmp_name:<?php print $_file(["tmp_name"]);?>
<?php print "<br />"; ?>
error:<?php pirnt($file["error"]);?>
<?php print "<br />"; ?>
size:<?php print($file["size"]);?>

<?php
$text=substr($file["name"],-4);
if($ext == '.gif' || $ext == '.jpg' || $ext == '.png'){
  $filepath = './' . $file['name'];
  $success = move_uploaded_file($file['tmp_name'], $filepath);
}else{
  print("拡張子が.git, .jpg, .png のいずれかのファイルをアップロードしてください");
}

if($success){
  print "<br />";
  print "<img src='" . $filepath . "' width='50%'>";
}else{
  print "＊ファイルアップロードに失敗しました。";
}
?>
