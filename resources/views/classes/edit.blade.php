@include('partials.head')

<a href="/Class">Back</a>

<div class="modal-content">

    <h1 class="title-stud">Edit Class</h1>

        <div class="create-stud">
        <form action="/class/{{ $class->id }}" method="POST">
            @method('PUT') 
            @csrf
            <label for="class_name">Class Name</label>
            <input class="input-form" type="text" id="class_name" name="class_name" placeholder="" value="{{ $class->class_name }}" required>
        
            <label for="class_num">Class Numeric</label>
            <input class="input-form" type="text" id="class_num" name="class_num" placeholder="" value="{{ $class->class_num }}" required>
        
            <label for="class_sec">Class Section</label>
            <input class="input-form" type="text" id="class_sec" name="class_sec" placeholder="" value="{{ $class->class_sec }}" required>
        
            <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
                update
                </span>Update Class</button>
        </form>
      


@include('partials.foot')