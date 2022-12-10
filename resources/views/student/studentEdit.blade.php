@include('partials.head')

<main>
  <div class="edit">
    <a href="/Student" class="back">Back</a>
    <div class="edit-form">
      <h1 class="title-stud">Create Student</h1>
      <div class="create-stud">
      <form action="/student/{{ $stud->id }}" method="POST">
          @method('PUT')
          @csrf
          <label for="stud_no">Student Number</label>
          <input class="input-form" type="text" id="regno" name="regno" placeholder="Your Student number.." value="{{ $stud->regno }}" required>
      
          <label for="name">Name</label>
          <input class="input-form" type="text" id="name" name="name" placeholder="Your name.." value="{{ $stud->name }}" required>
      
          <label for="username">Username</label>
          <input class="input-form" type="text" id="username" name="username" placeholder="Your last name.." value="{{ $stud->username }}" required>
          <label for="phone">Phone</label>
          <input class="input-form" type="text" id="phone" name="phone" placeholder="Your Phone.." value="{{ $stud->phone }}" required>
      
      
          <label for="email">Email</label>
          <input class="input-form" type="email" id="email" name="email" placeholder="Your email.." value="{{ $stud->email }}" required>
      
          <label for="address">Address</label>
          <input class="input-form" type="text" id="address" name="address" placeholder="Your Address.." value="{{ $stud->address }}" required>

          <label for="dept">Department</label>
          <input class="input-form" type="text" id="dept" name="dept" placeholder="Your Department.." value="{{ $stud->dept }}" required>

          <label for="utype">Type</label>
          <input class="input-form" type="text" id="utype" name="utype" placeholder="Your Type.." value="{{ $stud->utype }}" required>
      
          <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
              add
              </span>Add Student</button>
        </form>
      </div>   
  </div>
  
</div>
</main>


@include('partials.foot')