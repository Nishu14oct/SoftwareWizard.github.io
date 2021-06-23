<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Internship Report</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">College Name</th>
                <th scope="col">Stream</th>
             	<th scope="col">Semester</th>
             	<th scope="col">Interest Area</th>
             	<th scope="col">10th CGPA</th>
             	<th scope="col">12th CGPA</th>
             	<th scope="col">Semester CGPA</th>
             	<th scope="col">Internship Duration</th>
             	<th scope="col">Class During Internship</th>
             	<th scope="col">Upload Resume</th>
             	<th scope="col">Created Date</th>
              </tr>
            </thead>
            <tbody>
              	<?php 
				if($internships!==false) {
					foreach ($internships as $internship) {				
			 	?>
              	<tr>	
            		<td><?=$internship->id;?></td>
				    <td><?=$internship->name.' '.$internship->last_name;?></td>
					<td><?=$internship->email?></td>
					<td><?=$internship->contact_no;?></td>
					<td><?=$internship->college_name;?></td>
					<td><?=$internship->stream;?></td>
					<td><?=$internship->semester;?></td>
					<td><?=$internship->interest_area;?></td>
					<td><?=$internship->cgpa_10;?></td>
					<td><?=$internship->cgpa_12;?></td>
					<td><?=$internship->sem_cgpa;?></td>
					<td><?=$internship->internship_duration;?></td>
					<td><?=$internship->looking_for;?></td>
					<td> <a href="<?=base_url($internship->upload_resume);?>" download> <i class="fa fa-download" aria-hidden="true"></i> </a></td>
					<td><?=$internship->created_at;?> </td>
				</tr>
				<?php }  } else { ?>
					<tr>
						<td colspan="15">No Record Found</td>
					</tr>
				<?php } ?>
            </tbody>
          </table>
        </div>
    
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function() {
		$('#example').DataTable();
	});
</script>