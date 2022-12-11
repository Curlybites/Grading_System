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
          <label for="regno">Student Number</label>
          <input class="input-form" type="text" id="regno" name="regno" placeholder="Your Student number.." value="{{ $stud->regno }}" required>
      
          <label for="fname">Name</label>
          <input class="input-form" type="text" id="name" name="name" placeholder="Your Name.." value="{{ $stud->name }}" required>
      
          <label for="username">Username</label>
          <input class="input-form" type="text" id="username" name="username" placeholder="Your Username.." value="{{ $stud->username }}" required>

          <label for="phone">Phone</label>
          <input class="input-form" type="number" id="phone" name="phone" placeholder="Your Phone.." value="{{ $stud->phone }}" required>

          <label for="address">Address</label>
          <input class="input-form" type="text" id="address" name="address" placeholder="Your Address.." value="{{ $stud->address }}" required>
      
          <label for="email">Email</label>
          <input class="input-form" type="email" id="email" name="email" placeholder="Your email.." value="{{ $stud->email }}" required>
      
          <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
              add
              </span>Add Student</button>
        </form>
      </div>   
  </div>
  
</div>
</main>


@include('partials.foot')