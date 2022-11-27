<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admintest</title>
    <link rel="stylesheet" href="/assets/css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


</head>
<body>
<div class="container">

    <!-- mobile top -->
    <div class="mob-logo">
        <span class="logo">
            <img src="/assets/imgs/logo.png"/>
        </span>
        <span>
            <img src="/assets/imgs/icons/menu.png"/>
        </span>
    </div>
    <!-- end mobile top -->

    <div class="main">

        <!-- left menu -->
        <nav>
            <ul>
                <li>
                    <div>
                        <a href="/"><img src="/assets/imgs/logo.png"/></a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/dashboard.png"/><br/>Dasboard</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/analytics.png"/><br/>Analytics</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/media.png"/><br/>Media</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/comments.png"/><br/>Comments</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/widgets.png"/><br/>Widgets</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/planner.png"/><br/>Planner</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/reports.png"/><br/>Reports</a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href=""><img src="/assets/imgs/icons/directions.png"/><br/>Directions</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- end left menu -->


        <div>

            <!-- top -->
            <header class="top-panel">

                <!-- search -->
                <section class="search-container">
                    <div>
                        <form>
                            <input type="text" placeholder="Search"/>
                        </form>
                        <div><img src="/assets/imgs/icons/lupa.png"/></div>
                    </div>
                </section>
                <!-- search -->

                <!-- logged user -->
                <section class="user-container">
                    <div class="avatar"><img src="/assets/imgs/avatar.png"/></div>
                    <span>Welome, Asif Aleem</span>
                    <div><img src="/assets/imgs/icons/mail.png"/></div>
                    <div><img src="/assets/imgs/icons/message.png"/></div>
                    <div><img src="/assets/imgs/icons/setting.png"/></div>
                    <span class="mob-logout">LOGOUT</span>
                </section>

                <section class="logout-container">
                    <button>LOGOUT</button>
                </section>
                <!-- end logged user -->

            </header>
            <!-- end top -->

            <main class="content ">
                <div class="dashboard-container d-block">

                    <!-- chart -->
                    <div class="dashoard-canvas">
                        <canvas></canvas>
                    </div>
                    <section class="recent">
                        <span>Recent Activity</span>
                        <span><a href=""><a href="">See all <img src="/assets/imgs/icons/recent-arr.png"/></a></span>
                    </section>
                    <!-- end chart -->

                    <!-- recent list -->
                    <section class="recent-list">
                        <div class="recent-list-item">
                            <div>
                                <span class="item-header">Green Dot POS Money Load</span><br/>
                                <span class="item-desc">Funds loaded through Green Dot load network.</span>
                            </div>
                            <div class="text-end">
                                <span class="item-money-plus">$834.19</span><br/>
                                <span class="item-date">01/09/13</span>
                            </div>
                        </div>

                        <div class="recent-list-item">
                            <div>
                                <span class="item-header">POS Signature Purchase</span><br/>
                                <span class="item-desc">SMOKERS WORLD II, LAS VEGAS, NV, USA </span>
                            </div>
                            <div class="text-end">
                                <span class="item-money-minus">$450.39</span><br/>
                                <span class="item-date">01/07/13</span>
                            </div>
                        </div>

                        <div class="recent-list-item">
                            <div>
                                <span class="item-header">Load Money</span><br/>
                                <span class="item-desc">Funds Transfered From Bank Acount *5075</span>
                            </div>
                            <div class="text-end">
                                <span class="item-money-plus">$188.17</span><br/>
                                <span class="item-date">01/05/13</span>
                            </div>
                        </div>

                        <div class="recent-list-item">
                            <div>
                                <span class="item-header">POS Signature Purchase</span><br/>
                                <span class="item-desc">VONS STORE 2511, HENDERSON, NV, USA </span>
                            </div>
                            <div class="text-end">
                                <span class="item-money-minus">$7.19</span><br/>
                                <span class="item-date">01/09/13</span>
                            </div>
                        </div>

                        <div class="recent-list-item">
                            <div>
                                <span class="item-header">Load Money</span><br/>
                                <span class="item-desc">Funds Transfered From Bank Acount *5075</span>
                            </div>
                            <div class="text-end">
                                <span class="item-money-plus">$188.17</span><br/>
                                <span class="item-date">01/05/13</span>
                            </div>
                        </div>
                    </section>
                    <!-- end recent list -->

                </div>

                <aside class="right-column">

                    <!-- balance -->
                    <section class="balance">
                        <span>Balance</span><br/>
                        <span class="money">
                        $14,679
                        <span class="icon-bar">
                            <img src="/assets/imgs/icons/bar.png"/>
                        </span>
                    </span>
                    </section>
                    <!-- end balance -->

                    <!-- quick links -->
                    <section class="quick-links">
                        <div class="header">Quick Links
                            <span><img src="/assets/imgs/icons/links-arr.png"/></span>
                        </div>
                        <ul>
                            <li>
                                <a href="">New Tasks</a>
                                <img src="/assets/imgs/icons/tacks.png"/>

                            </li>
                            <li>
                                <a href="">Activity</a>
                                <img src="/assets/imgs/icons/activity.png"/>
                            </li>
                            <li>
                                <a href="">Parameters</a>
                                <img src="/assets/imgs/icons/paraneters.png"/>
                            </li>
                            <li>
                                <a href="">My Cards</a>
                                <img src="/assets/imgs/icons/card.png"/>
                            </li>
                            <li>
                                <a href="">Users</a>
                                <img src="/assets/imgs/icons/user.png"/>
                            </li>
                        </ul>
                    </section>
                    <!-- end quick links -->

                    <!-- form response error -->
                    <section class="form-response-success">
                        <span>Form response success</span><br/>
                        <span class="message">
                        </span>
                    </section>
                    <!-- form response error -->

                    <!-- form response error -->
                    <section class="form-response-error">
                        <span>Form response error</span><br/>
                        <span class="message">
                        </span>
                    </section>
                    <!-- form response error -->

                    <!-- customer support-->
                    <section class="customer-support">
                        <div class="header">Customer Support
                            <span><img src="/assets/imgs/icons/links-arr-orange.png"/></span>
                        </div>
                        <form  id="form-customer-support">
                            <input type="text" name="name" placeholder="Name" required data-pattern="[\u0400-\u04ff\s]{3,60}" title="Имя должно быть на русском языке" />
                            <input type="text" name="email" placeholder="Email" required data-pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Некорректный email"/>
                            <textarea placeholder="Comments" name="comments" required data-pattern="[\u0400-\u04ff\s]{3,300}" title="Сообщение должно быть на русском языке"></textarea><br/>
                            <button type="submit">SEND</button>
                        </form>
                    </section>
                    <!-- end customer support-->

                </aside>

            </main>

        </div>

    </div>
</div>
<script src="/assets/js/scripts.js"></script>
</body>
</html>