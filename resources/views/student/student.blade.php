@include('partials.head')
<x-side/>


<main>
    <h1>Student</h1>

    <div class="date">
        <input type="date">
    </div>

    <div class="recent-orders">
        <h2>Student List</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td class="warning">{{ $student->age }}</td>
                    <td class="primary">{{ $student->gender }}</td>
                    <td class="primary">{{ $student->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="#">Show All</a>
    </div>
</main>

<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp">menu</span>
        </button>

        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>

        <div class="profile">
            <div class="info">
                <p>hey, <b>{{ Auth::user()->firstname }}</b></p>
                <small class="text-muted">Admin</small>
            </div>

            <div class="profile-photo">
                <img src="/images/caloocan.jpeg">
            </div>
        </div>
    </div>


@include('partials.foot')