@include('partials.head')
<div class="container">
    <aside>
        <div class="top">
            <div class="logo">    
                    <h2>AM<span class="danger">LAC</span></h2>
                    <p>Senior High School</p>                
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div> 
        </div>

        <div class="sidebar" id="myDiv">
    
            <a href="{{'/Dashboard'}}" class="btn">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
            </a>
            <a href="{{'/Class'}}" class="btn">
                <span class="material-icons-sharp">class</span>
                <h3>Classes</h3>
            </a>
            <a href="{{'/Course'}}" class="btn">
                <span class="material-icons-sharp">school</span>
                <h3>Course</h3>
            </a>
            <a href="{{'/Professor'}}" class="btn">
                <span class="material-icons-sharp">person_pin</span>
                <h3>Professor</h3>
            </a>
       
            <a href="{{ '/Student' }}" class="btn active">
                <span class="material-icons-sharp">people</span>   
                <h3>Students</h3>
            </a>



            <a href="{{'/Grading'}}" class="btn"">
                <span class="material-icons-sharp">insights</span>
                <h3>Grading</h3>
            </a>
            <a href="{{'/Setting'}}" class="btn">
                <span class="material-icons-sharp">settings</span>
                <h3>Settings</h3>
            </a>
            
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </button>
                </form>
        </div>
    </aside>
    <!-- END OF THE ASIDE  -->


<main>
    <h1>Student</h1>

    <div class="content">
       <div class="create-student">
<!-- Trigger/Open The Modal -->
<button id="myBtn" class="btn-create"><span>Create Student</span></button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closes">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


       </div>
    </div>

    <div class="recent-orders">
        <h2>Student List</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_no }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td class="warning">{{ $student->age }}</td>
                    <td class="primary">{{ $student->gender }}</td>
                    <td class="primary">{{ $student->email }}</td>
                    <td>{{ $student->contact_no }}</td>
                    <th></th>
                    <th></th>
                    <td class="warning">Edit</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>

       
        <ul class="page">
            <li>{{ $students->links('pagination::bootstrap-4') }}</li>        
        </ul>
       
       
    </div>
</main>

<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>

        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>

        <div class="profile">
            <div class="info">
                <p>hey, <b>{{ Auth::user()->firstname }}</b></p>
                <small class="text-muted">Admin</small>
            </div>

            <div class="profile-photo">
                <img src="/images/caloocan.jpeg">
            </div>
        </div>
    </div>


@include('partials.foot')