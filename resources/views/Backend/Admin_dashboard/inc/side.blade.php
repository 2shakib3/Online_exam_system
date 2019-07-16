  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('Backend') }}/dist/img/my.JPG" class="img-circle" alt="User Image" style="height:50px">
            </div>
            <div class="pull-left info">
              <p>Shakib Hasan</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('admin.catagory') }}">
                <i class="fa fa-laptop"></i>
                <span>Catagory</span>
              </a>
            </li>
            <li class="treeview">
                <a href="{{ route('admin.subcatagory') }}">
                  <i class="fa fa-laptop"></i>
                  <span>Sub-Catagory</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Subject</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Exam</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Question</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>View Result</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Todo</span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>mail</span>
                </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
