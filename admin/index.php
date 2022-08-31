<?php include('header.php');?>
          <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
              <h4 class="mb-3 mb-md-0">Welcome <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];}?>!</h4>
            </div>
            
          </div>
          <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                  <h6 class="card-title mb-0">Answer Graph</h6>
                </div>
                <div id="revenueChart" ></div>
              </div>
            </div>
          </div>
        </div> <!-- row -->
               <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <h6 class="card-title">All Answers</h6>
                           <div class="table-responsive">
                              <table id="dataTableExample" class="table">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Country</th>
                                       <th>Feedback</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Tiger Nixon</td>
                                       <td>sabbir@gmail.com</td>
                                       <td>Bangladesh</td>
                                       <td>61%</td>
                                    </tr>
                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
          
               <?php include('footer.php');?>