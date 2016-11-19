<div class="container">
	<div class="grid">
		<div class="row">
	        <div class="cell">
	            <h3><small><a href=""><span class="fa fa-arrow-circle-o-left"></span> Kembali ke Menu</a></small></h3>
	        </div>
	    </div>
		<div class="row form-title">
	        <div class="cell">
	            <h1 style="margin-bottom: 20px;">Daftar Supplier</h1>
	            <hr class="bg-teal">    
	        </div>
	    </div>
		<div class="row">
			<div class="cell" style="overflow-x: scroll;">
				<table class="table hovered border">
					<thead>
						<tr>
							<th class="sortable-column">No</th>
							<th class="sortable-column">Nama</th>
							<th class="sortable-column">Telephone</th>
							<th class="sortable-column">Email</th>
							<th class="sortable-column">Alamat</th>
							<th class="sortable-column">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						<?php foreach($suppliers as $supplier): ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $supplier->name ?></td>
							<td><a href="tel:<?php echo $supplier->phone ?>"><?php echo $supplier->phone ?></a></td>
							<td><?php echo $supplier->email ?></td>
							<td><?php echo $supplier->address ?></td>
							<td><?php echo $supplier->description ?></td>
						</tr>
						<?php $i++;?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>