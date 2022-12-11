@include('partials.head')

<main>
  <div class="edit">
    <div class="create-student">
      <a href="/Professor" class="back">Back</a>
    </div>

    <div class="edit-form">
    <h1 class="title-stud">Edit Professor</h1>
<div class="create-stud">
  <form action="/professor/{{ $prof->id }}" method="POST">
    @method('PUT')
    @csrf
    <label for="idno">ID NO</label>
    <input class="input-form" type="text" id="idno" name="idno" placeholder="ID NO" value="{{ $prof->idno }}" required>

    <label for="name">Name</label>
    <input class="input-form" type="text" id="name" name="name" placeholder="Name" value="{{ $prof->name }}" required>

    <label for="username">Username</label>
    <input class="input-form" type="text" id="username" name="username" placeholder="Username"   value="{{ $prof->username }}" required>

    <label for="phone">Phone</label>
    <input class="input-form" type="text" id="phone" name="phone" placeholder="Phone"   value="{{ $prof->phone }}" required>

    <label for="password">Password</label>
    <input class="input-form" type="password" id="password" name="password" placeholder="Password"   value="{{ $prof->password }}" readonly>

    <label for="address">Address</label>
    <input class="input-form" type="text" id="address" name="address" placeholder="Address"   value="{{ $prof->address }}" required>

    <label for="lecturer">Lecturer</label>
    <input class="input-form" type="text" id="lecturer" name="lecturer" placeholder="Lecturer"   value="{{ $prof->lecturer }}" required>

    <label for="email">Email</label>
    <input class="input-form" type="email" id="email" name="email" placeholder="sample@gmail.com"  value="{{ $prof->email }}" required>

    <label for="utype">Gender</label>
    <select id="utype" name="utype"  required>
      <option value="" selected disabled>Select Gender</option>
      <option value="Student" {{ $prof->utype }}>Student</option>
      <option value="Teacher" {{ $prof->utype }}>Teacher</option>
    </select>

    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
        add
        </span>Add Professor</button>
  </form>
      
</div>
    </div>

</main>

@include('partials.foot')