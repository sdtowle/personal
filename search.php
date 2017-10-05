<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Search</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="search-container" data-role="page">
			<div class="header">
				<a href="index.php"><i class="material-icons">arrow_back</i></a>
				<form class="search" action="searchprocess.php" method="post">
					<input type="text" name="search" value="" placeholder="SEARCH">
					<input type="submit" name="submit" value="">
				</form>
				<p>Search users, events and routes…</p>
			</div>
		</div>
	</body>
</html>
