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
            <a href="{{'/Professor'}}" class="btn">
                <span class="material-icons-sharp">person_pin</span>
                <h3>Professor</h3>
            </a>
       
            <a href="{{ '/Student' }}" class="btn">
                <span class="material-icons-sharp">people</span>   
                <h3>Students</h3>
            </a>
            <a href="{{'/Grading'}}" class="btn active">
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

        <div class="insights">


            {{-- 1st tab --}}
            <div class="sales">
                <a href="{{'/sample'}}" class="viewbtn">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <h3>TVL</h3>
                        <small>View TVL Grading</small>
                    </div>
                 </a>
            </div>

            {{-- 2nd tab --}}
            <div class="expenses">
                <a href="{{'/sample'}}" class="viewbtn">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <h3>TVL</h3>
                        <small>View TVL Grading</small>
                    </div>
                 </a>
            </div>

            {{-- 3rd tab --}}
            <div class="income">
                <a href="{{'/sample'}}" class="viewbtn">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <h3>TVL</h3>
                        <small>View TVL Grading</small>
                    </div>
                 </a>
            </div>
        
        </div>
 
   
    </main>
    
    <x-profile/>
@include('partials.foot')
