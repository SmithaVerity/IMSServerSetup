<?php
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');

			// Start the insert process
			$sql = 'INSERT INTO cron_table(`number`, `dt`) VALUES('12345', now());';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			
?>
