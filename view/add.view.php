<?php include 'partials/head.php'; ?>

	<section>
		<div class="container-fluid half-custom-container">
			<form method="POST" action="/save/user">
				<div class="form-group">
		    		<label for="Firstname">First Name</label>
		    		<input 
		    			type="text" 
		    			class="form-control custom-input" 
		    			name="first_name" 
		    			placeholder="First Name" required />
		  		</div>
				<div class="form-group">
		    		<label for="Lastname">Last Name</label>
		    		<input 
		    			type="text" 
		    			class="form-control custom-input" 
		    			name="last_name" 
		    			placeholder="Last Name" required />
		  		</div>
		  		<div class="form-group">
		    		<label for="Email">Email address</label>
		    		<input 
		    			type="email" 
		    			class="form-control custom-input" 
		    			name="email_id" 
		    			placeholder="Email" required />
		  		</div>
		  		<div class="form-group">
		    		<label for="Contactnumber">Contact Number</label>
		   		 	<input 
		   		 		type="number" 
		   		 		class="form-control custom-input" 
		   		 		name="contact_no" 
		   		 		placeholder="Contact No." 
		   		 		min="9" required />
		  		</div>
		  		<button type="submit" class="btn btn-large btn-default">
		  			<i class="glyphicon glyphicon-save"></i> 
					&nbsp; Save
		  		</button>

		  		<a href="/" class="btn btn-large btn-default">
		  			<i class="glyphicon glyphicon-circle-arrow-left"></i> 
					&nbsp; Cancel
		  		</a>
			</form>
		</div>
	</section>

<?php include 'partials/footer.php'; ?>