<?php
if(isset($_POST['whoasked'])){
header('Content-Type: text/html');
saved();
exit;
}
if(!empty($_POST['keyword'])){
    $keyword = $_POST['keyword'];
        if(!empty($_POST['page'])){
            $page = $_POST['page'];
             $json = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=post&q=index&tags=$keyword&pid=$page&json=1");
        }else{
            $json = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=post&q=index&tags=$keyword&json=1");
            }
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){
            header('Content-Type: application/json');
            echo $json;
            exit;
        } else {
            $json_beautified = str_replace(array("{", "}", '","'), array("{<br />&nbsp;&nbsp;&nbsp;&nbsp;", "<br />}", '",<br />&nbsp;&nbsp;&nbsp;&nbsp;"'), $json);
            echo $json_beautified;
            exit;
        }


} else {
exit("-1");
}
function saved() {
$keyword = $_POST['keyword'];
$betterkw = str_replace("%20","-",$keyword);
if(!empty($_POST['page'])){
    $page = $_POST['page'];
$json = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=post&q=index&tags=$keyword&pid=$page&json=1");
$myfile = fopen("$betterkw-p$page.json", "w") or die("Unable to open file!");
$txt = $json;
fwrite($myfile, $txt);
fclose($myfile);
echo "<script>alert('Your file is saved at https://r34jsondump.7m.pl/$betterkw-p$page.json')</script>";
echo "🦃";
exit;
} else {
$json = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=post&q=index&tags=$keyword&json=1");
$myfile = fopen("$betterkw.json", "w") or die("Unable to open file!");
$txt = $json;
fwrite($myfile, $txt);
fclose($myfile);
echo "<script>alert('Your file is saved at https://r34jsondump.7m.pl/$betterkw.json')</script>";
echo "🦃";
exit;
}
}
?>