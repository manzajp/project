<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign SV</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
    <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturer
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{route('auth.register')}}">View Lecturer</a></li>
                  <li><a href="{{route('coordinator.assignsv')}}">Assign Student</a></li>
               </ul>
            </li>

            <li class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile
               <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="#">Change Password</a></li>
               </ul>
            </li>
            
            <li><a href="{{ route('auth.logout') }}">Logout</a></li>
         </ul>
      </div>
    </nav>

    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif
        @csrf
        <form action="{{route('coordinator.updatesv')}}" method="get">

                <label for="lecturer">Lecturer</label><br> 
                 <select id="lect-list" name="lecturer">
                @foreach($lecturers as $lect)
                    <option value="{{$lect->name}}" name="lecturer">{{$lect->name}}</option>
                @endforeach
                </select><br>

                
                <label for="student">Student</label><br>
                <select id="student-list" name="students">
                @foreach($students as $stud)
                    <option value="{{$stud->studname}}" name="students">{{$stud->studname}}</option>
                @endforeach
                </select><br>
                
            <input type="submit" value="Submit">
        </form>

    </body>
</html>