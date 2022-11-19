<html>
<head>
<title>rule34.xxx for nerds</title>
<style>
body{
color: lime;
background-color: black;
}
</style>
</head>
<h2>Note: It is recommended to use Mozilla Firefox as it deals better with JSON files (chrome shows as plain text)</h2>	<center>Add keyword<br>
    <form action="ruledump.php" method="post" id="form1">
    Keyword: <input type="text" name="keyword"><br>
    Page (optional): <input type="text" name="page"><br>
    <input type="checkbox" name="sm" value="Safe Mode">Safe Mode (links don't work)</input><br>
    <input type="checkbox" name="whoasked" value="Permalink the JSON xD">Permalink the JSON xD</input><br>
    <input type="submit" value="Get the JSON" form="form1" /></center><br>
</form>
<h1>Example 1 : keyword rating:safe/questionable/explicit (specify a rating)</h1>
<h1>Example 2 : keyword keyword2 (multiple keywords)</h1>
<h1>Example 3 : user:username (find user)</h1>
<h1>Example 4 : keyword -keyword2 (doesn't list posts with keyword2)</h1>
<center>
    <h2>Comments ? Fill below</h2>
<form action="hpdump.php" method="post" id="form2">
    Post ID (aka id in the JSON file): <input type="text" name="pourquoi"><br>
    <input type="checkbox" name="whocares" value="Permalink the XML xD">Permalink the XML xD</input><br>
    <input type="submit" value="Get the comments (XML)" form="form2" />
</form>
</center>
<h1>Example: 4310223</h1>
</html>
