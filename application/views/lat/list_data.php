<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Depan</th>
					<th>Nama Belakang</th>
					<th>Email</th>
					<th>No Hp</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="item in items">
					<td>{{user.id}}</td>
                    <td>{{user.firstname}}</td>
                    <td>{{user.lastname}}</td>
                    <td>{{user.email}}</td>
                    <td>{{user.contact}}</td>
                    <td>{{user.address}}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>