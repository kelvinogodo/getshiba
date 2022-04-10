<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('data/css/dashboard.css')}}">
</head>
<body>
    <section class="dashboard-landpage">
        <aside>
            <div class="logo-container">
                <h1>GetShiba</h1>
            </div>

            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/overview.png')}}" alt="" class="icon"><a href="{{route("dashboard")}}" class="dashboard-links">overview</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/salary.png')}}" alt="" class="icon"> <a href="{{route("reinvest")}}" class="dashboard-links">reinvest</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/finance.png')}}" alt="" class="icon"> <a href="{{route("referrals")}}" class="dashboard-links">referral</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/b00b3270-c001-4c1c-88be-1fa129600aff-removebg-preview.png')}}" alt="" class="icon"> <a href="{{route("transactions")}}" class="dashboard-links">transactions</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/debit-card.png')}}" alt="" class="icon"><a href="{{route("plans")}}" class="dashboard-links">plans</a></div>
            <div class="link-container"><div class="bar"></div><img src="{{asset('data/images/shiba inu.png')}}" alt="" class="icon"><a href="{{route("accountinfo")}}" class="dashboard-links">account info</a></div>

        </aside>
                <div class="info-wrapper">
                    <div class="user-info-display">
                        <h1 class="hello-user">hi, joshua</h1>
                        <div class="user-icon-container">
                            <div class="notification-icon-container">
                                <img src="{{asset('data/images/profile1.jpg')}}" alt="" class="user-icon ">
                                <div class="profile-modal">
                                    <div class="close-profile">x</div>
                                    <div class="change-password">
                                        <a href="#">change password</a>
                                    </div>
                                    <button class="logout">logout</button>
                                </div>
                            </div>
                            <div class="profile-icon-container">
                                <img src="{{asset('data/images/bell_notification.gif')}}" alt="" class="user-icon notification">
                                <div class="notification-modal">
                                    <header class="notification-header">
                                        <h2>notifications</h2>
                                        <div class="header-icon-container">
                                            <div class="dot-container">
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                                <div class="dot"></div>
                                            </div>
                                            <h3 class="close-notification">x</h3>
                                        </div>
                                    </header>
                                    <div class="notification-msg-container">
                                        <div class="msg-wrapper">
                                            <div class="msg-badge "><h1>R</h1></div>
                                            <div class="msg">
                                                <h3>prove submitted succesfully</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <p class="time">2 hours ago</p>
                                            </div>
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg-badge blue"><h1>S</h1></div>
                                            <div class="msg">
                                                <h3>statistics</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <p class="time">1:30 hours ago</p>
                                            </div>
                                        </div>
                                        <div class="msg-wrapper">
                                            <div class="msg-badge pink"><h1>L</h1></div>
                                            <div class="msg">
                                                <h3>your gold plan has expired</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                                <p class="time">1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="notification-footer">
                                        <a href="#">see all</a>
                                    </footer>
                                </div>
                            </div>
                            <div class="share-icon-container">
                                <img src="{{asset('data/images/inbox.gif')}}" alt="" class="user-icon">
                            </div>
                        </div>
                    </div>
                    <div class="page-displayer">
                        <p class="header">referral details</p>
            <div class=" overview-container animate__animated animate__bounceInDown">
                <div class="overview-card span-2">
                    <h2>0x2375hjv7r84758gty56</h2>
                </div>
                <div class="overview-card">
                    <h2>10%</h2>
                </div>
                <div class="overview-card">
                    <h2>1.00 usd</h2>
                </div>

            </div>
            <div class="my-plan-container animate__animated animate__bounceInUp">
                <header>
                    <p class="transaction-header">my referrals</p>
                </header>
                <div class="info-container">
                    <p>user</p>
                    <p>referral earns</p>
                </div>
                <div class="my-plan-card-container">
                    <div class="my-plan-card">
                        <p>blessing</p>
                        <p>angela</p>
                        <p>rose</p>
                        <p>precious</p>
                        <p>victor</p>
                        <p>benjamin</p>
                    </div>
                    <div class="my-plan-card">
                        <p> 0.45687983 shib</p>
                        <p >0.34758445 shib</p>
                        <p >0.45746756 shib </p>
                        <p >1.45436545 shib</p>
                        <p >2.57684643 shib </p>
                        <p >0.45568545 shib</p>
                    </div>

                </div>
            </div>
            <div class="my-plan-container animate__animated animate__bounceInUp">
                <header>
                    <p class="transaction-header">my referrals</p>
                </header>
                <div class="info-container">
                    <p>date</p>
                    <p>amount</p>
                </div>
                <div class="my-plan-card-container">
                    <div class="my-plan-card">
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                        <p class="date">
                            2022/09/04 03:20:67
                        </p>
                    </div>
                    <div class="my-plan-card">
                        <p> 0.45687983 shib</p>
                        <p >0.34758445 shib</p>
                        <p >0.45746756 shib </p>
                        <p >1.45436545 shib</p>
                        <p >2.57684643 shib </p>
                        <p >0.45568545 shib</p>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="{{('data/js/main.js')}}"></script>
</body>
</html>
