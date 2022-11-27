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
                    <label class="h5">Student Number:</label>
                </div>
                <div class="col-md-4">
                    <label class="h5">Last Name:</label>
                </div>
                <div class="col-md-4">
                    <label class="h5">First Name:</label>
                </div>
          </div>
          <div class="row">
                    <div class="h5 col-md-6">Section</div>
                    <div class="h5 col-md-6">Subject</div>
            </div>
         <br><
        <div class="row mt-5 mb-5">
            <div class="col-md-3 text-center">
                <p class="h3 text-center">Assignment</p>
               <!-- Modal Trigger -->
             <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Assignment</a>
             <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="modal-content">
                <h4>Assignment</h4>
                <p>A bunch of text</p>
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
                <p>A bunch of text</p>
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
                <p>A bunch of text</p>
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
                <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect wavesyellow  btn-flat">Agree</a>
                </div>
            </div>
            <!-- END OF MODAL  -->
            </div>
        </div>
        <br><br><br>
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <p class="h3 text-center">Written Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W1">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W2">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W3">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W4">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W5">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W6">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W7">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W8">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W9">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W10">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W1">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W2">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W3">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W4">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W5">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W6">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W7">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W8">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W9">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="W10">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
                </tr>
                    
            </div>
            <div class="col-md-6 text-center">
                <p class="h3">Performance Task</p>
                <tr>
                    <div class="text-center h3"><label>HPG</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P1">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P2">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P3">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P4">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P5">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P6">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P7">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P8">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P9">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P10">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
                </tr>
                <tr>
                    <div class="text-center h3"><label>Scores</label></div>
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P1">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P2">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P3">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P4">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P5">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P6">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P7">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P8">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P9">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="P10">
                    <input type="text" style="width:50px"; min="1" max="1000" class="text-center" placeholder="Total">
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