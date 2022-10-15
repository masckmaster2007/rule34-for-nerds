<?php
echo "Note: It is recommend to use Mozilla Firefox as it deals better with JSON files (else use a json beautifier)";
	echo '<br>Add keyword (add %20 for space)<br>
    <form action="ruledump.php" method="post">
    Keyword: <input type="text" name="keyword"><br>
    Page (optional): <input type="text" name="page"><br>
    <input type="checkbox" name="whoasked" value="Permalink the JSON xD">Permalink the JSON xD</input><br>
    <input type="submit" value="Get the JSON" /><br>';
echo '<h1>Example 1 : keyword%20rating:safe/questionable/explicit (specify a rating)</h1>';
echo '<h1>Example 2 : keyword%20keyword2 (multiple keywords)</h1>';
echo '<h1>Example 3 : keyword%20rating:safe/questionable/explicit</h1>';
?>