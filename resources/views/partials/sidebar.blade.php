@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('transportation_access')
            <li class="{{ $request->segment(2) == 'transportations' ? 'active' : '' }}">
                <a href="{{ route('admin.transportations.index') }}">
                    <i class="fa fa-bus"></i>
                    <span class="title">@lang('quickadmin.transportation.title')</span>
                </a>
            </li>
            @endcan
            
            @can('association_access')
            <li class="{{ $request->segment(2) == 'associations' ? 'active' : '' }}">
                <a href="{{ route('admin.associations.index') }}">
                    <i class="fa fa-group"></i>
                    <span class="title">@lang('quickadmin.association.title')</span>
                </a>
            </li>
            @endcan
            
            @can('hotel_information_access')
            <li class="{{ $request->segment(2) == 'hotel_informations' ? 'active' : '' }}">
                <a href="{{ route('admin.hotel_informations.index') }}">
                    <i class="fa fa-info-circle"></i>
                    <span class="title">@lang('quickadmin.hotel-information.title')</span>
                </a>
            </li>
            @endcan
            
            @can('restaurant_infomation_access')
            <li class="{{ $request->segment(2) == 'restaurant_infomations' ? 'active' : '' }}">
                <a href="{{ route('admin.restaurant_infomations.index') }}">
                    <i class="fa fa-hotel"></i>
                    <span class="title">@lang('quickadmin.restaurant-infomation.title')</span>
                </a>
            </li>
            @endcan
            
            @can('emergency_information_access')
            <li class="{{ $request->segment(2) == 'emergency_informations' ? 'active' : '' }}">
                <a href="{{ route('admin.emergency_informations.index') }}">
                    <i class="fa fa-warning"></i>
                    <span class="title">@lang('quickadmin.emergency-information.title')</span>
                </a>
            </li>
            @endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
