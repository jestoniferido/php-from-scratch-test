<?php include 'partials/head.php'; ?>
	<section>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th class="text-center">Edit</th>
						<th class="text-center">Delete</th>
					</tr>
					<?php foreach($users as $user): ?>
						<tr>
							<td><?= $user->first_name ?></td>
							<td><?= $user->last_name ?></td>
							<td><?= $user->email_id ?></td>
							<td><?= $user->contact_no ?></td>
							<td align="center">
		               			<a href="/edit/user?id=<?=$user->id ?>"
		               				<i class="glyphicon glyphicon-edit"></i>
		               			</a>
		               		</td>
		               		<td align="center">
		               			<a href="/remove/user"><i class="glyphicon glyphicon-remove-circle"></i></a>
		               		</td>
						</tr>
					<?php endforeach ; ?>
				</table>
			</div>
		</div>
	</section>	
	<section>
		<div class="clearfix"></div>
		<div class="container">
			<a href="add/user" class="btn btn-large btn-default">
				<i class="glyphicon glyphicon-plus"></i> 
				&nbsp; Add Records
			</a>
		</div>
	</section>
<?php include 'partials/footer.php'; ?>