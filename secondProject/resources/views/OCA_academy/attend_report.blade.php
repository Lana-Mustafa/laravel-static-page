<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/79f82cf2f7.js" crossorigin="anonymous"></script>
    
    <style>
        html {
            font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        h5 {
            font-size: 1.28571429em;
            font-weight: 700;
            line-height: 1.2857em;
            margin: 0;
        }

        .card {
            font-size: 1em;
            overflow: hidden;
            padding: 0;
            border: none;
            border-radius: .28571429rem;
            box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
        }

        .card-block {
            font-size: 1em;
            position: relative;
            margin: 0;
            padding: 1em;
            border: none;
            border-top: 1px solid rgba(34, 36, 38, .1);
            box-shadow: none;
        }

        .card-img-top {
            display: block;
            width: 100%;
            height: auto;
        }

        .card-title {
            font-size: 1.28571429em;
            font-weight: 700;
            line-height: 1.2857em;
        }

        .card-text {
            clear: both;
            margin-top: .5em;
            color: rgba(0, 0, 0, .68);
        }

        .card-footer {
            font-size: 1em;
            position: static;
            top: 0;
            left: 0;
            max-width: 100%;
            padding: .75em 1em;
            color: rgba(0, 0, 0, .4);
            border-top: 1px solid rgba(0, 0, 0, .05) !important;
            background: #fff;
        }

        .card-inverse .btn {
            border: 1px solid rgba(0, 0, 0, .05);
        }

        .profile {
            position: absolute;
            top: -12px;
            display: inline-block;
            overflow: hidden;
            box-sizing: border-box;
            width: 25px;
            height: 25px;
            margin: 0;
            border: 1px solid #fff;
            border-radius: 50%;
        }

        .profile-avatar {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .profile-inline {
            position: relative;
            top: 0;
            display: inline-block;
        }

        .profile-inline~.card-title {
            display: inline-block;
            margin-left: 4px;
            vertical-align: top;
        }

        .text-bold {
            font-weight: 700;
        }

        .meta {
            font-size: 1em;
            color: rgba(0, 0, 0, .4);
        }

        .meta a {
            text-decoration: none;
            color: rgba(0, 0, 0, .4);
        }

        .meta a:hover {
            color: rgba(0, 0, 0, .87);
        }
    </style>



</head>

<body>
    <!--header start here-->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OCA </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('trainees')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Academy Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><a class="dropdown-item" href="{{route('attend')}}">Attendance Report </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Project Summary</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header> 
<!--heder end-->


    <!--main start here-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="height:5rem"></div>
                    <div class="alert alert-success" style="display:none;">
                        <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
                    <table class="table table-hover">
                        <thead>
                            
                        
                            <tr>
                                <th scope="col"> Student Name </th>
                                <th scope="col">Day 1</th>
                                <th scope="col">Day 2</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainees as $ket =>$value)
                            <tr>
                                <th scope="row">{{$value['name']}}</th>
                                
                                <?php 
                                $attendance = $value['attendance'];


                                    $checkin1 = $attendance[0]['check_in'];
                                    $checkout1 = $attendance[0]['check_out'];

                                    $checkin2 = $attendance[1]['check_in'];
                                    $checkout2 = $attendance[1]['check_out'];

                                $checksubin1 = intval(substr($checkin1, -5, 2));
                                $checksubout1 = intval(substr($checkout1, -5, 2));
                                $checksubin2 = intval(substr($checkin2, -5, 2));
                                $checksubout2 = intval(substr($checkout2, -5, 2));

                                $calc1 = $checksubout1 - $checksubin1 ;
                                $calc2 = $checksubout2 - $checksubin2 ;
                                
                                ?>
                                
                                
                                <td  class="<?php if ($calc1 < 8 ) {
                            echo "table-danger";
                         }else {
                             echo "table-success";
                         }  ?>" >
                            {{$calc1}} 
                        </td >

                        <td  class="<?php if ($calc2 < 8 ) {
                            echo "table-danger";
                         }else {
                             echo "table-success";
                         }  ?>">
                            {{$calc2}} 
                        </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>










                </div>
            </div>


        </div>

    </main>
    <!--main end here-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>