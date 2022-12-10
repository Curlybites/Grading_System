@include('partials.head')
<div class="container">
    <aside>
        <div class="top">
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">
                    arrow_back
                    </span>
            </div> 
            <div class="logo">   
                    <div class="amlac">
                        <img src="/images/logo.png" alt=""> 
                    </div>
                    <h2>AM<span class="danger">LAC</span></h2>
                    <p>Senior High School</p>                
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
                <h3>Subject</h3>
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
<button id="myBtn" class="btn-create"> <span class="material-icons-sharp">add_circle_outline</span>
    <span class="t">New Student</pan></button>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="closes">&times;</span>

    <h1 class="title-stud">Create Student</h1>

<div class="create-stud">
<form action="/Student/create" method="POST">
    @csrf
    <label for="regno">Student Number</label>
    <input class="input-form" type="text" id="regno" name="regno" placeholder="Your Student number.." required>

    <label for="name">Name</label>
    <input class="input-form" type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="username">Username</label>
    <input class="input-form" type="text" id="username" name="username" placeholder="Your Username.." required>

    <label for="a">Email</label>
    <input class="input-form" type="email" id="email" name="email" placeholder="Your Email.." required>

    <label for="password">Password</label>
    <input class="input-form" type="password" id="password" name="password" placeholder="Your Password.." required>

    <label for="phone">Phone</label>
    <input class="input-form" type="text" id="phone" name="phone" placeholder="Your Phone.." required>

    <label for="sem">Semester</label>
    <input class="input-form" type="text" id="sem" name="sem" placeholder="Your Semester.." required>

    <label for="dept">Department</label>
    <input class="input-form" type="text" id="dept" name="dept" placeholder="Your Department.." required>

    <label for="address">Address</label>
    <input class="input-form" type="text" id="address" name="address" placeholder="Your Address.." required>

    <label for="utype">Utype</label>
    <input class="input-form" type="text" id="utype" name="utype" placeholder="Your Utype.." required>


    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
        add
        </span>Add Student</button>
  </form>
</div>

</div>


</div>
</div>

    <div class="recent-orders">
        <h2>Student List</h2>

        <table class="table tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Number</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Semester</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>Utype</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="primary">{{ $student->id }}</td>
                    <td class="primary">{{ $student->regno }}</td>
                    <td class="primary">{{ $student->name }}</td>
                    <td class="primary">{{ $student->username }}</td>
                    <td class="primary">{{ $student->email }}</td>
                    <td class="primary">{{ $student->phone }}</td>
                    <td class="primary">{{ $student->sem }}</td>
                    <td class="primary">{{ $student->dept }}</td>
                    <td class="primary">{{ $student->address }}</td>
                    <td class="primary">{{ $student->utype }}</td>
                    <td class="warning"><a href="/stud/{{ $student->id }}" class="btn-warning">Edit</a></td>
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
                <p>hey, <b>{{ Auth::user()->name }}</b></p>
                <small class="text-muted">Admin</small>
            </div>

            <div class="profile-photo">
                <img src="/images/caloocan.jpeg">
            </div>
        </div>
    </div>


@include('partials.foot')
