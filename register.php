<?php include "top.php"; ?>
<div class="container">
	<span class="h2">Register An Account</span>
	<form method="post" action="registerbe.php" onsubmit="return validate()">
		<span class="text">Name</span>
		<input class="form-control" name="name" id="name" required>
		
		<span class="text">Email</span>
		<input class="form-control" name="email" id="email" type="email" required>
		
		<span class="text">Username</span>
		<input class="form-control" name="uname" id="uname" required>
		
		<span class="text">Password</span>
		<input class="form-control" name="pword" id="pword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		
		<span class="text">Confirm Password</span>
		<input class="form-control" name="cpword" id="cpword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<br>
		<button class="btn btn-light">Submit</button>
	</form>
	</div>
	<script>
		function validate() {
			if (document.getElementById('pword').value!==document.getElementById('cpword').value) {
				return false;
				alert("Passwords do not match");
			} else {
				return true;
			}
			
			
		}
	
	
	</script>
<?php include "bottom.php"; ?>