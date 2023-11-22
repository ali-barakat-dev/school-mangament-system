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
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"> <i class="ti-calendar"></i> {{__('mainpage.class_room')}}<span
                                
                                    class="right-nav-text"></span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('class.index')}}">{{__('mainpage.class_room')}} </a> </li>
                            <li> <a href="{{route('section.index')}}">{{__('mainpage.sections')}} </a> </li>

                        </ul>
                        
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list.html"><i class="fa fa-edit"></i><span class="right-nav-text">{{__('mainpage.students')}}</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">{{__('mainpage.Teachers')}}
                            </span></a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">{{__('mainpage.Exams')}}
                                <span></span> </a>
                    </li>
                    <!-- menu item Charts-->
                    

                   
                            <li> <a  href="chart-js.html"><i class="ti-comments"></i><span class="right-nav-text">{{__('mainpage.Online classes')}}</a> </span> </li>

                               {{-- menu item parant --}}
                               <li>
                                <a href="javascript:void(1);" data-toggle="collapse" data-target="#item_parant">
                                    <div class="pull-left"> <i class="ti-calendar"></i> {{__('mainpage.Parents')}}<span
                                        
                                            class="right-nav-text"></span></div>
                                    <div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
        
                                <ul id="item_parant" class="collapse" data-parent="#sidebarnav">
                                    <li> <a href="">{{__('mainpage.Parents')}} </a> </li>
                                    <li> <a href="{{route('add_parent')}}">اضافة ولي الامر </a> </li>
        
                                </ul>
                                
                            </li>


                            <li> <a  href="chart-js.html"><i class="ti-comments"></i><span class="right-nav-text">{{__('mainpage.setings')}}</a> </span> </li>
                            
                    
                   
                            <li> <a href="fontawesome-icon.html"><i class="ti-comments"></i> {{__('mainpage.Absence')}}</a> </li>
                       

                    
                
                </ul>
            </div>
        </div>

  
