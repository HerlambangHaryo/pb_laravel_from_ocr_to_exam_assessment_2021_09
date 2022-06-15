<ul class="nav">
    <li class="nav-header">Navigation</li>

    <li class="@if($title == 'Dashboard') active @endif">
        <a href="{{ route('Dashboard.index') }}">
            <i class="ion-ios-analytics bg-blue-transparent-9"></i> 
            <span>Dashboard</span> 
        </a>
    </li>
    
    <li class="@if($title == 'Universities') active @endif">
        <a href="{{ route('Universities.index') }}">
            <i class="ion-ios-business bg-purple-transparent-9"></i> 
            <span>Universities</span> 
        </a>
    </li>

    <li class="@if($title == 'Faculties') active @endif">
        <a href="{{ route('Faculties.index') }}">
            <i class="ion-ios-home bg-aqua-transparent-9"></i> 
            <span>Faculties</span> 
        </a>
    </li>

    <li class="@if($title == 'Courses') active @endif">
        <a href="{{ route('Courses.index') }}">
            <i class="ion-ios-journal bg-green-transparent-9"></i> 
            <span>Courses</span> 
        </a>
    </li>

    <li class="@if($title == 'Exams') active @endif">
        <a href="{{ route('Exams.index') }}">
            <i class="ion-ios-paper bg-red-transparent-9"></i> 
            <span>Exams</span> 
        </a>
    </li>

    <li class="@if($title == 'Grades') active @endif">
        <a href="{{ route('Grades.index') }}">
            <i class="ion-ios-medal bg-orange-transparent-9"></i> 
            <span>Grades</span> 
        </a>
    </li>


    
    <!-- begin sidebar minify button -->
    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
    <!-- end sidebar minify button -->
</ul>