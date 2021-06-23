
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
    .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.05);
    border-radius: .375rem;
}

.card-stats .card-body {
    padding: 1rem 1.5rem;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.text-muted {
    color: #8898aa!important;
}

.text-uppercase {
    text-transform: uppercase!important;
}

.font-weight-bold {
    font-weight: 600!important;
}

.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.h2, h2 {
    font-size: 1.25rem;
}

.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: none;
}

.icon-shape {
    padding: 12px;
    text-align: center;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.icon {
    width: 3rem;
    height: 3rem;
}
.text-white {
    color: #fff!important;
}

.text-sm {
    font-size: .875rem!important;
}

.text-muted {
    color: #8898aa!important;
}

.text-nowrap {
    white-space: nowrap!important;
}
</style>

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-sm-12">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jobs Application</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $contacts; ?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Internship Application</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $countinternships; ?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-12">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Contact Us Users</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $contacts; ?> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"></span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        
      </div>
    </div>
    

      <!-- Table -->
  <div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Internship Report</h3>
        </div>
        <div class="table-responsive">
          <table id="example" class="table align-items-center table-flush" >
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

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
		$('#example').DataTable();
		"searching": true,
			"ordering": true,
			"pagingType": "full_numbers",
	});
</script>
   
    