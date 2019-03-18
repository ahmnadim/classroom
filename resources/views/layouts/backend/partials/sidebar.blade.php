 <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">

<!-- teacher menu.......................             -->

                    @if(Request::is('teacher*'))
                        <li><a href="{{route('teacher.dashboard')}}"><i class="{{Request::is('teacher/dashboard')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li> 

                        <li><a href="{{route('teacher.course.index')}}"><i class="{{Request::is('teacher/course')? 'active':''}} icon-tasks"></i><span class="hidden-tablet"> Courses</span></a></li>

                        <li><a href="{{route('teacher.post.create')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Post</span></a></li>
                        
                        <li><a href="{{ route('teacher.allassignment') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Assignments</span></a></li>
                        <li><a href="{{ route('teacher.attandance') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Attendents</span></a></li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Students</span><span class="label label-important"> 3 </span></a>
                            <ul>
                                <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                                <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="{{route('teacher.profile.index')}}"><i class="{{Request::is('teacher/profile')? 'active':''}} icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>
                    @endif

<!-- students menu.................... -->

                    @if(Request::is('student*'))
                        <li><a href="{{route('student.dashboard')}}"><i class="{{Request::is('student/dashboard')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

                        <li><a href="{{route('student.courses')}}"><i class="{{Request::is('student/courses')? 'active':''}} icon-tasks"></i><span class="hidden-tablet"> Courses</span></a></li>

                        <li><a href="{{route('student.assignment.index')}}"><i class="{{Request::is('student/assignment*')? 'active':''}} icon-eye-open"></i><span class="hidden-tablet"> Assignment</span></a></li>

                        <li><a href="{{route('student.marks.index')}}"><i class="{{Request::is('student/marks*')? 'active':''}} icon-eye-open"></i><span class="hidden-tablet"> Marks</span></a></li>
<!-- 
                         <li><a href="{{route('student.posts')}}"><i class="{{Request::is('student/posts')? 'active':''}} icon-envelope"></i><span class="hidden-tablet"> Related Posts</span></a></li> -->

                        
                    @endif
{{-- Admin route.............................--}}

                    @if(Request::is('admin*'))
                         <li><a href="{{route('admin.dashboard')}}"><i class="{{Request::is('admin.dashboard')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

                          <li><a href="{{route('admin.teachers.index')}}"><i class="{{Request::is('admin.teachers')? 'active':''}} icon-bar-chart"></i><span class="hidden-tablet"> Teachers</span></a></li>

                        
                        
                    @endif
                    </ul>
                </div>
            </div>