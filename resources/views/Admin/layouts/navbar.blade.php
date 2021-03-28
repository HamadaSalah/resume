
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="{{route('admin.index')}}" class="simple-text logo-normal">
          Admin Control Panel
        </a></div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="7b0af14b-9c6f-ffbe-cf19-8c4b1a5af92e">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
             
            </li>
            <li class="nav-item">
              <a href="{{route('admin.home.index')}}" class="nav-link">
                  <i class="material-icons">home</i>
                  <p>
                    Home 
                  </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.about.index')}}" class="nav-link">
                  <i class="material-icons">recent_actors</i>
                  <p>
                    About 
                  </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.skills.index')}}" class="nav-link">
                  <i class="material-icons">handyman</i>
                  <p>
                    Skills 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.skills.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Skills</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.skills.create')}}" class="nav-link">
                      <i class="fas fa-plus-square"></i>
                      <p>Add New Skill</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.knowledge.index')}}" class="nav-link">
                  <i class="material-icons">lightbulb</i>
                  <p>
                    Knowledge 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.knowledge.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Knowledge</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.knowledge.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Knowledge</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.langs.index')}}" class="nav-link">
                  <i class="material-icons">g_translate</i>
                  <p>
                    Languages 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.langs.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Languages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.langs.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Language</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.experience.index')}}" class="nav-link">
                  <i class="material-icons">engineering</i>
                  <p>
                    Experience 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.experience.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Experience</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.experience.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Experience</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.education.index')}}" class="nav-link">
                  <i class="material-icons">school</i>
                  <p>
                    Education 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.education.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Degrees</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.education.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Degree</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.portfolio.index')}}" class="nav-link">
                  <i class="material-icons">work_outline</i>
                  <p>
                    Portfolio 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.portfolio.index')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>All Portfolio</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.portfolio.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Portfolio</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.contact.index')}}" class="nav-link">
                  <i class="material-icons">contact_mail</i>
                  <p>
                    Contact 
                  </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.blog.index')}}" class="nav-link">
                  <i class="material-icons">home</i>
                  <p>
                    Blog 
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{route('admin.blog.index')}}" class="nav-link">
                      <i class="material-icons">dynamic_feed</i>
                      <p>All Blogs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.blog.create')}}" class="nav-link">
                      <i class="material-icons">home</i>
                      <p>Add New Blog</p>
                    </a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.settings.index')}}" class="nav-link">
                  <i class="material-icons">settings</i>
                  <p>
                    Settings 
                  </p>
                </a>
            </li>
      </nav>

      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div></div>