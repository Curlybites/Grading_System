<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img src="/images/logo.png">
                <h2>ANT<span class="danger">HONY</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div> 
        </div>

        <div class="sidebar" id="myDiv">
    
            <a href="#" class="btn">
                <span class="material-icons-sharp">dashboard</span>
                <h3>Dashboard</h3>
            </a>
            <a href="#" class="btn">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Classes</h3>
            </a>
            <a href="#" class="btn">
                <span class="material-icons-sharp">receipt_long</span>
                <h3>Subject</h3>
            </a>
            <a href="#" class="btn">
                <span class="material-icons-sharp">insights</span>
                <h3>Proferssor</h3>
            </a>
       
            <a href="#" class="btn">
                <span class="material-icons-sharp">inventory</span>
                <h3>Students</h3>
            </a>
            <a href="#" class="btn"">
                <span class="material-icons-sharp">report_gmailerrorred</span>
                <h3>Grading</h3>
            </a>
            <a href="#" class="btn">
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