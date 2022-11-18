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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
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
         <div class="modal fade modal-xl" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                   <div class="modal-header">
                        <h3 class="modal-title titless">ADD STUDENT</h3>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body"></div>
                    <form action="/push-data" method="POST">
                        @csrf
                        <label class="container h6">Student number</label>
                        <div class="container form-floating mb-1 mt-1">
                            <input type="text" class="form-control" id="stud_no" placeholder="Student Number" name="student_no" value="" required>
                            <label for="student_no">Student Number</label>
                        </div>

                        <label class="container h6">First Name</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="fname" placeholder="First Name" name="first_name" value="" required disabled>
                            <label for="fname">First Name</label>
                        </div>

                        <label class="container h6">Last Name</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="lname" placeholder="Last Name" name="last_name" value="" required disabled>
                            <label for="lname">Last Name</label>
                        </div>

                        <label class="container h6">Age</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="age" placeholder="Age" name="age" value="" required disabled>
                            <label for="age">Age</label>
                        </div>


                       <!-- <div class="mb-2 mt-2">
                        <label class="container h6">Gender</label>
                        <div class="container">
                                <select id="gender" name="gender" class="container form-control py-3" required disabled>
                                <option value="" selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                        </div>
                       </div> -->

                       <label class="container h6">Email</label>
                       <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="container form-control" id="email" placeholder="Email" name="email" value="" required disabled>
                            <label for="email">Email</label>
                        </div>

                        <label class="container h6">Contact Number</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="contact_no" placeholder="Contact Number" name="contact_no" value="" required disabled>
                            <label for="contact_no">Contact Number</label>
                        </div>

                        <label class="container h6">Section</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="section" name="section" value="" required disabled >
                            <label for="Section">Section</label>
                        </div>

                        <label class="container h6">Subject</label>
                        <div class="container form-floating mb-2 mt-2">
                           <input type="text" class="form-control" id="class_subj"  name="class_subj" value="" required disabled >
                            <label for="Section">Subject</label>
                        </div>
                        <hr>
                        <div class="col d-flex justify-content-end mt-2 mb-2">

                        <button class="btn btn-primary px-4" type="submit">Add Student</button>
                        <div class="px-1"></div>
                        <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                        <div class="px-1"></div>
                        </div>
                    </form>
                         <!-- Modal footer -->
                    <!-- <div class="modal-footer">  
                       
                        </div> -->

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
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                </tbody>
            </table>
      </div>
    <!-- JS Link CDN  -->
   
   
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  


    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>

    <script type="text/javascript">
          $(document).ready(function(){
             console.log('test');
             $.ajax({
                type:'get',
                url:'{!!URL::to('/filterdatas/')!!}',
                success:function(response){
                    console.log(response);
                    // material css 
                    // convert array to object 
                    var studArray = response;
                    var dataStud = {};
                    for (var i= 0; i < studArray.length; i++){
                        studArray[dataStud[i].student_no] = null;
                    }
                    console.log("dataStud");
                    console.log(dataStud);
                    // convert end 
                    $('input#stud_no').autocomplete({
                    data: dataStud,
                 });
                 // end 
                }
             })
          });  
    </script>
</body>
</html>