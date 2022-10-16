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
<h2>Note: It is recommended to use Mozilla Firefox as it deals better with JSON files (chrome shows as plain text)</h2>	<center>Add keyword (add %20 for space)<br>
    <form action="ruledump.php" method="post" id="form1">
    Keyword: <input type="text" name="keyword"><br>
    Page (optional): <input type="text" name="page"><br>
    <input type="checkbox" name="whoasked" value="Permalink the JSON xD">Permalink the JSON xD</input><br>
    <input type="submit" value="Get the JSON" form="form1" /></center><br>
</form>
<h1>Example 1 : keyword%20rating:safe/questionable/explicit (specify a rating)</h1>
<h1>Example 2 : keyword%20keyword2 (multiple keywords)</h1>
<h1>Example 3 : keyword%20rating:safe/questionable/explicit</h1>
<center>
    <h2>Comments ? Fill below</h2>
<form action="hpdump.php" method="post" id="form2">
    Post ID (aka id in the JSON file): <input type="text" name="pourquoi"><br>
    <input type="checkbox" name="whocares" value="Permalink the XML xD">Permalink the XML xD</input><br>
    <input type="submit" value="Get the comments (XML)" form="form2" />
</form>
</center>
</html>
