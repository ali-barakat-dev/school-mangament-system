<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{__('mainpage.dashboard')}}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('dashboard.index')}}">{{__('mainpage.dashboard')}}</a></li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{__('mainpage.Fadwa Toqan')}} </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">{{__('mainpage.grades')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav"><li><a href="{{route('grad.index')}}">{{__('mainpage.grades_list')}}</a></li>
                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chalkboard">
                            <div class="pull-left"> <i class="fa fa-window-maximize"></i> {{__('mainpage.class_room')}}<span
                                
                                    class="right-nav-text"></span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="chalkboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('class.index')}}">{{__('mainpage.class_room')}} </a> </li>
                            <li> <a  href="{{route('section.index')}}">{{__('mainpage.sections')}} </a> </li>

                        </ul>
                        
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#students">
                            <div class="pull-left"> <i class="fa fa-user"></i> {{__('mainpage.students')}}<span
                                
                                    class="right-nav-text"></span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="students" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('students.create')}}"><i class=""></i><span class="left-nav-text"></span>{{__('mainpage.students')}}</a></li>
                        </ul>
                        
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#teacher">
                            <div class="pull-left"> <i class="ti-comments"></i> {{__('mainpage.Teachers')}}<span
                                
                                    class="right-nav-text"></span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="teacher" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('teacher.index')}}"><i class=""></i><span class="left-nav-text"></span>{{__('mainpage.Teachers')}}</a></li>
                        </ul>
                        
                    </li>

                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box.html"><i class="fa fa-"></i><span class="right-nav-text"></span>{{__('mainpage.Exams')}}
                             </a>
                    </li>
                    <!-- menu item Charts-->
                    

                   
                            <li> <a  href="chart-js.html"><i class="ti-comments"></i><span class="right-nav-text"></span>{{__('mainpage.Online classes')}}</a></li>

                               {{-- menu item parant --}}
                               <li>
                                <a href="javascript:void(1);" data-toggle="collapse" data-target="#item_parant">
                                    <div class="pull-left"> <i class="ti-user"></i> {{__('mainpage.Parents')}}<span
                                        
                                            class="right-nav-text"></span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
        
                                <ul id="item_parant" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="{{route('add.parent')}}">{{__('mainpage.Parents')}} </a> </li>        
                                </ul>
                                
                            </li>


                            <li> <a  href="chart-js.html"><i class="fa fa-user"></i><span class="right-nav-text"></span>{{__('mainpage.setings')}}</a></li>
                            
                    
                   
                            <li> <a href="fontesome.html"><i class="fa fa-calendar-days"></i> {{__('mainpage.Absence')}}</a> </li>
                       

                    
                
                </ul>
            </div>
        </div>

  
