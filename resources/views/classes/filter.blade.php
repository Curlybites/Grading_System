<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Data Tables CSS CDN  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <title>Filter Student</title>

    <style>
        .titless{
            margin: auto;
            text-align: center;
            font-weight: bold
        }
    </style>
</head>
<body>

        <!-- Modal starts here  -->
<!-- The Modal -->
         <div class="modal fade modal-lg" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                   <div class="modal-header">
                        <h3 class="modal-title titless">ADD STUDENT</h3>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                    <form action="/filterdata/" method="POST">
                        @method('PUT') 
                        @csrf
                        <label class="h6">Student number</label>
                        <div class="form-floating mb-1 mt-1">
                            <input type="text" class="form-control" id="stud_no" placeholder="Student Number" name="student_no" required>
                            <label for="student_no">Student Number</label>
                        </div>

                        <label class="h6">First Name</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="fname" placeholder="First Name" name="first_name" required disabled>
                            <label for="fname">First Name</label>
                        </div>

                        <label class="h6">Last Name</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="lname" placeholder="Last Name" name="last_name" required disabled>
                            <label for="lname">Last Name</label>
                        </div>

                        <label class="h6">Age</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="age" placeholder="Age" name="age" required disabled>
                            <label for="age">Age</label>
                        </div>


                       <div class="mb-2 mt-2">
                        <label class="h6">Gender</label>
                        <div class="">
                                <select id="gender" name="gender" class="form-control py-3" required disabled>
                                <option value="" selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                        </div>
                       </div>

                       <label class="h6">Email</label>
                       <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="email" placeholder="Email" name="email" required disabled>
                            <label for="email">Email</label>
                        </div>

                        <label class="h6">Contact Number</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="contact_no" placeholder="Contact Number" name="contact_no" required disabled>
                            <label for="contact_no">Contact Number</label>
                        </div>

                        <label class="h6">Section</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="section" value="{{ $class->class_sec }}" name="section" required disabled >
                            <label for="Section">Section</label>
                        </div>

                        <label class="h6">Subject</label>
                        <div class="form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="class_subj" value="{{ $class->class_subj }}" name="class_subj" required disabled >
                            <label for="Section">Subject</label>
                        </div>


                        
                    </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                         <button class="btn btn-primary px-4" type="submit">Add Student</button>
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                    </div>

                    </div>
                </div>
        </div>
    
            <div class="container mt-5">
                    <div class="btn-info">
                        <a href="/Class"><input type="button" value="Back" class="btn btn-warning px-4"></a>
                        <!-- Button to Open the Modal -->
                        <input type="button" value="Add" class="btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#myModal">
                    <div class="mt-5"></div>
             </div>
       <!-- Table starts here  -->
           <table class="table table table-bordered" id="myTable">
                <thead class="bg-info">
                <tr>
                    <th>Student Number</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Section</th>
                    <th>Subject</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>{{ $class->class_sec }}</td>
                    <td>{{ $class->class_subj }}</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Mary</td>
                    <td>Mary</td>
                    <td>mary@example.com</td>
                    <td>{{ $class->class_sec }}</td>
                    <td>{{ $class->class_subj }}</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>July</td>
                    <td>July</td>
                    <td>july@example.com</td>
                    <td>{{ $class->class_sec }}</td>
                    <td>{{ $class->class_subj }}</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>July</td>
                    <td>July</td>
                    <td>july@example.com</td>
                    <td>{{ $class->class_sec }}</td>
                    <td>{{ $class->class_subj }}</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>July</td>
                    <td>July</td>
                    <td>july@example.com</td>
                    <td>{{ $class->class_sec }}</td>
                    <td>{{ $class->class_subj }}</td>
                </tr>
                </tbody>
            </table>
      </div>
    <!-- JS Link CDN  -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
</body>
</html>