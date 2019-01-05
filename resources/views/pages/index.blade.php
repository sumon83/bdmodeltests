@extends('layouts.app_layout')

@section('content')
        
        <header>           
                <div class="container">
                        <div class="row header">
                            <div class="col-xs-12 col-sm-8 logo">
                                <a class="logo-img" href="">
                                    <img class="img-responsive" src=" assets/img/logo.png " alt="BD Model Test" />    
                                </a>
                                <div class="site-title">
                                    <h1><a href="">{{$headline}}</a></h1>
                                    <p>A handy tool to test your skills</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 pull-right">
                                <p class="log-reg pull-right">
                                    
                                    <a href="   ('users');">Login</a> <span>|</span><a href="   ('student-registration') ">Registration</a>
                                    
                                    <a href="   ('logout');">Logout</a>
                                    
                                    </p>
                                <p class="fa fa-phone pull-right clr-both"><span>01719287625</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a class="btn btn-social-icon btn-facebook btn-xs" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-social-icon btn-google-plus btn-xs" href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-social-icon btn-twitter btn-xs" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>                                        
            </header>
            <section class="nav-banner">
                <nav>
                    <div class="container mainnav">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="navbar navbar-default" role="navigation">
                                    <div class="navbar-header" data-toggle="collapse" data-target=".navbar-collapse">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Main Menu</a>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <nav>
                                                <div class="container mainnav">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="navbar navbar-default" role="navigation">
                                                                <div class="navbar-header" data-toggle="collapse" data-target=".navbar-collapse">
                                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                                        <span class="sr-only">Toggle navigation</span>
                                                                        <span class="icon-bar"></span>
                                                                        <span class="icon-bar"></span>
                                                                        <span class="icon-bar"></span>
                                                                    </button>
                                                                    <a class="navbar-brand" href="#">Main Menu</a>
                                                                </div>
                                                                <div class="navbar-collapse collapse">
                                                                    <ul class="nav navbar-nav"><li class="  first"><a href="http:localhost/bdmodeltest/about-us">About Us</a></li><li class="  item-2"><a href="http:localhost/bdmodeltest/model-test">Model Test</a></li><li class="  item-3"><a href="http:localhost/bdmodeltest/old-model-test">Old Model Test</a></li><li class="  item-4"><a href="http:localhost/bdmodeltest/practice">Practice</a></li><li class=" last item-5"><a href="http:localhost/bdmodeltest/contact-us">Contact Us</a></li></ul>                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="banner">
                    <div class="container">
                        <div class="girl-img">
                            <div class="row banner-inner">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="slogan">Test Your Skills</p>
                                    <p class="subtitle">Know before you go</p> 
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-7 pull-right">
                                            <div class="sample-test">
                                                <h4 class="sample-test-title">Take a Sample Test</h4>
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Email:</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Phone:</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">Start Test</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="new-released-model-tests">
                        <div class="container">
                            <h2>New released Model Tests</h2>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/sumon.jpg') " alt="Sumon" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/adil.jpg') " alt="Adil" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/mohammad-rahman.jpg') " alt="Mohammad Rahman" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/mizan.jpg') " alt="Mizan" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/shohel.jpg') " alt="Shohel" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 nrmt-box">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 nrmt-img">
                                            <img class="img-responsive" src="   ('assets/img/mizan.jpg') " alt="Mizan" />    
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <h5>Teachers Name</h5>
                                            <p class="nrmt-school">Brahmondi K.K.M. High School</p>
                                            <p class="nrmt-subject-class">
                                                Subject: <span>Physics</span><br />
                                                Class:  <span>VII</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-12">
                                            <p class="nrmt-des">
                                                50 question from chapter 2 to 5 from where students can get 
                                                prepare and sit for a test and justify themself. and more text if a 
                                                teacher wants to brief himself and about the model test.
                                            </p>
                                            <button type="submit" class="btn btn-default">Start Test</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonials">
                        <div class="container">
                            <h2>Testimonials</h2>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <img class="img-responsive" src="   ('assets/img/testimonial-img-01.jpg') " alt="Testimonial" />   
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p>
                                                Testimonial is the remark of clients who experienced the services
                                                of progress insurance and reality inc. and become satisfied from
                                                our customer service. Testimonial is the remark of clients who 
                                                experienced the services of progress...<a href="">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <img class="img-responsive" src="   ('assets/img/testimonial-img-01.jpg') " alt="Testimonial" />   
                                        </div>
                                        <div class="col-xs-12 col-sm-9">
                                            <p>
                                                Testimonial is the remark of clients who experienced the services
                                                of progress insurance and reality inc. and become satisfied from
                                                our customer service. Testimonial is the remark of clients who 
                                                experienced the services of progress...<a href="">read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <footer>           
                <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 footer-contact">
                                <ul class="nav navbar-nav">
                                        <li class="  first"><a href="http://localhost/bdmodeltest/home">Home</a></li>
                                        <li class="  item-1"><a href="http://localhost/bdmodeltest/about-us">About Us</a></li>
                                        <li class="  item-2"><a href="http://localhost/bdmodeltest/insert_questions">Insert Questions</a></li>
                                        <li class="  item-2"><a href="http://localhost/bdmodeltest/teachers-registration">Teachers Registration</a></li>
                                        <li class=" last item-3"><a href="http://localhost/bdmodeltest/contact-us">Contact Us</a></li>
                                </ul>
                                <p class="copyright">Copyright © 2015 BD Model Test. All rights reserved.</p>
                            </div>
                            <div class="col-xs-12 col-sm-3 footer-right">
                                <div class="pull-right">
                                    <p class="fa fa-envelope"><a href="mailto:info@bdmodeltest.com">info@bdmodeltest.com</a></p>
                                    <p class="credit">
                                        Powered by <a href="http:www.ziawebsolutions.com">Zia Web Solutions</a><br> 
                                        <a href="http:www.ziawebsolutions.com/services/web-design">Web Design</a> . <a href="http:www.ziawebsolutions.com/services/web-development">Web Development</a> . <a href="http:www.ziawebsolutions.com/services/search-engine-optimization">SEO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
            </footer>
@endsection
