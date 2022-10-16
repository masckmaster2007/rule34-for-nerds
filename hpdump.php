<?php
if(isset($_POST['whocares'])){
header('Content-Type: text/html');
saved();
exit;
}
if(!empty($_POST['pourquoi'])){
$post = $_POST['pourquoi'];
$xml = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=comment&q=index&post_id=$post");
header('Content-Type: text/xml');
echo $xml;
exit;
} else {
    exit("-1");
}
    function saved() {
        $post = $_POST['pourquoi'];
        $xml = file_get_contents("https://api.rule34.xxx/index.php?page=dapi&s=comment&q=index&post_id=$post");
        $myfile = fopen("comments-$post.xml", "w") or die("Unable to open file!");
        $txt = $xml;
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "<script>alert('Your file is saved at https://r34jsondump.7m.pl/comments-$post.xml')</script>";
        echo "🦃";
        exit;
    }
?>