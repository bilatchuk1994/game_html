<?php include("header.php"); ?>

<div class="main-wrapper">

  <div class="left-content-wrapper">
    <a href="#" target="_blank" class="d-inline-block">
      <img src="img/left-img.jpg" class="img-fluid" alt="">
    </a>
  </div>


  <div class="site-center">

    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-4">
            <div class="logo">
              <a href="/">
                <img src="img/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-3 col-lg-1">
            <div class="lang">
              <ul>
                <li class="lang-current">
                  <span>RU</span>
                  <img src="img/ru.png" alt="Icon">
                </li>
                <li>
                  <a href="">
                    <span>ENG</span>
                    <img src="img/eng.png" alt="Icon">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-3 col-lg-7">
            <nav class="menu-nav">
              <div>
                <ul class="menu">
                  <li><a href=""><i>All Vote Servers</i> <span>97</span></a></li>
                  <li><a href=""><i>Add Server</i>  <span class="free">Free</span></a></li>
                  <li><a href=""><i>Advertising</i>  </a></li>
                  <li><a href=""><i>Contacts</i></a></li>
                  <li><a href=""><i>Sing in / Register</i></a></li>
                </ul>
              </div>
            </nav>
            <div class="btn-menu">
              <div id="toggle" class="">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main class="main">
      <div class="container">
        <div class="banner-block">
          <div class="row">
            <div class="col-lg-6">
              <a href="">
                <div class="top-banner object-fit">
                  <img src="img/top-left-banner.png" alt="">
                </div>
              </a>
            </div>
            <div class="col-lg-6">
              <a href="">
                <div class="top-banner object-fit">
                  <img src="img/top-right-banner.png" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="main-block main-vote">
          <div class="site-row">
            <div class="left-col">
              <div class="row">
                <div class="col-lg-12">
                  <div class="breadcrums-page">
                    <div class="cp-breadcrums">
                      <ul>
                        <li><a href="">Home</a></li>
                        <li>/</li>
                        <li>Cabinets</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="register-block">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="mail.php" method="POST">
                      <div class="register-options">
                        <div class="register-options-player register-options-block">
                          <label class="register-options-radio">
                            <input type="radio" name="radio" checked>
                            <span class="radiobtn"></span>
                            <span class="text">For Player</span>
                            <span class="register-options-fields">
                              <span class="register-options-field">Vote</span>
                              <span class="register-options-field">Comments</span>  
                            </span>
                          </label>
                        </div>
                        <div class="register-options-admin register-options-block">
                          <label class="register-options-radio">
                            <input type="radio" name="radio">
                            <span class="radiobtn"></span>
                            <span class="text">For Admin</span>
                            <span class="register-options-fields">
                              <span class="register-options-field">Add Server</span>
                              <span class="register-options-field">Buy Advertising</span>  
                            </span>
                          </label>
                        </div> 
                      </div>
                      <h3>Create account</h3>
                      <input type="text" placeholder="Login">
                      <input type="email" placeholder="E-Mail">
                      <input type="password" placeholder="Password">
                      <input type="password" placeholder="Confirm password">
                      <div class="register-field">
                        <div class="register-field-icon">
                          <img src="img/fb2.png" alt="Facebook">
                        </div>
                        <input type="text" placeholder="Facebook username (optional)">  
                      </div>
                      <div class="register-field">
                        <div class="register-field-icon">
                          <img src="img/sk2.png" alt="Skype">
                        </div>
                        <input type="text" placeholder="Skype username (optional)">
                      </div>
                    </form>
                    <div class="flex-start">
                      <div class="captcha">
                        <img class="img-responsive" src="img/captcha.jpg" alt="">
                      </div>
                    </div>
                    <div class="flex-between">
                      <div>
                        <a href="">Sign in</a>
                      </div>
                      <div>
                        <button>Register</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
             
           </div>


           <div class="right-col">
            <div class="right-banner object-fit">
              <a href=""><img src="img/right-banner.jpg" alt=""></a>
            </div>
              <div class="chronicle">
                <h3>CHRONICLE</h3>
                <div class="chronicle-block">
                  <div class="check-flex check-bold">
                    <div>
                      <a class="active" href="">ALL</a>
                    </div>
                    <div>
                      <span>301</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">INTERLUDE</a>
                    </div>
                    <div>
                      <span>188</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">HIGH FIVE</a>
                    </div>
                    <div>
                      <span>72</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">CLASSIC</a>
                    </div>
                    <div>
                      <span>18</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">FAFURION</a>
                    </div>
                    <div>
                      <span>9</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">EPILOGUE</a>
                    </div>
                    <div>
                      <span>6</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">C4</a>
                    </div>
                    <div>
                      <span>6</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">GVE</a>
                    </div>
                    <div>
                      <span>6</span>
                    </div>
                  </div>
                  <div class="check-flex check-small">
                    <div>
                      <a href="">GRACIA FINAL</a>
                    </div>
                    <div>
                      <span>1</span>
                    </div>
                  </div>
                  <div class="check-flex check-small">
                    <div>
                      <a href="">GRAND CRUSADE</a>
                    </div>
                    <div>
                      <span>1</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chronicle">
                <h3>CRITERIONS</h3>
                <div class="chronicle-block">
                  <div class="check-flex">
                    <div>
                      <a href="">PVP</a>
                    </div>
                    <div>
                      <span>118</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">MID-RATE</a>
                    </div>
                    <div>
                      <span>110</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">LOW-RATEE</a>
                    </div>
                    <div>
                      <span>88</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">CUSTOM</a>
                    </div>
                    <div>
                      <span>57</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chronicle">
                <h3>RATES</h3>
                <div class="chronicle-block">
                  <div class="check-flex">
                    <div>
                      <a href="">x100</a>
                    </div>
                    <div>
                      <span>118</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">x50</a>
                    </div>
                    <div>
                      <span>110</span>
                    </div>
                  </div>
                  <div class="check-flex">
                    <div>
                      <a href="">x1000</a>
                    </div>
                    <div>
                      <span>70</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">x1200</a>
                    </div>
                    <div>
                      <span>57</span>
                    </div>
                  </div>
                  <div class="check-flex check-low">
                    <div>
                      <a href="">x1</a>
                    </div>
                    <div>
                      <span>18</span>
                    </div>
                  </div>
                </div>
              </div>
            <div class="right-banner object-fit">
              <a href=""><img src="img/right-banner2.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         <div class="top-footer-text">
               <p>List of Lineage servers. Easy search of l2 servers.</p>
             </div>
         <p>You can choose l2 server by the following criteria:<br><br>Top Lineage 2 servers:<br>● The best projects compete here. By choosing one of these, you will be confident in the high online and long-term server.<br><br>By opening date (VIP section):<br>● New Lineage 2 servers are on the website home page, also there are available already open l2 pvp servers.<br>● We recommend you to pay attention to projects that are opening today, tomorrow or have already opened yesterday and earlier.<br><br>Platforms available:<br>● Lineage 2 PTS - original game version.<br>● L2j (Java) - with a lot of modifications and amenities.<br><br>Rates:<br>● A wide selection by rates: from classic low-rate x3, craft x50 and x100, mid-rate x75 to pvp x500 and custom x999.</p>
       </div>
     </div>
     <div class="row">
      <div class="col-lg-8">
        <div class="row no-gutters links">
          <a href="https://l2topservers.com/terms-of-use">TERMS OF USE</a>
          <a href="https://l2topservers.com/privacy-policy">PRIVACY POLICY</a>
          <a href="https://l2topservers.com/g2a-pay-terms-and-conditions">G2A.PAY TERMS AND CONDITIONS</a>
        </div>
        <h3>Copyright 2019 l2topservers.com. <span>All rights reserved.</span></h3>
      </div>
      <div class="col-lg-4">
        <div class="footer-social">
          <ul>
            <li class="instagram"><a href="" target="_blank"><img src="img/instagram.png" alt="Instagram"></a></li>
            <li class="twitter"><a href="" target="_blank"><img src="img/twitter.png" alt="Instagram"></a></li>
            <li class="facebook"><a href="" target="_blank"><img src="img/facebook.png" alt="Instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>

<div class="right-content-wrapper">
  <a href="#" target="_blank"  class="d-inline-block">
    <img src="img/right-img.jpg" class="img-fluid" alt="">
  </a>
</div>

</div>

<?php include("footer.php"); ?>