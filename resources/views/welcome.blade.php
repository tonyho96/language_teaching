@extends('layouts.home')

@section('content')
    <div class="main-content">
        <div class="bg-2">
            <div class="container">
                <div class="main-zone-1">
                    <h2 class="zone-title">Why italki Vietnam?</h2>
                    <hr class="redline">
                    <div class="row">
                        <p class="col-md-4">
                            The value of good education cannot be underestimated.
                            From the childhood and up to the adult age each of us tries to discover something new,
                            have deeper knowledge of various subjects and simply learn the world better.
                            Based on the level of your education you can earn respect and recognition in the society.
                        </p>
                        <p class="col-md-4">
                            You will get your future job and climb the career ladder depending on the knowledge
                            that you get at school, college, university, etc. Are you a fast learner?
                            How quickly can you solve different tasks and find the tight solution of a problem?
                            These are only some of the factors that determine your professional success.
                        </p>
                        <p class="col-md-4">
                            Such people are known to be successful not only in the professional sphere.
                            They are also likely to have longer and happier marriages. What conclusion can we draw
                            from everything said above? Being educated is beneficial and trendy.
                        </p>

                    </div>
                </div>
                <div class="main-zone-2">
                    <h2 class="zone-title">Find your teacher</h2>
                    <hr class="redline">

                    <div>
                        <img src="front/upload/teachers.jpg"><img>
                    </div>

                    <a class="red-btn" href="#">FIND YOUR TEACHER</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-zone-3">
                <h2 class="zone-title">How does it work?</h2>
                <hr class="redline">
                <div>
                    <img class="steps" src="front/upload/steps.png"></img>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h4>Choose a teacher</h4>
                        <p>Watch the teacher's video introduction, and read reviews from previous students.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Choose a date and time</h4>
                        <p>Choose a time that's convenient for you.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Connect</h4>
                        <p>Take your lesson on Skype or other video chat software.</p>
                    </div>

                </div>
            </div>
            <div class="main-zone-4">
                <h2 class="zone-title">For the love of languages</h2>
                <hr class="redline">
                <div class="row">
                    <div class="col-md-3 main-zone-4-1">
                        <h4>Articles</h4>
                        <p>Language learning articles written by teachers and tutors.</p>
                        <h4>Language Exchange</h4>
                        <p>Find a language partner. Exchange time teaching your native language for time practicing a
                            foreign language.</p>
                        <h4>Notebook</h4>
                        <p>Get writing corrections for the language you are learning. Correct other people's writing in
                            your native language.</p>
                        <h4>Discussions</h4>
                        <p>Engage with the community on language topics.</p>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 main-zone-4-2">
                        <img class="vertical_line" src="front/upload/vertical_line.png">
                        <div class="main-zone-4-2-1">
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Professional Teachers</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Community Tutors</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Language Partners</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Articles</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Notebook</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Answers</span>
                            </div>
                            <div>
                                <image src="front/upload/comment_icon.png"/>
                                <span>Discussions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-zone-5">
            <div class="container">
                <h2 class="zone-title">Testimonials</h2>
                <hr class="redline">
                <div>
                    <h4>Kathleen Valdez </h4>
                    <p>Female from United States </p>
                    <div class="row">
                        <div style="float: left;">
                            <img src="front/upload/left.png" style="top: 100px; position: relative;"></img>
                        </div>
                        <img src="front/upload/female.png"></img>
                        <div style="float: right;">
                            <img src="front/upload/right.png" style=" top: 100px; position: relative;"></img>
                        </div>
                    </div>
                    <p>Thank you very much. I'm impressed with your service.
                        I've already told my friends about your company<br> and your quick response, thanks again!</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="main-zone-6">
                <h2 class="zone-title">Contact Us</h2>
                <hr class="redline">
                <form>
                    <input class="main-zone-5_input" type="text" placeholder="Name">
                    <input class="main-zone-5_input" type="text" placeholder="Email">
                    <input class="main-zone-5_input" type="text" placeholder="Phone">
                    <input class="main-zone-5_input" type="text" placeholder="Message" id="message_input">
                    <button class="red-btn">SEND</button>
                </form>

                <div>
                    <h4>CÔNG TY TNHH ITALKI VIETNAM</h4>
                    <p>Block A - Floor 14 - Room C3 - <br>
                        Sky Center, 5B Phổ Quang, Ward 02, Dist. Tân Bình, HCMC, Vietnam<br>
                        Website: http://italkivietnam.vn </p>
                </div>

            </div>
        </div>
    </div>
@endsection

