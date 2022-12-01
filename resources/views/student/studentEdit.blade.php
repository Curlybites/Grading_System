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
          <input class="input-form" type="text" id="studentID" name="studentID" placeholder="Your Student number.." value="{{ $stud->studentID }}" required>
      
          <label for="fname">First Name</label>
          <input class="input-form" type="text" id="firstName" name="firstName" placeholder="Your name.." value="{{ $stud->firstName }}" required>
      
          <label for="lname">Last Name</label>
          <input class="input-form" type="text" id="lastName" name="lastName" placeholder="Your last name.." value="{{ $stud->lastName }}" required>
          <label for="age">Age</label>
          <input class="input-form" type="number" id="age" name="age" placeholder="Your age.." value="{{ $stud->age }}" required>
      
          <label for="gender">Gender</label>
          <select id="gender" name="gender" required>
            <option value="" selected disabled>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
      
          <label for="email">Email</label>
          <input class="input-form" type="email" id="email" name="email" placeholder="Your email.." value="{{ $stud->email }}" required>
      
          <label for="contact_no">Contact Number</label>
          <input class="input-form" type="text" id="contact_no" name="contact_no" placeholder="Your contact number.." value="{{ $stud->contact_no }}" required>
      
          <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
              add
              </span>Add Student</button>
        </form>
      </div>   
  </div>
  
</div>
</main>


@include('partials.foot')