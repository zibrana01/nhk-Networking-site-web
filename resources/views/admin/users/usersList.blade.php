@extends('admin.dashboard')

@section('content')

 <!-- Body: Body -->       
 <div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Tickets</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#tickadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Tickets</button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
          <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Tickit Id</th>
                                    <th>Subject</th>
                                    <th>Assigned</th> 
                                    <th>Created Date</th> 
                                    <th>Status</th>   
                                    <th>Actions</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-0002</a>
                                    </td>
                                    <td>
                                       Internet Not Working 
                                   </td>
                                   <td>
                                       <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                       <span class="fw-bold ms-1">Joan Dyer</span>
                                   </td>
                                   <td>
                                        12/03/2021
                                   </td>
                                   <td><span class="badge bg-warning">In Progress</span></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-0006</a>
                                    </td>
                                    <td>
                                        Salary Amount wrong 
                                    </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                        <span class="fw-bold ms-1">Ryan	Randall</span>
                                    </td>
                                    <td>
                                        12/03/2021
                                   </td>
                                   <td><span class="badge bg-warning">In Progress</span></td>
                                     <td>
                                         <div class="btn-group" role="group" aria-label="Basic outlined example">
                                             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                             <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-0004</a>
                                    </td>
                                    <td>
                                       Mouse Not working
                                    </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                        <span class="fw-bold ms-1">Phil	Glover</span>
                                    </td>
                                    <td>
                                        16/03/2021
                                   </td>
                                   <td><span class="badge bg-warning">In Progress</span></td>
                                     <td>
                                         <div class="btn-group" role="group" aria-label="Basic outlined example">
                                             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                             <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-00011</a>
                                    </td>
                                    <td>
                                        punching time not proper
                                     </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                        <span class="fw-bold ms-1">Victor Rampling</span>
                                    </td>
                                    <td>
                                        25/02/2021
                                    </td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                     <td>
                                         <div class="btn-group" role="group" aria-label="Basic outlined example">
                                             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                             <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-00021</a>
                                    </td>
                                    <td>
                                        Leave Balance Wrong
                                      </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                        <span class="fw-bold ms-1">Sally Graham</span>
                                    </td>
                                    <td>
                                        16/02/2021
                                      </td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                     <td>
                                         <div class="btn-group" role="group" aria-label="Basic outlined example">
                                             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                             <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td>
                                        <a href="ticket-detail.html" class="fw-bold text-secondary">#Tc-00041</a>
                                    </td>
                                    <td>
                                        Display Blur
                                    </td>
                                    <td>
                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                        <span class="fw-bold ms-1">Robert Anderson</span>
                                    </td>
                                    <td>
                                      18/01/2021
                                    </td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                     <td>
                                         <div class="btn-group" role="group" aria-label="Basic outlined example">
                                             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edittickit"><i class="icofont-edit text-success"></i></button>
                                             <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                         </div>
                                     </td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>
        </div><!-- Row End -->
    </div>
</div>
    
@endsection