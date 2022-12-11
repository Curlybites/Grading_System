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
                          <a class="waves-effect waves-light modal-trigger btn" href="#modal1">Add Student</a>
                  </div>

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-footer">
                    <div class="modal-content">
                                <!-- Modal Header  -->
                               <div class="text-center">
                                     <h4>ADD STUDENT</h4>
                                     <hr>
                               </div>
                                <!-- Modal Body  -->
                                            <form action="/filterdata/" method="POST">
                                                @csrf
                                                    <div class="input-field container">
                                                    <label class="h6">Student Number</label>
                                                    <input type="text" class="form-control" id="search_id" placeholder="Search by Student ID " />
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                            <div class="col-6">
                                                                <label class="h6">Name</label>
                                                                <input type="text" class="form-control text-dark" id="name" placeholder="" name="name" required readonly>
                                                            </div>

                                                            <div class="col-6">
                                                                <label class="h6">Username</label>
                                                                <input type="text" class="form-control text-dark" id="username" placeholder="" name="username" required readonly>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="row mt-5">

                                                    <div class="col-sm-4">
                                                             <label class="h6">Email</label>
                                                            <input type="text" class="form-control text-dark" id="email" placeholder="" name="email" required readonly>
                                                     </div>

                                                     <div class="col-sm-4">
                                                           <label class="h6">Type</label> 
                                                           <input type="text" class="form-control text-dark" id="utype" placeholder="" name="utype" required readonly>
                                                     </div>

                                                        <div class="col-sm-2">
                                                            <label class="h6">Phone</label>
                                                            <input type="text" class="form-control text-dark" id="phone" placeholder="" name="phone" required readonly>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <label class="h6">Address</label>
                                                            <input type="text" class="form-control text-dark" id="address" placeholder="" name="address" required readonly>
                                                        </div>
     
                                                    </div>
                                                    
                                                    <div class="row mt-5">
                                                        <div class="col-4">
                                                            <label class="h6">Section</label>
                                                            <input type="text" class="form-control text-dark" id="class_sec" value="{{ $class->class_sec }}" name="class_sec" required readonly>
                                                        </div>

                                                        <div class="col-8">
                                                            <label class="h6">Subject</label>
                                                            <input type="text" class="form-control text-dark" id="class_subj" value="{{ $class->class_subj }}" name="class_subj" required readonly>    
                                                        </div>
                                                    </div>  
                                                
                                                    <div class="container text-center">
                                                        <label class="text-center h6">Student Number</label>
                                                        <input type="text" class="form-control text-dark text-center" id="regno" value="" name="regno" required readonly>    
                                                    </div>

                                                    <div class="modal-footer">
                                                        <input type="submit" value="Add Student" class="waves-effect waves-green btn-flat">
                                                        <!-- <button class="waves-effect waves-green btn-flat" type="submit">Add Student</button> -->
                                                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
                                                      </div>
                                        </form>  
                         </div>


                            
                    </div>

                    <!-- End of Modal  -->

                    <div class="container mt-5 mb-5">
                        <table class="table-bordered highlight centered striped responsive-table" id="myTable">
                            <thead class="">
                            <tr>
                                <th>Id</th>
                                <th>Student Number</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Section</th>
                                <th>Subject</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($list as $sec)
                                <tr>
                                    <td>{{ $sec->id }}</td>
                                    <td>{{ $sec->regno }}</td>
                                    <td>{{ $sec->name }}</td>
                                    <td>{{ $sec->username }}</td>
                                    <td>{{ $sec->phone }}</td>
                                    <td>{{ $sec->address }}</td>
                                    <td>{{ $sec->email }}</td>
                                    <td>{{ $sec->utype }}</td>
                                    <td>{{ $sec->class_sec }}</td>
                                    <td>{{ $sec->class_subj }}</td>
                                </tr>
                            @endforeach
                                            
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
                                        dataStud[studArray[i].idno] = null; 
                                        dataStud2[studArray[i].idno] = studArray[i];
                                        dataStud3[studArray[i].idno] = studArray[i];
                                        dataStud4[studArray[i].idno] = studArray[i];
                                        dataStud5[studArray[i].idno] = studArray[i];
                                        dataStud6[studArray[i].idno] = studArray[i];
                                        dataStud7[studArray[i].idno] = studArray[i];
                                    }
                                    for (var i= 0; i < studArray.length; i++){
                                        dataStud[studArray[i].name] = null; 
                                        dataStud2[studArray[i].first_name] = studArray[i];
                                        dataStud3[studArray[i].first_name] = studArray[i];
                                        dataStud4[studArray[i].first_name] = studArray[i];
                                        dataStud5[studArray[i].first_name] = studArray[i];
                                        dataStud6[studArray[i].first_name] = studArray[i];
                                        dataStud7[studArray[i].first_name] = studArray[i];
                                    }
                                    for (var i= 0; i < studArray.length; i++){
                                        dataStud[studArray[i].username] = null; 
                                        dataStud2[studArray[i].username] = studArray[i];
                                        dataStud3[studArray[i].username] = studArray[i];
                                        dataStud4[studArray[i].username] = studArray[i];
                                        dataStud5[studArray[i].username] = studArray[i];
                                        dataStud6[studArray[i].username] = studArray[i];
                                        dataStud7[studArray[i].username] = studArray[i];
                                    }
                                    console.log("dataStud7");
                                    console.log(dataStud7);
                                    console.log(dataStud7);
                                    console.log(dataStud7);
                                    console.log(dataStud7);
                                    console.log(dataStud7);
                                    console.log(dataStud7);
                                    // convert end 
                                    $('input#search_id').autocomplete({
                                    data: dataStud,
                                    onAutocomplete:function(reqdata){
                                        console.log(reqdata);
                                        $('#name').val(dataStud2[reqdata]['name']);
                                        $('#username').val(dataStud2[reqdata]['username']);
                                        $('#phone').val(dataStud2[reqdata]['phone']);
                                        $('#address').val(dataStud2[reqdata]['address']);
                                        $('#email').val(dataStud2[reqdata]['email']);
                                        $('#utype').val(dataStud2[reqdata]['utype']);
                                        $('#regno').val(dataStud2[reqdata]['regno']);
                                    }
                                });
                                // end 
                                }
                            })
                        });  
                    </script>

                    <script>
                        $(document).ready( function () {
                            $('#myTable').DataTable();
                                } );
                    </script>

                    
</body>
</html>

