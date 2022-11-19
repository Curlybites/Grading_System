<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Bootstrap 5 W3School -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Materialize CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">

      
    </style>

</head>
<body>

                  <!-- Modal Trigger -->
                  <div class="container mt-5">
                          <a href="/Class" class="waves-effect waves-light amber darken-2 btn">Back</a>
                          <a class="waves-effect waves-light modal-trigger btn" href="#modal1">Modal</a>
                  </div>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-fixed-footer">
                    <div class="modal-content">
                                <!-- Modal Header  -->
                                <h4>Modal Header</h4>
                                <!-- Modal Body  -->
                                            <form action="/filterdata/" method="POST">
                                                @method('PUT') 
                                                @csrf
                                            
                                                    <div class="input-field container">
                                                    <label class="h6">Student Number</label>
                                                    <input type="text" class="form-control" id="search_id" placeholder="Search by Student ID " />
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                            <div class="col-6">
                                                                <label class="h6">First Name</label>
                                                                <input type="text" class="form-control text-dark" id="fname" placeholder="" name="first_name" required disabled>
                                                            </div>

                                                            <div class="col-6">
                                                                <label class="h6">Last Name</label>
                                                                <input type="text" class="form-control text-dark" id="lname" placeholder="" name="last_name" required disabled>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                        <div class="col-sm-3">
                                                            <label class="h6">Age</label>
                                                            <input type="text" class="form-control text-dark" id="age" placeholder="" name="age" required disabled>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <label class="h6">Gender</label>
                                                            <input type="text" class="form-control text-dark" id="gender" placeholder="" name="gender" required disabled>
                                                        </div>

                                                        <div class="col-sm-3">
                                                             <label class="h6">Email</label>
                                                            <input type="text" class="form-control text-dark" id="email" placeholder="" name="email" required disabled>
                                                        </div>
                                                           
                                                         <div class="col-sm-3">
                                                           <label class="h6">Contact Number</label> 
                                                           <input type="text" class="form-control text-dark" id="contact_no" placeholder="" name="contact_no" required disabled>
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                        <div class="col-4">
                                                            <label class="h6">Section</label>
                                                            <input type="text" class="form-control text-dark" id="class_sec" value="{{ $class->class_sec }}" name="class_sec" required disabled>
                                                        </div>

                                                        <div class="col-8">
                                                            <label class="h6">Subject</label>
                                                            <input type="text" class="form-control text-dark" id="class_subj" value="{{ $class->class_subj }}" name="class_subj" required disabled>    
                                                        </div>
                                                    </div>  
                                                
                                                    <div class="container text-center">
                                                    <label class="text-center h6">Student Number</label>
                                                <input type="text" class="form-control text-dark text-center" id="student_no" value="" name="student_no" required disabled>    
                                                    </div>
                                        </form>  
                         </div>
                            <div class="modal-footer">
                                <input type="submit" value="Add Student" class="waves-effect waves-green btn-flat">
                            <!-- <button class="waves-effect waves-green btn-flat" type="submit">Add Student</button> -->
                                <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
                            </div>
                    </div>

                    <!-- End of Modal  -->

                    <div class="container mt-5 mb-5">
                        <table class="table-bordered highlight centered striped responsive-table">
                            <thead class="">
                            <tr>
                                <th>Student Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Section</th>
                                <th>Subject</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                                <td>20-2194</td>
                                <td>John Carlien Trix</td>
                                <td>Darlucio</td>
                                <td>21</td>
                                <td>Male</td>
                                <td>johnTrix@gmail.com</td>
                                <td>+639451102461</td>
                                <td>{{ $class->class_sec }}</td>
                                <td>{{ $class->class_subj }}</td>
                            </tr>
                                        
                            </tbody>
                        </table>
                    </div>


                  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

            <script>
                     document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('.modal');
                        var instances = M.Modal.init(elems, options);
                    });

                    // Or with jQuery

                    $(document).ready(function(){
                        $('.modal').modal();
                    });
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
                                    var dataStud2 = {};
                                    var dataStud3 = {};
                                    var dataStud4 = {};
                                    var dataStud5 = {};
                                    var dataStud6 = {};
                                    var dataStud7 = {};
                                    for (var i= 0; i < studArray.length; i++){
                                        dataStud[studArray[i].student_no] = null;
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                        dataStud2[studArray[i].student_no] = studArray[i];
                                    }
                                    console.log("dataStud6");
                                    console.log(dataStud6);
                                    console.log(dataStud6);
                                    console.log(dataStud6);
                                    console.log(dataStud6);
                                    console.log(dataStud6);
                                    console.log(dataStud7);
                                    // convert end 
                                    $('input#search_id').autocomplete({
                                    data: dataStud,
                                    onAutocomplete:function(reqdata){
                                        console.log(reqdata);
                                        $('#fname').val(dataStud2[reqdata]['first_name']);
                                        $('#lname').val(dataStud2[reqdata]['last_name']);
                                        $('#age').val(dataStud2[reqdata]['age']);
                                        $('#gender').val(dataStud2[reqdata]['gender']);
                                        $('#email').val(dataStud2[reqdata]['email']);
                                        $('#contact_no').val(dataStud2[reqdata]['contact_no']);
                                        $('#student_no').val(dataStud2[reqdata]['student_no']);
                                    }
                                });
                                // end 
                                }
                            })
                        });  
                    </script>
</body>
</html>

