<!DOCTYPE html>
<html lang="en">
<head>
  <title>TVL Grading</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>
<body>
  
    <div class="container mt-4">
        <h3>TVL/ Sports/ Arts and Design Track</h3>
    </div>
          
       <div class="container mt-5">
          
       <div class="table-responsive">
    <table class="table table-bordered table-striped" id="myTable">
      <thead>
        <tr>
          <th colspan="4"></th>
          <th colspan="2" class="text-center">Activities</th>
          <th colspan="2" class="text-center">Quizzes</th>
          <th colspan="2" class="text-center">Assignment</th>   
        </tr>
        <tr class="text-center bg-secondary">
          <th>StudNo</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>MiddleName</th>
          <th class="text-center">Act1</th>
          <th class="text-center">Act2</th>
          <th class="text-center">Ass1</th>
          <th class="text-center">Ass2</th>
          <th class="text-center">Q1</th>
          <th class="text-center">Q2</th>
          <th class="text-center">PROJ</th>
          <th class="text-center">EXAM</th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Prince Carlz </td>
          <td>Darlucio</td>
          <td>Sample gabril</td>
          <td><input type="number" class="" id="" name="" style="width: 65px;" min="1" max="1000" placeholder="Act1"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="Act2"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="Q1"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="Q2"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="A1"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="A2"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="Proj"></td>
          <td><input type="number" class="" id="" name="" style="width: 60px;" min="1" max="1000" placeholder="Exam"></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

                </div>
            </div>
      

       </div>
       <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
       <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script>
          $(document).ready( function () {
            $('#myTable').DataTable();
                } );
       </script>
</body>
</html>
