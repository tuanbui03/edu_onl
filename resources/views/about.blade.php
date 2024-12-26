@extends('layouts.app')

@section('title', 'About')

@section('content')

    <section class="about">

        <div class="row">

            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut dolorum quasi illo? Distinctio expedita
                    commodi, nemo a quam error repellendus sint, fugiat quis numquam eum eveniet sequi aspernatur quaerat
                    tenetur.</p>
                <a href="{{ route('courses') }}" class="inline-btn">our courses</a>
            </div>

        </div>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <div>
                    <h3>+10k</h3>
                    <p>online courses</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-user-graduate"></i>
                <div>
                    <h3>+40k</h3>
                    <p>brilliant students</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-chalkboard-user"></i>
                <div>
                    <h3>+2k</h3>
                    <p>expert tutors</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-briefcase"></i>
                <div>
                    <h3>100%</h3>
                    <p>job placement</p>
                </div>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="heading">student's reviews</h1>

        <div class="box-container">

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-2.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-3.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-4.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-5.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-6.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam,
                    dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga.
                    Eligendi eaque molestiae modi?</p>
                <div class="student">
                    <img src="images/pic-7.jpg" alt="">
                    <div>
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
