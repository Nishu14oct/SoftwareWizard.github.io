<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Contact Report</h3>
        </div>
        <div class="table-responsive">
          <table id="example" class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                 <th scope="col">Created Date</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            if($contact_us!==false) {
              foreach ($contact_us as $contact) {
                
           ?>
          <tr>  
            <td><?=$contact->id;?></td>
            <td><?=$contact->name;?></td>
            <td><?=$contact->email?></td>
            <td><?=$contact->contact_number;?></td>
            <td><?=$contact->subject;?></td>
            <td><?=$contact->message;?></td>
            <td><?=$contact->created_at;?> </td>
          </tr>
          <?php }  } else { ?>
            <tr>
              <td colspan="7">No Record Found</td>
            </tr>
          <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div> -->
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>