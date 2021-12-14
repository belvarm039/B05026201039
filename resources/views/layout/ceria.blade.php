<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .body {
            background-color: #ffebcd;
        }
        .sidenav {
          width: 170px;
          position: fixed;
          z-index: 1;
          top: 20px;
          left: 10px;
          background: #deb887;
          overflow-x: hidden;
          padding: 8px 0;
        }

        .sidenav a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 20px;
          color: #ffffff;
          display: block;
        }

        .sidenav a:hover {
          color: #064579;
        }

        .main {
          margin-left: 140px; /* Same width as the sidebar + left position in px */
          font-size: 28px; /* Increased text to enable scrolling */
          padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>

</head>



<body class="container m-4, body" >

<div class="sidenav" align='center'>
    <header>
        <img src="{{ asset('images/belva039.jpg') }}" class="rounded-circle" height= "150px" widtht= "96px">
        <h4> Belva Rizki Mufidah </h4>
        <h4> NRP: 5026201039 </h4>
    </header>
    <a href="/pegawai">Pegawai</a>
    <a href="/absen">Absen</a>
    <a href="/modem">Modem</a>
</div>


 <div class="container-fluid">
    <div class="row row-cols-1">
        <div class="col">
            <hr/>
            <br/>
                @section('isikonten')
                @show
            <br/>
            <br/>
            <hr/>
        </div>
        <div class="col">
            <footer>
                <p>Hak Cipta oleh 5026201039 - Belva Rizki Mufidah</p>
            </footer>
        </div>
      </div>
 </div>
</body>
</html>
