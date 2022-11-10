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
                <h3>Subject</h3>
            </a>
            <a href="{{'/Professor'}}" class="btn active">
                <span class="material-icons-sharp">person_pin</span>
                <h3>Professor</h3>
            </a>

            <a href="{{ '/Student' }}" class="btn">
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
        <h1>Professor</h1>

        <div class="content">
           <div class="create-student">
    <!-- Trigger/Open The Modal -->
    <button id="myBtn" class="btn-create"> <span class="material-icons-sharp">add_circle_outline</span>
        <span class="t">New Professor</pan></button></button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="closes">&times;</span>

        <h1 class="title-stud">Create Professor</h1>

    <div class="create-stud">
      <form action="/Professor/create" method="POST">
        @csrf
        <label for="fname">First Name</label>
        <input class="input-form" type="text" id="fname" name="fname" placeholder="Given Name" required>

        <label for="lname">Last Name</label>
        <input class="input-form" type="text" id="lname" name="lname" placeholder="Family Name" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="" selected disabled>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <label for="email">Email</label>
        <input class="input-form" type="email" id="email" name="email" placeholder="sample@gmail.com" required>

        <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
            add
            </span>Add Professor</button>
      </form>
    </div>

    </div>


    </div>
    </div>

        <div class="recent-orders">
            <h2>Subject List</h2>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($professors as $prof)
                    <tr>
                        <td>{{ $prof->id }}</td>
                        <td>{{ $prof->fname }}</td>
                        <td>{{ $prof->lname }}</td>
                        <td>{{ $prof->gender}}</td>
                        <td>{{ $prof->email }}</td>
                        <td class="warning"><a href="" class="warning">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>

            </table>


            <ul class="page">
                <li>{{ $professors->links('pagination::bootstrap-4') }}</li>
            </ul>


        </div>
    </main>

    <x-profile/>

    @include('partials.foot')

