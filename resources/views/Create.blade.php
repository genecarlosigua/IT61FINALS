<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>Create</title>
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
                    <p class="txtcreate" href="#"><b> CREATE RESERVATION </b></p>
                </li>
            </ul>
         </div>    
    </nav>
    
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
                    <p class="txtcreate" href="#"><b> CREATE RESERVATION </b></p>
                </li>
            </ul>
         </div>    
    </nav>

    <div class="container-fluid">

        <form action="{{route('store.user')}}" method="post">
            @csrf

            <div class="card">
                <label>
                    <p class="FLname"><span><input class="inttype" type="text" name="fullname" ></span></p>
                </label>

                <label>
                    <p class="FLname"><span><input class="inttype" type="text" name="Age"></span></p>
                </label>

                <label>
                    <p class="FLname"><span><input class="inttype" type="text" name="Email"></span></p>
                </label>
            </div>
                <button class="btnsave" type="submit">Add Reservation</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>  
</body>
</html>