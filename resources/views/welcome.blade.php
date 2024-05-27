@extends('admin.dashboard')



@section('content')

   <!-- Body: Body -->
   <div class="body d-flex py-3">
    <div class="container-xxl">
        
        <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-data fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Total Projects</h6>
                            <span class="text-white">550</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-chart-flow fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Coming Projects</h6>
                            <span class="text-white">210</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body text-white d-flex align-items-center">
                        <i class="icofont-chart-flow-2 fs-3"></i>
                        <div class="d-flex flex-column ms-3">
                            <h6 class="mb-0">Progress Projects</h6>
                            <span class="text-white">8456 Files</span>
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        <div class="row g-3 mb-3 row-deck">
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                       <h6 class="mb-3 fw-bold ">Income Analytics</h6>
                        <div class="d-flex justify-content-end text-center">
                            <div class="p-2">
                                <h6 class="mb-0 fw-bold">$5,318</h6>
                                <small class="text-muted">Income</small>
                            </div>
                            <div class="p-2 ms-4">
                                <h6 class="mb-0 fw-bold">$2,840</h6>
                                <small class="text-muted">Expense</small>
                            </div>
                        </div>
                        <div class="mt-3" id="incomeanalytics"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <div class="info-header">
                            <h6 class="mb-0 fw-bold ">Project Timeline</h6>
                        </div>
                        <button class="btn btn-sm btn-link  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 7 days</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 30 days</a></li>
                            <li><a class="dropdown-item py-2 rounded" href="#">Last 60 days</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="apex-timeline"></div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
       
        <div class="row g-3 mb-3 row-deck">
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightyellow color-defult"><i class="bi bi-journal-check fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Total Task</div>
                                <h5 class="mb-0 ">122</h5>
                            </div>
                            <a href="task.html" title="view-members" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightblue color-defult"><i class="bi bi-list-check fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Completed Task</div>
                                <h5 class="mb-0 ">376</h5>
                            </div>
                            <a href="task.html" title="space-used" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar lg  rounded-1 no-thumbnail bg-lightgreen color-defult"><i class="bi bi-clipboard-data fs-4"></i></div>
                            <div class="flex-fill ms-4">
                                <div class="">Progress Task</div>
                                <h5 class="mb-0 ">74</h5>
                            </div>
                            <a href="task.html" title="renewal-date" class="btn btn-link text-decoration-none  rounded-1"><i class="icofont-hand-drawn-right fs-2 "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
        
        
    </div>             
</div>

@endsection