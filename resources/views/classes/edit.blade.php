@include('partials.head')

<main>
    <div class="edit">
        <div class="create-student">
            <a href="/Class" class="back">Back</a>
        </div>

        <div class="edit-form">
            <h1 class="title-stud">Edit Class</h1>
            <div class="create-stud">
                <form action="/class/{{ $class->id }}" method="POST">
                    @method('PUT') 
                    @csrf
                    <label for="class_name">Section ID</label>
                    <input class="input-form" type="text" id="sectionID" name="sectionID" placeholder="" value="{{ $class->sectionID }}" required>
                
                    <label for="class_num">Section Name</label>
                    <input class="input-form" type="text" id="sectionName" name="sectionName" placeholder="" value="{{ $class->sectionName }}" required>
                
                    <label for="class_sec">Grade Level</label>
                    <input class="input-form" type="text" id="gradeLevel" name="gradeLevel" placeholder="" value="{{ $class->gradeLevel }}" required>

                    <label for="faculty">Faculty</label>
                    <select name="faculty" id="faculty">
                    <option value="{{ $class->faculty }}" class="line" select disabled>{{ $class->firstName }} {{ $class->lastName }}</option>
                    @foreach ($professor as $prof)
                        <option value="{{ $prof->firstName }} {{ $prof->lastName }}">{{ $prof->firstName}} {{ $prof->lastName }}</option>
                        @endforeach 
                    </select>
                
                    <label for="subjectID">Section Subject</label>
                    <select name="subjectID" id="subjectID">
                        <option  value="{{ $class->subjectID }}" class="line" selected disabled>{{ $class->subjectID }}</option>
                        @foreach ($subject as $subj)
                            <option value="{{ $subj->subjectID }}">{{ $subj->subjectID }}</option>
                        @endforeach
                    </select>

                    <button class="btn-create-stud" type="submit"><span class="material-icons-sharp">
                        update
                        </span>Update Class</button>
                </form>
            </div>
        </div>
           
    </div>
</main>
    
          


@include('partials.foot')