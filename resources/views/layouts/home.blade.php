<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="\adminlte\img\faviconicon.png"/>

    <title>{{ 'SUST Admission HelpLine' }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>

                        </button>
                        <a class="navbar-brand" href="/">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
							<li>
                                <a href="/transportation">Transporation</a>
                            </li>
                            <li>
                                <a href="/association">Association</a>
                            </li>
                            <li>
                                <a href="/hotel-information">Hotel Information</a>
                            </li>
                            <li>
                                <a href="/restaurant-information">Restaurant Infomation</a>
                            </li>
                            <li>
                                <a href="/emergency-information">Emergency Information</a>
                            </li>
							<li>
                                <a href="/guide">Help</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <div class="col-lg-2 text-right" style="padding-top: 10px">
                    @if (Auth::check())
                        <div style="color:white">
                            Logged in as {{ Auth::user()->email }}
                            <form action="{{ route('auth.logout') }}" method="post">
                                {{ csrf_field() }}
                                <input type="submit" value="Logout" class="btn btn-success">
                            </form>
                        </div>

                    @endif
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div>

                @yield('sidebar')
                <!--Lecture 8-->

            </div>

            <div >



                    @yield('main')



            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr/> <hr/>

        <!-- Footer -->
        <footer>
            <div class="row">

                <div class="col-lg-5">
				<h3>SUST Admission HelpLine</h3>
				<p> শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে অস্নাতক ভর্তি পরীক্ষায় অংশগ্রহণকারী পরীক্ষার্থীদের সাহায্য সহযোগীতার জন্যে তৈরি</p>

                </div>

                <div class="col-lg-3">
                    
					<h3>Important Links:</h3>
						<p><a class="mark" href="http://www.sust.edu/">SUST Web site</a></p>
						<p><a href="http://cse.sust.edu/">SUST CSE</a></p>
						<p><a href="https://en.wikipedia.org/wiki/Shahjalal_University_of_Science_and_Technology">Wikipedia</a></p>					
						<p><a href="http://sylhetmetropolitanpolice.com/">Sylhet Police</a></p>
						<p><a href="http://www.bgb.sylhet.gov.bd/">Sylhet BGB</a></p>

                </div>

                <div class="col-md-4">
                       <h3>About it</h3>
					   <p>These project is created by <b> Minhazul Kabir</b> Under 
					   <b>
					<br/>	MD MAHADI HASAN NAHID 
					<br/>	Lecturer
					<br/>	Department of Computer Science and Engineering (CSE)
					</br>	Shahjalal University of Science and Technology (SUST), Sylhet - 3114  </p>
						</b>
                </div>

            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
