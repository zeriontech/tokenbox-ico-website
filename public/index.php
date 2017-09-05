<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>TokenBox</title>
  <meta name="description" content="">
  <meta itemprop="description" content=""/>
  <link rel="stylesheet" href="assets/front/css/app.css" />
  <meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  <script type="text/javascript">
    window.sr = ScrollReveal({
      opacity: 0,
      easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
      distance: 0,
      viewFactor: 0.4,
      scale: 1,
      duration: 1200,
      mobile: false,
      rotate: { x: 0, y: 0, z: 0 }
    });

    if (!sr.tools.isMobile()) {
      document.documentElement.classList.add('sr-enabled')
    }
  </script>

  <style>
    .sr-enabled body > section {
      /*roverflow-x: hidden;*/
    }

    .sr-enabled .topblock .fade-in-item {
      visibility: hidden;
    }
  </style>
</head>
<body>

  <section class="topblock">
    <a class="hamburger-icon" id="hamburger-icon" href="#" title="">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </a>
    <div class="mobile-nav">
      <div class="logo"></div>
      <ul>
        <li><a href="#for-investors">Features</a></li>
        <li><a href="#roadmap">Roadmap</a></li>
        <li><a href="#tech">Technology</a></li>
        <li><a href="#team">Team & Advisors</a></li>
<!--            <li><a href="#media">Media</a></li>-->
        <li class="active"><a href="/docs/TBX_WhitePaper_Eng.pdf" target="_blank">White Paper</a></li>
<!--                <li class="dropdown">-->
<!--                    <div class="title">English</div>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="">Russian</a></li>-->
<!--                        <li><a href="">German</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
      </ul>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="row">
          <div class="logo three columns"></div>

          <div class="lang three columns u-pull-right">
            <ul>
              <li class="active">
                <a href="/docs/TBX_WhitePaper_ENG.pdf" target="_blank">
                  White Paper
                </a>
              </li>
<!--                            <li class="dropdown">-->
<!--                                <div class="title">English</div>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a href="">Russian</a></li>-->
<!--                                    <li><a href="">German</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
            </ul>
          </div>
          <nav class="nav six columns u-pull-right" role="navigation">
            <ul>
              <li><a href="#for-investors">Features</a></li>
              <li><a href="#roadmap">Roadmap</a></li>
              <li><a href="#tech">Technology</a></li>
              <li><a href="#team">Team & Advisors</a></li>
