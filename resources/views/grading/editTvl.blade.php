<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVL EDIT GRADES</title>
    <!-- Bootstrap 5 W3School -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Materialize CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font Awesome  -->
    <script src="https://kit.fontawesome.com/99c966d584.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
    <a href="/Grading"><input type="button" value="Back" class="btn pink lighten-1 px-4"></a> 
        <h2>TVL Grading Form</h2>
          <div class="row mt-5">
                <div class="col-md-4">
                    <label class="h5">Student Number:{{ $sec->student_no }}</label>
                </div>
                <div class="col-md-4">
                    <label class="h5">Last Name:{{ $sec->last_name }}</label>
                </div>
                <div class="col-md-4">
                    <label class="h5">First Name:{{ $sec->first_name }}</label>
                </div>
          </div>
          <div class="row">
                    <div class="h5 col-md-6">Section:{{ $sec->class_sec }}</div>
                    <div class="h5 col-md-6">Subject:{{ $sec->class_subj }}</div>
            </div>
         <br>
        <div class="row mt-5 mb-5">
            <div class="col-md-3 text-center">
                <p class="h3 text-center">Assignment</p>
               <!-- Modal Trigger -->
             <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Assignment</a>
             <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="modal-content">
                <h4>Assignment</h4>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                    <input type="text" name="a1" id="a1" class="form-control" placeholder="Score Assignment1">
                                    <input type="text" name="a2" id="a2" class="form-control" placeholder="Score Assignment2">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="a3" id="a3" class="form-control" placeholder="Score Assignment3">
                                    <input type="text" name="a4" id="a4" class="form-control" placeholder="Score Assignment4">
                                </div>
                                <div class="col-md-4">
                                <input type="text" name="a5" id="a5" class="form-control" placeholder="Score Assignment5">
                                </div>
                           </div>
                     </div>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
            <!-- END OF MODAL  -->
            </div>
            <div class="col-md-3 text-center">
                <p class="h3 text-center">Quizzes</p>
                 <!-- Modal Trigger -->
             <a class="waves-effect waves-light light-blue accent-2 btn modal-trigger" href="#modal2">Quizzes</a>
             <!-- Modal Structure -->
            <div id="modal2" class="modal bottom-sheet">
                <div class="modal-content">
                <h4>Quizzes</h4>
                <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                    <input type="text" name="q1" id="q1" class="form-control" placeholder="Score Quiz 1">
                                    <input type="text" name="q2" id="q2" class="form-control" placeholder="Score Quiz 2">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="q3" id="q3" class="form-control" placeholder="Score Quiz 3">
                                    <input type="text" name="q4" id="q4" class="form-control" placeholder="Score Quiz 4">
                                </div>
                                <div class="col-md-4">
                                <input type="text" name="q5" id="q5" class="form-control" placeholder="Score Quiz 5">
                                </div>
                           </div>
                     </div>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
            <!-- END OF MODAL  -->
            </div>
            <div class="col-md-3 text-center">
                <p class="h3 text-center">Exam</p>
                <!-- Modal Trigger -->
             <a class="waves-effect waves-light green accent-2 btn modal-trigger" href="#modal3">Exam</a>
             <!-- Modal Structure -->
            <div id="modal3" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4>Exam</h4>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <input type="text" name="exam" id="exam" class="form-control" placeholder="Score Exam">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
            <!-- END OF MODAL  -->
            </div>
            <div class="col-md-3 text-center">
                <p class="h3 text-center">Activities</p>
               <!-- Modal Trigger -->
             <a class="waves-effect waves-light yellow darken-4 btn modal-trigger" href="#modal4">Activities</a>
             <!-- Modal Structure -->
            <div id="modal4" class="modal bottom-sheet">
                <div class="modal-content">
                <h4>Activities</h4>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="act1" id="act1" class="form-control" placeholder="Score Activities 1">
                            <input type="text" name="act2" id="act2" class="form-control" placeholder="Score Activities 2">
                            <input type="text" name="act3" id="act3" class="form-control" placeholder="Score Activities 3">
                            <input type="text" name="act4" id="act4" class="form-control" placeholder="Score Activities 4">
                            <input type="text" name="act5" id="act5" class="form-control" placeholder="Score Activities 5">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="act6" id="act1" class="form-control" placeholder="Score Activities 6">
                            <input type="text" name="act7" id="act1" class="form-control" placeholder="Score Activities 7">
                            <input type="text" name="act8" id="act1" class="form-control" placeholder="Score Activities 8">
                            <input type="text" name="act9" id="act1" class="form-control" placeholder="Score Activities 9">
                            <input type="text" name="act10" id="act1" class="form-control" placeholder="Score Activities 10">
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect wavesyellow  btn-flat">Agree</a>
                </div>
            </div>
            <!-- END OF MODAL  -->
            </div>
        </div>
        <br><br><br>
        <form action="/editTvl/{{ $sec->student_no }}" method="POST">
            @method('PUT')
            @csrf
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <p class="h3 text-center">Written Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH1" id="WH1" claH="text-center" placeholder="W1">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH2" id="WH2" claHs="text-center" placeholder="W2">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH3" id="WH3" class="text-center" placeholder="W3">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH4" id="WH4" class="text-center" placeholder="W4">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH5" id="WH5" class="text-center" placeholder="W5">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH6" id="WH6" class="text-center" placeholder="W6">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH7" id="WH7" class="text-center" placeholder="W7">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH8" id="WH8" class="text-center" placeholder="W8">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH9" id="WH9" class="text-center" placeholder="W9">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WH10" id="WH10" class="text-center" placeholder="W10">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WHTOTAL" id="WHTOTAL" class="text-center" placeholder="Total">
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS1" id="WS1" class="text-center" placeholder="W1">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS2" id="WS2" class="text-center" placeholder="W2">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS3" id="WS3" class="text-center" placeholder="W3">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS4" id="WS4" class="text-center" placeholder="W4">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS5" id="WS5" class="text-center" placeholder="W5">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS6" id="WS6" class="text-center" placeholder="W6">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS7" id="WS7" class="text-center" placeholder="W7">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS8" id="WS8" class="text-center" placeholder="W8">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS9" id="WS9" class="text-center" placeholder="W9">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WS10" id="WS10" class="text-center" placeholder="W10">
                    <input type="text" style="width:50px"; min="1" max="1000" name="WSTOTAL" id="WSTOTAL" class="text-center" placeholder="Total">
                </tr>
                    
            </div>
            <div class="col-md-6 text-center">
                <p class="h3">Performance Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH1" id="PH1" class="text-center" placeholder="P1">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH2" id="PH2" class="text-center" placeholder="P2">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH3" id="PH3" class="text-center" placeholder="P3">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH4" id="PH4" class="text-center" placeholder="P4">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH5" id="PH5" class="text-center" placeholder="P5">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH6" id="PH6" class="text-center" placeholder="P6">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH7" id="PH7" class="text-center" placeholder="P7">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH8" id="PH8" class="text-center" placeholder="P8">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH9" id="PH9" class="text-center" placeholder="P9">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PH10" id="PH10" class="text-center" placeholder="P10">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PHTOTAL" id="PHTOTAL" class="text-center" placeholder="Total">
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS1" id="PS1" class="text-center" placeholder="P1">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS2" id="PS2" class="text-center" placeholder="P2">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS3" id="PS3" class="text-center" placeholder="P3">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS4" id="PS4" class="text-center" placeholder="P4">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS5" id="PS5" class="text-center" placeholder="P5">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS6" id="PS6" class="text-center" placeholder="P6">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS7" id="PS7" class="text-center" placeholder="P7">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS8" id="PS8" class="text-center" placeholder="P8">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS9" id="PS9" class="text-center" placeholder="P9">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PS10" id="PS10" class="text-center" placeholder="P10">
                    <input type="text" style="width:50px"; min="1" max="1000" name="PSTOTAL" id="PSTOTAL" class="text-center" placeholder="Total">
                </tr>
            </div>
        </div>
        <div class="row text-center">
                <div class="col-md text-center">
                <tr>
                <div class="text-center h3"><label>HPG</label></div>
                <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Exam">    
                <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
                </tr>
                
                <tr>
                <div class="text-center h3"><label>Scores</label></div>
                <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Exam">    
                <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
                </tr>   
                </div>
            </div>
        </form>
    </div>

   <!-- Compiled and minified JavaScript -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  <!-- Bottom sheet Modal Script Modal Assignment -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal1');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal1').modal();
        });
    </script>
    <!-- End of Modal Assignment  -->

     <!-- Bottom sheet Modal Script Modal Quizzes -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal2');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal2').modal();
        });
    </script>
    <!-- End of Modal Quizzes  -->

     <!-- Bottom sheet Modal Script Modal Exam -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal3');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal3').modal();
        });
    </script>
    <!-- End of Modal Exam  -->

    <!-- Bottom sheet Modal Script Modal Activities -->
  <script>
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#modal4');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('#modal4').modal();
        });
    </script>
    <!-- End of Modal Activities  -->
</body>
</html>