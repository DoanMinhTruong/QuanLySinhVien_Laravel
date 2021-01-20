<div class="card mb-3">
    <img src="https://www.paier.edu/wp-content/uploads/2016/11/web-dev-student-illustration-Feature_1290x688_MS1.jpg" alt="">
    <div class="card-body">
        <h5 class="card-title">List of Student</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt dolore earum nostrum pariatur quidem reiciendis sunt tenetur. Culpa debitis enim expedita facere inventore nam neque nobis non velit veniam.</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->cne}}</td>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->secondName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->speciality}}</td>
                    <td>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>





