<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<form method="post">
<p>First Value:<br/>
<input type="number" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="number" id="second" name="second"></p>
<input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
<input type="radio" name="group1" id="subtract" value="subtract"><p>-</p><br/>
<input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
<input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>
<p>The answer is: 
<?php
if($_POST['group1'] == add) {
echo "$first + $second";
}
else if($_POST['group1'] == subtract) {
echo "$first - $second";
}
else if($_POST['group1'] == times) {
echo "$first * $second";
}
else($_POST['group1'] == divide) {
echo "$first / $second";
}
?>
</p> 
</body>
</html>