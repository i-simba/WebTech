<!-- JQuery Scripts -->
<script src="assets/js/jquery-3.5.1.js"></script>

<?php
	if (isset($_REQUEST['sid']) && $_REQUEST['sid'] != "") {
		
		// Check SID
		$dblink=db_connect("user_data");
		$sid=addslashes($_REQUEST['sid']);
		$sql="Select `auto_id` from `accounts` where `session_id`='$sid'";
		$results=$dblink->query($sql) or
			die("Something went wrong with $sql<br>".$dblink->error);
		if ($results->num_rows<=0)
			redirect("index.php?page=login&errMsg=InvalidSid");
		
		// Header
		echo '<header class="resultP">';
		echo '<div class="container">';
		echo '<div class="slider-container">';
		echo '<div class="intro-text">';
		echo '<div class="intro-heading intro-mine">Results</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</header>';

		// MAIN BODY
		echo '<section id="about" class="light-bg">';
		echo '<div class="container">';
		echo '<div class="section-title text-center">';
		echo '<h2>Comments</h2>';
		echo '</div>';

		// Table html boiler plate
		echo '<table class="table table-bordered">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>First Name</th>';
		echo '<th>Last Name</th>';
		echo '<th>Email</th>';
		echo '<th>Phone</th>';
		echo '<th>Comments</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody id="results">';
		echo '</tbody>';
		echo '</table>';

		// Close section and container div
		echo '</div>';
		echo '</section>';
	} else {
		redirect("index.php?page=login&errMsg=NullSid");
	}
?>

<script>
	function refresh_data() {
		$.ajax({
			type: 'post',
			url: 'https://ec2-18-118-170-87.us-east-2.compute.amazonaws.com/hw19/query_contacts.php',
			success: function( data ) {
				$('#results').html( data );
			}
		})
	}
	setInterval( function() { refresh_data(); }, 500 );
</script>