<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview active">
        <a href="{!! action('IntroController@edit', 1) !!}">
          <i class="fa fa-circle-o"></i> <span>Intro</span>
        </a>
      </li>
      <li class="treeview active">
        <a href="{!! action('AboutController@edit', 1) !!}">
          <i class="fa fa-circle-o"></i> <span>About</span>
        </a>
      </li>
      <li class="treeview active">
        <a href="{{ url('/dashboard/editions') }}">
          <i class="fa fa-circle-o"></i> <span>Editions</span>
        </a>
      </li>
{{--       <li class="treeview active">
        <a href="#">
          <i class="fa fa-circle-o"></i> <span>Contact</span>
        </a>
      </li> --}}


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
