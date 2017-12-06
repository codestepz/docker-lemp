<html>
    <head>
        <meta charset="utf-8" />
        <title> Connect Database (MySQL) </title>
        <style> h1 { text-align: center; color: dodgerblue; padding-top: 50px; } </style>
    </head>
  <body>
    <div>

		<h1> Connect Database (MySQL) </h1>
		
		<?php
		
			$user       = 'root';
			$password   = "123456";
			$database   = "db_example";
			$host       = "mysql";
			$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8;port:3306", $user, $password);
			$query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
			$tables     = $query->fetchAll(PDO::FETCH_COLUMN);

			if (empty($tables)) {

				echo "<p>There are no tables in database \"{$database}\".</p>";

			} else {

				echo "<p>Database \"{$database}\" has the following tables:</p>";
				echo "<ul>";

				foreach ($tables as $table) {
					echo "<li>{$table}</li>";
				}

				echo "</ul>";

			}

		?>

    </div>
  </body>
</html>