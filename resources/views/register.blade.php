<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('data/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="icon" href="{{asset('data/images/abstract_background_gradient_01.jpg')}}">
    <title>register</title>
</head>
<body>
    <div class="landpage-circle animate__animated animate__swing"></div>
    <header>
        <div class="logo-container">
            <h1>GetShiba</h1>
        </div>
        <nav>
            <ul>
                {{-- <li><a href="{{route("index")}}">home</a></li> --}}
                <li><a href="{{route("login")}}">login</a></li>
                <li><a href="{{route("register")}}">register</a></li>
                <li><a href="{{route("faqs")}}">FAQS</a></li>
            </ul>
        </nav>
        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
          <div class="menu-list-login">
               <img src="{{asset('data/images/1193.png')}}" alt=""  id="close-sidebar" class="close-btn">
          </div>
          <ul class="list-items">
            {{-- <li class="li"><div class="bar"></div><a href="{{route("index")}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li> --}}
             <li class="li"><div class="bar"></div><a href="{{route("login")}}">login <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
              <li class="li"><div class="bar"></div><a href="{{route("register")}}">reigster<img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li class="li"><div class="bar"></div><a href="{{route("faqs")}}">faqs<img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
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
              <img src="{{asset('data/images/sign-concept-illustration_114360-5375-removebg-preview.png')}}" alt="" class="animate__animated animate__bounceInUp">
          </div>
          <div class="landpage-card-container">
            <h1 class="lanpage-form animate__animated animate__bounceInDown">register </h1>
            <form action="" class="lanpage-form animate__animated animate__bounceInDown">

                <input type="text" name="" id="" placeholder="ENTER YOUR FULL NAME">
                <input type="text" name="" id="" placeholder="ENTER YOUR SHIBA WALLET ADDRESS">
                <input type="password" name="" id="" placeholder="PASSWORD">
                <input type="password" name="" id="" placeholder="CONFIRM PASSWORD">
                <button class="submit-btn register-btn">
                    <div class="svg-wrapper-1 ">
                      <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                        </svg>
                      </div>
                    </div>
                    <span>Send</span>
                  </button>
            </form>
            <p class="animate__animated animate__bounceInUp">already have an account ? <a href="{{route("login")}}">login</a></p>
          </div>
      </section>
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


                    @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif

            <form action="{{route('contactUs')}}" method="post" class="contact-form">
                @csrf


                <input type="text" placeholder="input your name"{{ old('name')}} name="name" class="contact-input" id="">
                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
              </div>
            @endif


                <input type="email" placeholder="enter email" {{ old('email')}} name="email" class="contact-input" id="email-input" required>




                <textarea name="message" id="text-area" cols="30" {{old("message")}} rows="10" class="text-area" placeholder="type your message here"></textarea>



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
                              <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
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
                <a href="#"><img src="{{asset('data/images/facebook.png')}}" alt="" class="icon"></a>
                <a href="#"><img src="{{asset('data/images/insta.png')}}" alt="" class="icon"></a>
                <a href="#"><img src="{{asset('data/images/whatsapp.png')}}" alt="" class="icon"></a>
            </div>
        </div>
        <div class="long-line"></div>
        <p class="copywrite">&copy; copywrite 2022/ all rights reserved</p>
        <img src="{{asset('data/images/Frame 2.png')}}" alt="" class="footer-img">
        <!-- <img src="./images/Frame 2.png" alt="" class="footer-img2"> -->
    </footer>
    <script src="{{asset('data/js/main.js')}}"></script>
</body>
</html>
