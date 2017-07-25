<html>
<head>
<title>Env Test</title>
</head>
<body>
<?php
if(isset($_POST["env"])) {
print("Requested environment variable \"".$_POST["env"]."\" value is: ".getenv($_POST
["env"])."<br>");
} ?>
<form action="t.php" method="POST">
<input type="text" name="env" placeholder="Environment Variable" />
</form>
//echo getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");

