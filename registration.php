<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trip Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background: radial-gradient(white,lemonchiffon,coral);">
					<center><h1>Trip Registration</h1></center>
	<center><img src="data:image/jpeg;base64,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" width=1140 height=180>
	
	<center><div>
		<?php
		
	?>

	</div>
	<div>
		<form action="Registration.php" method="post">
			<div class="container">

				<div class="row">
					

				
				<label for="firstname"><b>First Name</b>></label>
				<input class="form-control" id="firstname" type="text" name="firstname" required>

				<label for="Lastname"><b>Last Name</b>></label>
				<input  class="form-control" id="lastname" type="text" name="lastname" required>

				<label for="email"><b>Email</b>></label>
				<input  class="form-control" id="email" type="email" name="email" required>

				<label for="phonenumber"><b>Phone number</b>></label>
				<input  class="form-control" id="phonenumber" type="number" name="phonenumber" required>
			
			    <label for="semester"><b>Semester</b>></label>
				<input  class="form-control" id="semester" type="number" name="semester" required>
				<hr class="mb-3">

				<input class="btn-btn-primary" type="submit" id="register" name="create" value="Sign UP">
			</div>
		</div>
	</div>
		</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();


			if (valid) {
				var firstname =$('#firstname').val();
			var lastname =$('#lastname').val();
			var email =$('#email').val();
			var phonenumber =$('phonenumber').val();
			var semester =$('#semester').val();

				e.preventDefault();
				$.ajax({
					type:'POST',
					url:'process.php',
					data:{firstname: firstname, lastname: lastname, email:email, phonenumber: phonenumber,semester:semester},
					success:function(data){
							Swal.fire({
			               'title':'Thank YOU',
			              'text':data,
			            'type':'success'

		})

					},
						error:function(data){
								Swal.fire({
			'title':'Error',
			'text':'Please check the entered values',
			'type':'error'

		})

					},
				});
				
			}else{
				
			}
			
			
			
		
		
		});
	});
</script>
</center>
</center>
</body>
</html>