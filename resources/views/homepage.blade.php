@extends('layouts.layout')

@section('title', 'Aaron Yates - Web Developer')

@section ('content')
    <section class="hero zell-back">
        <div class="hero-body">
            <div class="container has-text-centered">
                <img class="round-img" src="{{ asset('img/headshot.jpg') }}" alt="Aaron Yates" width=150px, height=150px>
                <div class="container home-quote">
                    Hello, my name is Aaron Yates. I am an aspiring <strong>web developer</strong> who is currently studying and working on projects using: <strong>Laravel, Vue.js</strong> and more. I am also a Ski Instructor and have worked one season in Zell am See, Austria.
                </div>
            </div>
        </div>
    </section>
    <section class="hero section-title has-text-centered">
        <div class="hero-body">
            <h1>ABOUT ME</h1>
            <p>Get to know a little about me</p>
        </div>
    </section>
    <section class="about-content">
        <div class="container">
            <div class="columns">
                <div class="column about-body">
                    <h2>TECHNICAL BACKGROUND</h2>
                    <div class="line-one"></div>
                    <br>
                    So a bit more about me... let's start with my technical background. I graduated in Computer Science from the University of York in 2019.
                    Sicne then I have been studying online using resources both free and paid to learn about all aspects of Web Development.
                    I started on Laracast learning the bassics of PHP all the way to advanced Laravel and covering over JavaScript Frameworks along the way.
                    Now I am currently developing a Poker Hand Sharing website called: HandShare, which utilises the Laravel Framework. Whilst working on that
                    I am also building up a portfolio of projects and websites I make in my free time.
                </div>
                <div class="column about-body">
                    <h2>MORE PERSONAL</h2>
                    <div class="line-two"></div>
                    <br>
                    You may be wondering? Why did I not seek employment after graduating. Well to be frank, I needed a break from Education and Full Time Employment.
                    You can read more about my reasoning here. But for now the TL:DR it for you: university took a lot out of me and I wanted to "Live" a little bit.
                    So between December 2019 - March 2020 I trained to be and became a Ski Instructor. I traveled to France pass my exams and then resided in Zell
                    am See in Austria for most of my trip to work as a Full Time Ski Instructor.
                </div>
            </div>
            <div class="is-right"><a class="section-link" href="/about">LearnMore About Me Here</a></div>
        </div>
    </section>
    <section class="hero section-title has-text-centered">
        <div class="hero-body">
            <h1>SKILLS</h1>
            <p>What skills do I have?</p>
        </div>
    </section>
    <section class="section skills-content has-text-centered">
        <div class="container">
            <!-- Start Carousel -->
            <div id="carousel-demo" class="carousel">
                <div class="item">
                    <img src="{{ asset('img/laravel.png') }}">
                    <div class="container item-text">
                        <strong>Laravel</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/vue.png') }}">
                    <div class="container item-text">
                        <strong>Vue.JS</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/html.png') }}">
                    <div class="container item-text">
                        <strong>HTML5</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/css.png') }}">
                    <div class="container item-text">
                        <strong>CSS</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/js.png') }}">
                    <div class="container item-text">
                        <strong>Javascript</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/html.png') }}">
                    <div class="container item-text">
                        <strong>jQuery</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('img/ps.png') }}">
                    <div class="container item-text">
                        <strong>Adobe Tools</strong>
                        <br>
                        Strong Knowledge and Experience in consistent, condense and well written HTML.
                    </div>
                </div>
            </div>
            <!-- End Carousel -->
        </div>
    </section>
    <section class="hero section-title has-text-centered">
        <div class="hero-body">
            <h1>PROJECTS</h1>
            <p>All my projects I have worked on... past and present.</p>
        </div>
    </section>
    <section class="projects-content">
        <div class="container has-text-centered">
            Placeholder
        </div>
    </section>
    <section class="hero section-title has-text-centered">
        <div class="hero-body">
            <h1>BLOG</h1>
            <p>A few written articles about all sorts</p>
        </div>
    </section>
    <section class="blog-content">
        <div class="container has-text-centered">
            Placeholder
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/js/bulma-carousel.min.js"></script>
    <script>
    bulmaCarousel.attach('#carousel-demo', {
        slidesToScroll: 1,
        slidesToShow: 3,
        loop: true,
        infinite: true,
        autoplay: true
    });
    </script>
@endsection
