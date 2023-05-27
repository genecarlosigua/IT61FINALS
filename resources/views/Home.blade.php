<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>Reservation</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light mb-3 ">
        <a class="navbar-brand col-5" href="#">
            <img src="" alt="" class="l-0">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               
                <li class="nav-item active">
                    <p class="txtcolor" href="#">Dashboard <span class="sr-only">(current)</span></p>
                </li>

                <li class="nav-item dropdown">
                    <p class="txtcolor dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >Reservations</p>
                    
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <p class="txtcolor" href="#"><b> Event</b></p>
                        <p class="txtcolor" href="#"><b> Table</b></p>
                      </div>
                </li>

                <li class="nav-item dropdown">
                    <p class="txtcolor dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >Reservation History</p>
                    
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <p class="txtcolor" href="#"><b> Event</b></p>
                        <p class="txtcolor" href="#"><b> Table</b></p>
                      </div>
                </li>

                <li class="nav-item active">
                    <p class="txtcolor" href="#">Settings </p>
                </li>

                <li class="nav-item active">
                    <p class="txtcolor" href="#"><b>Logout </b></p>
                </li>

            </ul>
         </div>    
    </nav> 

    <div class="container-fluid">
        <table class="tbl">
            <section>
                <form action="{{route('create.user')}}" method="get">
                    <div class="btnalign">
                        <tr>
                            <td class="bgtd-1"><h1>Reservations</h1></td>
                            <td class="bgtd-2"><button class="btncreate" type="submit">Add Reservation</button></td>
                        </tr>
                    </div>
                </form>
            </section>
        </table>
    </div>

    <div>
        <table class="table">
            <tbody>

                <tr>
                    <th><h3>Name</h3></th>
                    <th><h3>Age</h3></th>
                    <th><h3>Email</h3></th>

                    @forelse ($fullname as $keys => $value)

                    <tr>
                        <td>
                            <form action="{{route('edit.user', ['id' => $value->id])}}" method="post">
                                @csrf
                            <tr>
                                <td><p>{{ $value->fullname }}</p></td>
                                <td><p>{{ $value->Age}}</p></td>
                                <td><p>{{ $value->Email }}</p></td>

                                <td>
                                    <button class="btnedit float-right">Edit</button>
                                    </form>

                                    <form action="{{route('delete.user', ['id' => $value->id])}}" method="post">
                                        @csrf
                                        @method("DELETE")

                                        <button class="btndelete float-right">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </td>
                    </tr>
                    @empty
                    @endforelse
                </tr>
            </tbody>
        </table>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  
</body>
</html>