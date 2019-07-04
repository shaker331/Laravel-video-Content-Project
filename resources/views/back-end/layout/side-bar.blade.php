
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">
          <a href="{{route('admin.home')}}" class="simple-text logo-normal">
              Admin Home
              </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('admin.home')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('users.index')}}">
                <i class="material-icons">Users</i>
                <p>Users</p>
              </a>
            </li>
            
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('category.index')}}">
                <i class="material-icons">Categories</i>
                <p>Categories</p>
              </a>
            </li>
            
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('skill.index')}}">
                <i class="material-icons">Skills</i>
                <p>skills</p>
              </a>
            </li>
            
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('tag.index')}}">
                <i class="material-icons">Tags</i>
                <p>Tags</p>
              </a>
            </li>
            
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('page.index')}}">
                <i class="material-icons">Pages</i>
                <p>Pages</p>
              </a>
            </li>
            
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('video.index')}}">
                <i class="material-icons">Videos</i>
                <p>Videos</p>
              </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('message.index')}}">
                  <i class="material-icons">Messages</i>
                  <p>Messages</p>
                </a>
              </li>
            <!-- your sidebar here -->
          </ul>
        </div>
      </div>