<!DOCTYPE html>
<html>
<head>
    <title></title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">

        .tithead{
            font-size: 40px;
            color: green;
        }
        
        table thead tr th label span{
            color: black;
            font-size: 20px;
        }
        table tbody tr td label span{
            color: black;
            font-size: 20px;
        }
    </style>wd

</head>
<body>
            <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4><b>ADD STUDENT</b></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem a similique 
                                at quod voluptate quis officia voluptates, inventore corrupti accusantium?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Disagree</a>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                </div>



<div class="container">
    <div class="row" style="padding-top:80px">

        <div class="col s8" >
            <table>
                <thead>
                    <tr>
                        <th>
                            <label>                          
                            <span>Customer name</span>
                            </label>
                        </th>
                        <th>
                           <div class="input-field">
                           <input type="text" id="searchhere_id" placeholder="Search" />
                           </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <label>
                                <span>customer code</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" id="cust_code_id"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <span>customer country</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" id="cust_cuntry_id"/>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
       
    </div>

    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Modal Script  -->
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
        <!-- End of Modal Script  -->
                <!-- Auto populate data  -->
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
                                for (var i= 0; i < studArray.length; i++){
                                    dataStud[studArray[i].first_name] = null;
                                    dataStud2[studArray[i].first_name] = 
                                            studArray[i];
                                }
                                console.log("dataStud2");
                                console.log(dataStud2);
                                // convert end 
                                $('input#searchhere_id').autocomplete({
                                data: dataStud,
                                onAutocomplete:function(reqdata){
                                    console.log(reqdata);
                                    $('#cust_code_id').val(dataStud2[reqdata]['last_name']);
                                    $('#cust_cuntry_id').val(dataStud2[reqdata]['email']);
                                }
                            });
                            // end 
                            }
                        })
                    });  
                </script>
                 <!--End of  Auto populate data  -->
</body>
</html>

