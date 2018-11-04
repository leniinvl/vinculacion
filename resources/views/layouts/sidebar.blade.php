<aside class="main-sidebar " id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://icon-icons.com/icons2/827/PNG/256/user_icon-icons.com_66546.png" class="img-circle"
                     alt="User Image"/>
                {{--<img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"
                     alt="User Image"/>--}}     
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>SICGEO</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu menu-style" >
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>