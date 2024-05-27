<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-5 me-0">
  <div class="d-flex flex-column h-100">
      <a href="{{ route("dashboard")}} " class="mb-0 brand-icon">
          
          <span class="logo-text">NHK NETWORKING</span>
      </a>
      <!-- Menu: main ul -->

      <ul class="menu-list flex-grow-1 mt-3">
          <li class="collapsed">
              <a class="m-link active" 
                  href="{{ route('welcome')}} ">
                  <i class="icofont-home fs-5"></i> <span>Tableau de bord</span></a>
          </li>
          <li class="collapsed">
              <a class="m-link" data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                  <i class="icofont-users-alt-5"></i><span>Utilisateurs</span> <span
                      class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="project-Components">
                  <li><a class="ms-link" href="{{ route("user-list")}} "><span>Admin</span></a></li>
                  <li><a class="ms-link" href="task.html"><span>Staf</span></a></li>
              </ul>
          </li>

          <li class="collapsed">
              <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i
                      class="icofont-basket"></i> <span>Commandes</span> <span
                      class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="tikit-Components">
                  <li><a class="ms-link" href="tickets.html"> <span>Tickets View</span></a></li>
                  <li><a class="ms-link" href="ticket-detail.html"> <span>Ticket Detail</span></a></li>
              </ul>
          </li>
          <li class="collapsed">
              <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                      class="icofont-user-male"></i> <span>Clients</span> <span
                      class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="client-Components">
                  <li><a class="ms-link" href="ourclients.html"> <span>Clients</span></a></li>
                  <li><a class="ms-link" href="profile.html"> <span>Client Profile</span></a></li>
              </ul>
          </li>
        
      </ul>

      <!-- Theme: Switch Theme -->
      <ul class="list-unstyled mb-0">
          <li class="d-flex align-items-center justify-content-center">
              <div class="form-check form-switch theme-switch">
                  <input class="form-check-input" type="checkbox" id="theme-switch">
                  <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
              </div>
          </li>
          <li class="d-flex align-items-center justify-content-center">
              <div class="form-check form-switch theme-rtl">
                  <input class="form-check-input" type="checkbox" id="theme-rtl">
                  <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
              </div>
          </li>
      </ul>

      <!-- Menu: menu collepce btn -->
      <button type="button" class="btn btn-link sidebar-mini-btn text-light">
          <span class="ms-2"><i class="icofont-bubble-right"></i></span>
      </button>
  </div>
</div>