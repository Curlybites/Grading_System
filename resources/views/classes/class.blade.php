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
            <a href="{{'/Class'}}" class="btn active">
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
        <h1>Classes</h1>

        <div class="content">
           <div class="create-student">
    <!-- Trigger/Open The Modal -->
        <button id="myBtn" class="btn-create">
        <span class="material-icons-sharp">add_circle_outline</span> 
        <span class="t">New Class</pan></button>
    
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="modal-content">
        <span class="closes">&times;</span>
    
        <h1 class="title-stud">Create Class</h1>
    
            <div class="create-stud">
            <form action="/store-class" method="POST">
                @csrf
                <label for="stud_no">Class Name</label>
                <input class="input-form" type="text" id="class_name" name="class_name" placeholder="" required>
            
                <label for="fname">Class Numeric</label>
                <input class="input-form" type="text" id="class_num" name="class_num" placeholder="" required>
            
                <label for="lname">Class Section</label>
                <input class="input-form" type="text" id="class_sec" name="class_sec" placeholder="" required>
             
             

                <label for="class_prof">Professor</label>
                    <select id="class_prof" name="class_prof" required>
                    <option value="" selected disabled>Select Professor</option>
                     @foreach ($faculties as $data)
                    <option  value="{{ $data->firstName }} {{ $data->lastName }}">{{ $data->firstName }} {{ $data->lastName }}</option>
                    @endforeach
                    </select>

                 <label for="class_subj">Subject</label>
                    <select id="class_subj" name="class_subj" required>
                    <option value="" selected disabled>Select Subject</option>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->subjectName }}">{{ $subject->subjectName }}</option>
                    @endforeach
                    </select>   
 
                <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
                    add
                    </span>Add Class</button>
            </form>
            </div>
    
    </div>
    
    
    </div>
    </div>

        <div class="recent-orders">
            <h2>Class List</h2>
    
            <table class="table tabla table-bordered table-responsive table-striped">
                <thead>
                    <tr>
                       <th>ID</th>
                       <th>Section ID</th>
                       <th>Section Namec</th>
                       <th>Grade Level</th>
                       <th>Faculty</th>
                       <th>Subject</th>
                       <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                   @foreach ( $gradeandsections as $class )  
                    <tr>
                        <td class="primary">{{ $class->id }}</td>
                        <td class="primary">{{ $class->sectionID }}</td>
                        <td class="primary">{{ $class->sectionName }}</td>
                        <td class="primary">{{ $class->gradeLevel }}</td>
                        <td class="primary">{{ $class->faculty }}</td>
                        <td class="primary">{{ $class->subjectID }}</td>
                        <td class="warning"><a href="/class/{{ $class->id }}" class="btn-warning">Edit Data</a></td>
                        <td class="warning"><a href="/filterdata/{{ $class->id }}" class="btn-danger">Insert Student</a></td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
    
           
            <ul class="page">
                <li></li>       
            </ul>
           
           
        </div>


    </main>
    
    <x-profile/>

    @include('partials.foot')

