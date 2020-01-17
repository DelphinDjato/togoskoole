<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="{{ asset('images/faces/face1.jpg') }}" alt="profile image">
            </div>
            <div class="text-wrapper">
              <p class="profile-name">{{ Auth::user()->name }}</p>
              <div>
                <small class="designation text-muted">Administrateur</small>
                <span class="status-indicator online"></span>
              </div>
            </div>
          </div>


            <button type="button" class="btn btn-success btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ajouter <i class="mdi mdi-plus"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('call_inscription_form')}}">
                <i class="fa fa-reply fa-fw"></i>Inscription
              </a>
              <a class="dropdown-item" href="{{ route('call_teacher_form')}}">
                <i class="fa fa-reply fa-fw"></i>Enseignant
              </a>

            </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="menu-icon mdi mdi-content-copy"></i>
          <span class="menu-title">Inscriptions</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="menu-icon mdi mdi-content-copy"></i>
          <span class="menu-title">Enseignants</span>
        </a>
      </li>
    </ul>
    <br>
  </nav>