<!--                            <li><a href="#media">Media</a></li>-->
            </ul>
          </nav>
        </div>
      </header>

      <div class="container" id="features">
        <div class="row">
          <div class="offset-by-two eight columns main-title">
            <h1>
              <span class="fade-in-item">Tokenbox</span>
              <span class="fade-in-item">is an ecosystem</span><br />
              <strong class="fade-in-item">for crypto-</strong>
              <strong class="fade-in-item"><a href="#for-investors">investors,</a></strong>
              <strong class="fade-in-item"><a href="#traders-and-funds">traders & funds.</a></strong>
            </h1>
          </div>

          <div class="features slider fade-in-item">
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-1.png')"></div>
              <div class="caption">Choose crypto funds for your investments.</div>
            </div>
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-2.png')"></div>
              <div class="caption">Invest with any currency and store tokens in a handy and secure multi-currency wallet.</div>
            </div>
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-3.png')"></div>
              <div class="caption">The services of experienced traders when and wherever you need them.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="get-notified">
    <div class="wrapper">
      <form action="//tokenbox.us16.list-manage.com/subscribe/post?u=10249fa68b5f02a162df5af34&amp;id=22cb9e6caf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
        <div class="row">
          <div class="seven columns"><input required name="EMAIL" type="email" placeholder="Enter your email address"></div>
          <div class="five columns"><button value="Subscribe" name="subscribe" type="submit" class="button">Get notified about ICO!</button></div>
        </div>
      </form>
    </div>
  </section>

  <div class="big-title" id="for-investors"><h1>For investors</h1></div>

  <section class="multi-crypto">
    <div class="wrapper">
      <h1>Multi-cryptocurrency wallet</h1>
      <p>Keep all your crypto assets conveniently in a single wallet</p>
      <div class="row">
        <div class="six columns mobile-only">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-one five columns">
          <div class="text">
            <p>Universal crypto-currency wallet for the secure storage of digital assets. The wallet allows you to store all main crypto-currencies and tokens. </p>
            <p>For the convenience, there are two types of wallets - "Easy" and "Professional" which can both  store keys both inside and outside the system. </p>
          </div>
         </div>
        <div class="six columns no-mobile">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="invest-in-pro">
    <div class="wrapper">
      <h1>Invest in pro traders and funds</h1>
      <p>Reliable, transparent professional funds and traders</p>
      <div class="row">
        <div class="five columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="six columns">
          <div class="text">
            <p>Tokenbox is a platform for professionals only. Traders and Funds participating are carefully selected and reviewed. We conduct Due Diligence of all traders. And no Fund can withdraw assets from a client’s account.</p>
            <p>The Rating System and “Advisory Service” can assist you in making the optimal choice of the traders represented on our system.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pay-with">
    <div class="wrapper">
      <h1>Pay by Credit/Debit Card and Fiat money</h1>
      <p>Yes, we accept payments in fiat currencies!</p>
      <div class="row">
        <div class="offset-by-four four columns">
          <div class="section-img-wrap pay-1">
            <div class="section-img"></div>
          </div>
          <div class="section-img-wrap pay-2">
            <div class="section-img"></div>
          </div>
          <div class="text">
            <p>The payment gateway integrated with our platform allows you to accept payments in traditional "fiat" currencies (USD, EUR).</p>
            <p>Investors can convert fiat currencies into crypto-currencies and tokens, and conduct reverse operations on the Tokenbox platform.</p>
          </div>
          <div class="section-img-wrap pay-3">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="big-title" id="traders-and-funds"><h1>For traders & funds</h1></div>

  <section class="become-legal">
    <div class="wrapper">
      <h1>Legal Clarity and Transparency</h1>
      <p>Operating  within the current legal framework</p>
      <div class="row">
        <div class="offset-by-one five columns">
          <div class="text">
            <p>Conducting activities on the Tokenbox Platform within the relevant legislative infrastructure. Tokenbox is a legal "umbrella" fund. Thus, funds and traders can minimize their legal costs.</p>
            <div class="section-img-wrap mobile-only">
              <div class="section-img"></div>
            </div>
            <p>Tokenbox undertakes to perform of KYC / AML for user-investors as well liaising with the requisite data verification systems.</p>
          </div>
        </div>
        <div class="six columns no-mobile fade-in-right">
          <div class="section-img-wrap">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trading-app">
    <div class="wrapper">
      <h1>Professional software</h1>
      <p>Practical trading terminal for traders, and a foolproof system for managing your fund</p>

      <div class="tablet-only mac"></div>
      <div class="row">
        <div class="offset-by-seven four columns">
          <h2>Most powerful and user-friendly trading terminal ever!</h2>
        </div>
      </div>
      <div class="tablet-only ipad"></div>

      <div class="mac-ipad no-tablet">
        <div class="mac"></div>
        <div class="ipad"></div>
        <h3>Manage your Fund’s portfolio on any device</h3>
      </div>

    </div>
  </section>

  <section class="issue">
    <div class="wrapper">
      <h1>Fund's tokenization</h1>
      <p>A prime opportunity to create your own tokenized fund</p>
      <div class="row">
        <div class="six columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-one five columns">
          <div class="text">
            <p>Investors can make mutual settlements utilizing their own token according to the relevant Smart Contract.  This token is an analogue of a Fund Unit, and its value depends on the profitability and dynamics of any fluctuation in portfolio capitalization. Investors can purchase the tokens, store them and nurture them to maturity. </p>
            <p>Tokens can also be accessed on organized markets - exchanges.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="send-request">
    <div class="wrapper">
      <h1>Want to become one of the first funds and traders using our ecosystem?</h1>
      <form action="//tokenbox.us16.list-manage.com/subscribe/post?u=10249fa68b5f02a162df5af34&amp;id=6317d830cb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
        <div class="row">
          <div class="six columns"><input required value="" name="NAME" id="mce-NAME" placeholder="Your Name"></div>
          <div class="six columns"><input required name="COMPANY" id="mce-COMPANY" placeholder="Company"></div>
        </div>
        <div class="row">
          <div class="six columns"><input required type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email"></div>
          <div class="six columns"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">Send Request</button></div>
        </div>
      </form>
    </div>
  </section>
  <section class="roadmap">
    <div class="top">
      <div class="wrapper">
        <h1>Smoothest crossplatform experience</h1>
        <h3>Web-interface as well as native applications for main platforms:
        <strong>PC, Mac, iOS, Android, VR.</strong></h3>
        <div class="devices">
          <div class="ipad"></div>
          <div class="macbook"></div>
          <div class="watch"></div>
          <div class="iphone"></div>
        </div>
      </div>
    </div>

    <article class="blue-roadmap" id="roadmap">
      <div class="wrapper">
        <h1>Our roadmap</h1>
        <div class="timeline-wrap">
          <div class="timeline">
            <div class="current" style="width: 70%; height: 70%;"></div>
          </div>

          <div class="desc">
            <div class="milestone active">
              <div class="title">Branding and naming<div class="time">June 15</div></div>

            </div>
            <div class="milestone active">
              <div class="title">Tech and operational team<div class="time">June 15</div></div>

            </div>
            <div class="milestone active">
              <div class="title">Whitepaper<div class="time">June 30</div></div>

            </div>
            <div class="milestone active">
              <div class="title">Marketing and development plan<div class="time">June 30</div></div>

            </div>
            <div class="milestone active">
              <div class="title">Escrow and advisory board<div class="time">June 30</div></div>

            </div>
            <div class="milestone">
              <div class="title">Pre-ICO marketing<div class="time">July 1-30</div></div>

            </div>
            <div class="milestone">
              <div class="title">Pre-ICO w/ marketing<div class="time">August 1-10</div></div>
            </div>
            <div class="milestone">
              <div class="title">Pre-ICO<div class="time">August 1-10</div></div>
            </div>
            <div class="milestone">
              <div class="title">ICO<div class="time">October 1-20</div></div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section class="technology" id="tech">
    <div class="wrapper">
      <h1>Technology & infrastructure</h1>
      <div class="row">
        <div class="six columns logos">
          <div class="python fade-in-item"></div>
          <div class="java fade-in-item"></div>
          <div class="ethereum no-mobile fade-in-item"></div>
        </div>
        <div class="six columns text">
          <p>The platform is based upon a set of microservices written in Python/Java. Separate interfaces to allow interaction between each group of Users and partners of the system are utilised.</p>
          <p>Tokenization of all traders occur on Platform Ethereum based on the ERC20 token.</p>
        </div>
      </div>
      <div class="row mobile-only logos">
        <div class="ethereum"></div>
      </div>
      <div class="row">
        <div class="twelve columns text">
          <p>The infrastructure of the platform is built using Amazon Web Services. The description of the infrastructure uses Docker containers. The databases and their replications are built using PostgreSQL and Elastic Search.</p>
        </div>
      </div>
      <div class="row">
        <div class="logos">
          <div class="amazon fade-in-item"></div>
          <div class="elastic fade-in-item"></div>
          <div class="docker fade-in-item"></div>
          <div class="postgres fade-in-item"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="team" id="team">
    <div class="wrapper">
      <article class="members">
        <h1>Meet the Tokenbox team</h1>
        <p>From the creators of The Token Fund. Professional team with extensive experience in crypto industry.</p>
        <div class="row">
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/shpakovsky.jpg')">
              <div class="overlay">
                <a href="https://www.facebook.com/shpakovskycom" target="_blank" class="fa fa-facebook-square"></a>
              </div>
            </div>
            <div class="name">Viktor Shpakovsky</div>
            <div class="info">Managing Partner,
              <br />The Token Fund</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/smerkis.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/smerkis" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Vladimir Smerkis</div>
            <div class="info">Managing Partner,
              <br />The Token Fund</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/bashlykov.jpg')">
              <div class="overlay">
                <a href="https://www.facebook.com/abashlykov" target="_blank" class="fa fa-facebook-square"></a>
              </div>
            </div>
            <div class="name">Alexey Bashlykov</div>
            <div class="info">Technical Project Manager,
              <br />Zerion</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/doganov.jpg')">
              <div class="overlay">
                <a href="https://www.facebook.com/igor.doganov" target="_blank" class="fa fa-facebook-square"></a>
              </div>
            </div>
            <div class="name">Igor Doganov</div>
            <div class="info">Chief Analytics Officer,
              <br />The Token Fund</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/shmakov.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/dshmakov" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Dmitry Shmakov</div>
            <div class="info">Marketing Director,
              <br />The Token Fund</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/yuryev.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/deusdictum" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Eugene Yuryev</div>
            <div class="info">Art Director,
              <br />The Token Fund</div>
          </div>

          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/volkov.jpg')">
              <div class="overlay">
                <a href="www.facebook.com/avolkov85" target="_blank" class="fa fa-facebook-square"></a>
              </div>
            </div>
            <div class="name">Aleksandr Volkov</div>
            <div class="info">Lead Backend Developer,
              <br />Zerion</div>
          </div>
        </div>
      </article>

      <article class="advisors">
        <h1>Our advisors</h1>
        <!-- <p>Their goal is to make a difference to the way make investments.</p> -->
        <div class="row">

          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/skinner.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/cmskinner" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Chris Skinner</div>
            <div class="info">Advisor (Fintech),
              <br />Innovate Finance, Moven and Meniga</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/zegelman.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/jzegelman" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Julian L. Zegelman</div>
            <div class="info">Advisor (Legal),
              <br />Velton Zegelman PC</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/yin.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/caoyin" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Cao Yin</div>
            <div class="info">Advisor (Blockchain technologies),
              <br />Energy Blockchain Labs</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/sachkov.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/ilyasachkov" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Ilya Sachkov</div>
            <div class="info">Advisor (Cybersecurity),
              <br />Group-IB</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/prabhu.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/lspprabhu" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Peter Prabhu</div>
            <div class="info">Advisor (Business Development),
              <br />Interstice Consulting LLP</div>
          </div>
          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/masolova.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/lspprabhu" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Elena Masolova</div>
            <div class="info">Advisor, Groupon Russia, AddVenture Fund</div>
          </div>

          <div class="member">
            <div class="img" style="background-image: url('/assets/front/img/team/koleoshkin.jpg')">
              <div class="overlay">
                <a href="https://www.linkedin.com/in/vadim-koleoshkin" target="_blank" class="fa fa-linkedin-square"></a>
              </div>
            </div>
            <div class="name">Vadim Koleoshkin</div>
            <div class="info">Advisor (Product Development), Zerion</div>
          </div>
        </div>
      </article>

    </div>
  </section>


  <section class="media" style="display: none !important;">
    <div class="wrapper media-blocks">
      <h1>Media about Tokenbox</h1>
      <div class="row">
        <div class="three columns">
          <a href="" target="_blank" class="img cointelegraph"></a>
        </div>
        <div class="three columns">
          <a href="" target="_blank" class="img smithcrown"></a>
        </div>
        <div class="three columns">
          <a href="" target="_blank" class="img coinspeaker"></a>
        </div>
        <div class="three columns">
          <a href="" target="_blank" class="img coinidol"></a>
        </div>
      </div>
      <div class="row">
        <div class="three columns">
          <a href="" target="_blank" class="img forbes"></a>
        </div>
        <div class="three columns">
          <a href="" target="_blank" class="img forklog"></a>
        </div>
        <div class="three columns">
          <a href="" target="_blank" class="img coindesk"></a>
        </div>
      </div>

      <section class="medium">
        <div class="medium-icon"></div>
        <h1>We are on Medium</h1>
        <div class="row">
          <article class="four columns">
            <div class="top">
              <div class="subtitle">Stories by The Token Fund on Medium</div>
              <time>1d</time>
            </div>
            <a style="background-image: url('/assets/front/img/media/medium/1.jpg')" href="" class="img"></a>
            <div class="text">
              <h1><a href="">Starta ICO Launches Today as The Token Fund Managing Partner Acting as Guarantor</a></h1>
              <p>Starta is a company that was launched to help accelerate eastern European startups. This is a mission The Token Fund... <a href="" class="more">Read More</a></p>
            </div>
          </article>
          <article class="four columns">
            <div class="top">
              <div class="subtitle">Stories by The Token Fund on Medium</div>
              <time>5d</time>
            </div>
            <a style="background-image: url('/assets/front/img/media/medium/2.jpg')" href="" class="img"></a>
            <div class="text">
              <h1><a href="">BlockchainHack 2017: Who Won at The Token Fund Sponsored Event?</a></h1>
              <p>The event was a 48 hour competition between teams with different outlooks and ideas, but a single objective... <a href="" class="more">Read More</a></p>
            </div>
          </article>
          <article class="four columns">
            <div class="top">
              <div class="subtitle">Stories by The Token Fund on Medium</div>
              <time>12d</time>
            </div>
            <a style="background-image: url('/assets/front/img/media/medium/3.jpg')" href="" class="img"></a>
            <div class="text">
              <h1><a href="">Strat. Adviser/Blockchain Consultant Wulf Kaal Discusses why TKN is About to Take Off</a></h1>
              <p>On June 12th I sat down with Wulf Kaal, currently a tenured professor at the University of St. Thomas in down... <a href="" class="more">Read More</a></p>
            </div>
          </article>
        </div>
      </section>
    </div>
  </section>

  <section class="get-notified big get-notified-bottom">
    <div class="wrapper">
      <form action="//tokenbox.us16.list-manage.com/subscribe/post?u=10249fa68b5f02a162df5af34&amp;id=22cb9e6caf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" >
        <div class="row">
          <div class="four columns"><h1>Get notified when we go into ICO!</h1></div>
          <div class="five columns"><input required name="EMAIL" type="email" placeholder="Enter your email address"></div>
          <div class="three columns"><button value="Subscribe" name="subscribe" type="submit" class="button">Get notified!</button></div>
        </div>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="wrapper">
      <div class="title">Learn more and stay tuned!</div>
      <div class="footer-social">
        <a href="https://www.facebook.com/Tokenbox/" class="link facebook" target="_blank"><span class="fa fa-facebook-square"></span></a>
        <a href="https://t.me/Tokenbox" class="link telegram" target="_blank"><span class="fa fa-telegram"></span></a>
        <a href="https://twitter.com/tokenbox" class="link twitter" target="_blank"><span class="fa fa-twitter-square"></span></a>
        <a href="http://tokenbox.slack.com" class="link slack" target="_blank"><span class="fa fa-slack"></span></a>
        <a href="mailto:support@tokenbox.io" class="link email"><span class="fa fa-envelope-o"></span></a>
        <a href="https://www.linkedin.com/company-beta/11217933/" class="link linkedin" target="_blank"><span class="fa fa-linkedin-square"></span></a>
        <a href="https://www.reddit.com/r/tokenbox/" class="link reddit" target="_blank"><span class="fa fa-reddit-square"></span></a>
        <a href="" class="link github" target="_blank"><span class="fa fa-github-square"></span></a>
        <a href="https://medium.com/tokenbox" class="link medium" target="_blank"><span class="fa fa-medium"></span></a>
      </div>
      <div class="copy">
        <div class="logo"></div>
        <a href="">Terms & Conditions</a>
        <a href="">User Privacy</a>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="assets/front/js/app.min.js"></script>

  <script type="text/javascript">
    $(function(){
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width; //get proper width
        var mw = 400; // min width of site
        var ratio =  ww / mw; //calculate ratio
        if( ww < mw){ //smaller than minimum size
          $('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
        }else{ //regular size
          $('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
        }
      }
    });
  </script>

  <script>
    if (!sr.tools.isMobile()) {
      sr.reveal('.topblock .fade-in-item', { viewFactor: 0 }, 100)
      sr.reveal('.technology .fade-in-item', { viewFactor: 0 }, 100)
      sr.reveal('.get-notified');
      sr.reveal('.invest-in-pro');
      sr.reveal('.pay-with');
      sr.reveal('.become-legal');
      sr.reveal('.trading-app');
      sr.reveal('.issue');
      sr.reveal('.big-title');
      sr.reveal('.send-request');
      sr.reveal('.roadmap .top');
      sr.reveal('.roadmap .blue-roadmap');
      sr.reveal('.technology');
      sr.reveal('.team .member', 100);
      sr.reveal('.advisors .member', 100);
      sr.reveal('.multi-crypto');
      sr.reveal('.media');
      sr.reveal('.footer');
      sr.reveal('.milestone', 50);
      sr.reveal('.footer-social .link', 50)
      sr.reveal('.fade-in-left', {
        distance: '20px',
        origin: 'left'
      });
      sr.reveal('.fade-in-right', {
        distance: '20px',
        origin: 'right'
      });
    }
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45667677 = new Ya.Metrika({ id:45667677, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45667677" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

  <!-- Google Analytics counter -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-104912862-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- End Google Analytics counter -->

  <!-- Zerion Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '498450943826426'); // Insert your pixel ID here.
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=498450943826426&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
</body>
</html>
