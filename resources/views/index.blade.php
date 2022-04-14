<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('data/css/style.css') }}">
    <link rel="icon" href="{{ asset('data/images/abstract_background_gradient_01.jpg') }}">
    <title>getShiba.com</title>
</head>

<body>
    <div class="landpage-circle animate__animated animate__swing"></div>
    <header>
        <div class="logo-container">
            <a href="{{ url('/') }}"> <h1>GetShiba</h1> </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{route('index')}}">home</a></li>
                <li><a href="{{ route('login') }}">login</a></li>
                <li><a href="{{ route('register') }}">register</a></li>
                <li><a href="{{ asset('faqs') }}">FAQS</a></li>
            </ul>
        </nav>
        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                <img src="{{ asset('data/images/1193.png') }}" alt="" id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li class="li"><div class="bar"></div><a href="{{route('index')}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
                <li class="li">
                    <div class="bar"></div><a href="{{ route('login') }}">login <img
                            src="{{ asset('data/images/arrow-24-xxl.png') }}" alt="" class="arrow"></a>
                </li>
                <li class="li">
                    <div class="bar"></div><a href="{{ route('register') }}">reigster<img
                            src="{{ asset('data/images/arrow-24-xxl.png') }}" alt="" class="arrow"></a>
                </li>
                <li class="li">
                    <div class="bar"></div><a href="{{ route('faqs') }}">faqs<img
                            src="{{ asset('data/images/arrow-24-xxl.png') }}" alt="" class="arrow"></a>
                </li>
            </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>

    </header>
    <section class="landpage">

        <div class="welcome-text-container">
            <h1 class="animate__animated animate__flipInY">building world's firts most sustainable shib minner</h1>
            <p class="animate__animated animate__backInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reiciendis
                illum neque aliquam minima maxime cumque sunt id expedita repellat
                architecto voluptas iure rem voluptatum,
                soluta saepe reprehenderit quas! In distinctio repellat autem deserunt?
            </p>
            <div class="line">

            </div>
            <div class="btn-container animate__animated animate__rollIn">
                <button class="get-started">get started</button>
                <button class="get-token">get token</button>
            </div>
        </div>
        <div class="landpage-card-container">
            <div class="landpage-card">

            </div>
        </div>
    </section>

    <section class="payment-section">
        <div class="payment-section-text-container">
            <h1>payment plan<br> <span class="small-line"></span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis excepturi
                exercitationem animi voluptas earum beatae aspernatur saepe harum, et,
                quas pariatur accusamus odit minus voluptates! Laudantium velit asperiores
            </p>
        </div>
        <div class="payment-card-container">

            <div class="payment-card  card1">
                <div class="pay-circle">
                    <p>free plan</p>
                </div>
                <img src="{{ asset('data/images/bronze.png') }}" alt="" class="label">
                <div class="payment-card-text-container">
                    <h3><span class="down">$</span>0.00/ <sup class="up">for free</sup></h3>
                </div>
                <div class="option-container">
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>full plan functionality</p>
                    </li>
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>no payment dtails required</p>
                    </li>
                </div>
                <button class="try-now-btn">try for free</button>
            </div>
            <div class="payment-card ">
                <div class="pay-circle">
                    <p>premium plan</p>
                </div>
                <img src="{{ asset('data/images/silver.png') }}" alt="" class="label">
                <div class="payment-card-text-container">
                    <h3><span class="down">$</span>10.00/ <sup class="up">60 days</sup></h3>
                </div>
                <div class="option-container">
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>full plan functionality</p>
                    </li>
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>no payment dtails required</p>
                    </li>
                </div>
                <button class="try-now-btn diff">buy now</button>
            </div>
            <div class="payment-card ">
                <div class="pay-circle">
                    <p>golden plan</p>
                </div>
                <img src="{{ asset('data/images/gold.png') }}" alt="" class="label upper">
                <div class="payment-card-text-container">
                    <h3><span class="down">$</span>25.00/ <sup class="up">30 days</sup></h3>
                </div>
                <div class="option-container">
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>full plan functionality</p>
                    </li>
                    <li><img src="{{ asset('data/images/thick.png') }}" alt="" class="thick">
                        <p>no payment dtails required</p>
                    </li>
                </div>
                <button class="try-now-btn diff">buy now</button>
            </div>
        </div>
    </section>
    <section class="payment-section">
        <div class="payment-section-text-container">
            <h1>getshiba features<br> <span class="small-line"></span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis excepturi
                exercitationem animi voluptas earum beatae aspernatur saepe harum, et,
            </p>
        </div>
        <div class="payment-card-container">

            <div class="payment-card second">
                <img src="{{ asset('data/images/login.png') }}" alt="">
                <a href="#">register</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni blanditiis excepturi eos deleniti praesentium dolore.
                </p>
            </div>
            <div class="payment-card second">
                <img src="{{ asset('data/images/finance.png') }}" alt="">
                <a href="#">choose a plan</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni blanditiis excepturi eos deleniti praesentium dolore.
                </p>
            </div>
            <div class="payment-card second">
                <img src="{{ asset('data/images/salary.png') }}" alt="">
                <a href="#">start earning</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni blanditiis excepturi eos deleniti praesentium dolore.
                </p>
            </div>
        </div>
    </section>
    <section class="nft-section">
        <h2>buy NFT's and other crypto currencie from <span class="getshiba">GetShiba</span></h2>
        <a href="#">check listed tokens</a>
    </section>
    <section class="we-accept-section">
        <div class="we-accept-text-container">
            <h1>we accept<br> <span class="small-line"></span></h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum ducimus maxime odi
                fuga sit illum quidem illo distinctio, sequi non nihil,
                obcaecati animi blanditiis voluptas nulla, quasi assumenda possimus mollitia!
            </p>
        </div>
        <div class="we-accept-icon-container">
            <div class="crypto-icon"><img src="{{ asset('data/images/bitcoin.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/dogecoin.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/shiba inu.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/tron.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/usdt.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/xrp.png') }}" alt=""></div>
            <div class="crypto-icon"><img src="{{ asset('data/images/litcoin.png') }}" alt=""></div>
        </div>
    </section>
    <h1 class="blog-header">blog <br> <span class="small-line"></span></h1>
    <section class="blog-section">
        <div class="blog-card">
            <img src="{{ asset('data/images/pexels-photo-8353804.jpeg') }}" alt="">
            <div class="card-body">
                <p class="post-date">27/09/22</p>
                <h3>how to use GetShiba to make cool money</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    At quia reprehenderit dolore sunt,
                    voluptate dicta! Enim deserunt ipsum officiis dolorum.
                </p>
                <button class="read-more-btn">read more</button>
            </div>
        </div>
        <div class="blog-card">
            <img src="{{ asset('data/images/pexels-photo-6205763.jpeg') }}" alt="">
            <div class="card-body">
                <p class="post-date">27/09/22</p>
                <h3>how to use GetShiba to make cool money</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    At quia reprehenderit dolore sunt,
                    voluptate dicta! Enim deserunt ipsum officiis dolorum.
                </p>
                <button class="read-more-btn">read more</button>
            </div>
        </div>
        <div class="blog-card">
            <img src="{{ asset('data/images/pexels-photo-5833775.jpeg') }}" alt="">
            <div class="card-body">
                <p class="post-date">27/09/22</p>
                <h3>how to use GetShiba to make cool money</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    At quia reprehenderit dolore sunt,
                    voluptate dicta! Enim deserunt ipsum officiis dolorum.
                </p>
                <button class="read-more-btn">read more</button>
            </div>
        </div>
    </section>
    <div class="fixed">
        <div class="overlay"></div>
    </div>
    <footer>
        <div class="footer-contact">
            <div class="footer-text">
                <h2>start mining now and earn big with <span class="getshiba"> GetShiba</span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo quae molestias
                    necessitatibus blanditiis quo tempora fuga itaque animi provident!
                    Reprehenderit porro omnis eveniet alias modi non adipisci magnam unde. Neque.
                </p>
            </div>
            <div class="form-container">
                <h1>get in touch</h1>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contactUs') }}" method="POST" class="contact-form">
                    @csrf
                    <input type="text" placeholder="input your name" {{ old('name') }} name="name"
                        class="contact-input" id="">

                    @if ($errors->has('email'))
                        <div class="error">
                            {{ $errors->first('email') }}
                        </div>
                    @endif

                    <input type="email" placeholder="enter email" {{ old('email') }} name="email"
                        class="contact-input" id="email-input" required>


                    <textarea name="message" id="text-area" cols="30" {{ old('message') }} rows="10" class="text-area"
                        placeholder="type your message here"></textarea>

                    @if ($errors->has('message'))
                        <div class="error">
                            {{ $errors->first('message') }}
                        </div>
                    @endif

                    <button class="submit-btn" type="submit">
                        <div class="svg-wrapper-1 ">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span>Send</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="link-container">
            <div class="logo-container">
                <h1>GetShiba</h1>
            </div>
            <ul class="footer-list">
                <li><a href="">about</a></li>
                <li><a href="">token</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">sign in</a></li>
            </ul>
            <div class="social-media-handle">
                <a href="#"><img src="{{ asset('data/images/facebook.png') }}" alt="" class="icon"></a>
                <a href="#"><img src="{{ asset('data/images/insta.png') }}" alt="" class="icon"></a>
                <a href="#"><img src="{{ asset('data/images/whatsapp.png') }}" alt="" class="icon"></a>
            </div>
        </div>
        <div class="long-line"></div>
        <p class="copywrite">&copy; copywrite 2022/ all rights reserved</p>
        <img src="{{ asset('data/images/Frame 2.png') }}" alt="" class="footer-img">
        <!-- <img src="./images/Frame 2.png" alt="" class="footer-img2"> -->
    </footer>
    <script src="{{ asset('data/js/main.js') }}"></script>
</body>

</html>
