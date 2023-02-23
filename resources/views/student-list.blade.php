<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lists</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">

                <h2>STUDENT LISTS</h2>
                <div style="margin: right 10%;float: right;">
                    <a href="{{url('add-student')}}" class="btn btn-primary" >Add Students</a>
                  </div>
                <table class="table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        
                    </thead>
                 
                    <tbody>
                        @php
                        $i = 1; 
                        @endphp
                    @foreach ($data as $stu)
                        <tr>
                             <td>{{$i++}}</td>
                             <td>{{$stu->name}}</td>
                             <td> {{$stu->email}}</td>
                             <td> {{$stu->phone}}</td>
                             <td> {{$stu->address}}</td>
                             <td><a href="{{url('edit-student/'.$stu->id)}}" class="btn btn-primary" >Edit</a> || <a href="{{url('delete-student/'.$stu->id)}}" class="btn btn-danger" >Delete</a></td>
                         </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
</body>
</html>