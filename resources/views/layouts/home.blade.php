<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="google-site-verification" content="nWVyThdXZ9ocgBIMwcTDLtUFQKjEQ9EK4bCT5KKwFRw" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>italki Vietnam</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="front/css/style.css" rel="stylesheet" type="text/css">
    <link href="front/css/footer.css" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

</head>
<body>
<div class="header">
    <div class="bg1_2">
        <div class="container">
            <div class="nav-bar">

                <div class="navbar-brand">
                    <img src="front/upload/header_log_icon.png"/>
                </div>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".nav" aria-expanded="false" aria-controls="nav-bar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<div class="clear-fix"></div>
                <ul class="nav navbar-collapse collapse">
                    <li class="nav-item">
                        <span>Site language:</span>

                        <select>
                            <option value="English">English</option>
                            <option value="VietNam">Tiếng Việt</option>
                        </select>
                    </li>
                    <li class="nav-item">
                        <a class="nav-button login_btn" href="{{route('login')}}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-button signup_btn" href="{{route('register')}}">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-button teacher_btn" href="{{route('register').config('auth.becomeTeacher')}}">BECOME
                            A TEACHER</a>
                    </li>
                </ul>
            </div>

            <div class="zone-1">
                <h3>BECOME FLUENT <br>IN ANY LANGUAGE</h3>
                <p>
                    Get 1-on-1 lessons from native language teachers <br>and join a community of 3 million language
                    learners.
                </p>
                <a class="red-btn" href="">GET STARTED NOW</a>
            </div>

            <div class="find_us">
                <a href="#"><img src="front/upload/Find_us.png"/></a>
            </div>
        </div>

    </div>
</div>



@yield('content')
@include('partials.footer')