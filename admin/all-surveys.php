
<?php include('db.php'); ?>

<?php include('header.php');?>

          <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
              <h4 class="mb-3 mb-md-0">Welcome <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];}?>!</h4>
            </div>
            
          </div>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">All Surveys</h6>
                                <div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>#ID</th>
													<th>Title</th>
													<th>Description</th>
													<th>Image</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$records = mysqli_query($conn,"select * from survey"); // fetch data from database
													while($data = mysqli_fetch_array($records)){
												?>
												<tr>
													<th><?php echo $data['id']; ?></th>
													<td><?php echo $data['title']; ?></td>
													<td><?php echo $data['description']; ?></td>
													<td><img src="images/<?php echo $data['image']; ?>" alt="image"></td>
													<td>
                                                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                                                    </td>
												</tr>
												<?php
													}
													?>
												
											</tbody>
										</table>
								</div>
              </div>
            </div>
					</div>
          
<?php include('footer.php');?>