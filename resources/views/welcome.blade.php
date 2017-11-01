@extends('shared/layout')

@section('content')

  <section class="topblock topblock-home">
    <div class="topblock_bg"></div>

    @component('shared/header')
      @slot('mobile')
        <li><a href="/tge">{{__('TGE')}}</a></li>
        <li><a href="#traders-and-funds">{{__('Features')}}</a></li>
        <li><a href="#roadmap">{{__('Roadmap')}}</a></li>
        <li><a href="#tech">{{__('Technology')}}</a></li>
        <li><a href="#team">{{__('Team')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
        <li class="active">
          <a href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}" target="_blank">
            {{__('White Paper')}}
          </a>
        </li>
        <li class="active">
          <a href="{{__('/docs/Tokenbox-LightPaper-En.pdf')}}" target="_blank">
            {{__('Light Paper')}}
          </a>
        </li>
      @endslot

      <nav class="nav header_main-nav js-scroll-nav" role="navigation">
        <li><a href="/tge">{!!__('TGE')!!}</a></li>
        <li><a href="#traders-and-funds">{!!__('Features')!!}</a></li>
        <li><a href="#roadmap">{!!__('Roadmap')!!}</a></li>
        <li><a href="#tech">{!!__('Technology')!!}</a></li>
        <li><a href="#team">{!!__('Team')!!}</a></li>
        <li><a href="#faq">{!!__('FAQ')!!}</a></li>
      </nav>

      <ul class="nav header_right">
        <li>
          <div class="header_social">
            <a href="https://t.me/Tokenbox" class="link telegram" title="Telegram" target="_blank"> <i class="fa fa-telegram"></i>
            </a>
          </div>
        </li>
        <li class="active nav-pill">
          <a href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}" target="_blank">
            {{__('White Paper')}}
          </a>
        </li><li class="active nav-pill">
          <a href="{{__('/docs/Tokenbox-LightPaper-En.pdf')}}" target="_blank">
            {{__('Light Paper')}}
          </a>
        </li>
        <li>
          @include('shared/langSwitcher')
        </li>
      </ul>
    @endcomponent

    <div class="wrapper">
      <div class="topblock_tabs js-scroll-nav">
        <div class="topblock_tabs_list">
          <a href="#traders-and-funds">
            {!!__('<span>Create</span> and manage crypto Funds. Legally and securely.')!!}
          </a><a href="#for-investors">
            {!!__('<span>Invest</span> in crypto Funds and assets. In one place.')!!}
          </a>
        </div>
        <div class="topblock_tabs_info">
          {!!__('Created by the team behind <b>The Token Fund</b> — one of the first successful crypto funds in the world')!!}
        </div>
      </div>
		<div class="countdown" style="margin-top:70px; margin-bottom:70px;">
			<div class="countdown-mini_title">
				{{__('Tokenbox TGE')}}

				<sup data-tooltip>
				  <i class="fa fa-question-circle"></i>

				  <div class="tooltip">
					<b>{{__('TGE - Token Generation Event.')}}</b>
					<br>
					{{__('It is a synonym of the ICO. We use the TGE term because TBX tokens but not coins will be issued.')}}<br><a href="/tge">{{__('Learn more')}} &rarr;</a>
				  </div>
				</sup>
				{{__('will start on')}} <span style="color:#ee3d49">{{__('14 November')}}</span> {{__('2017, 12:00 UTC')}}
	        </div>
		  <p>
			<i class="fa fa-calendar-check-o"></i>
			<a href="/docs/Tokenbox-TGE-Start.ics">{{__('Add event to calendar')}}</a>
			{{__('and get notified')}}
		  </p>

		</div>
      
      <!--<div class="countdown-mini">
        <div class="countdown-mini_title">
          TGE
          <sup data-tooltip>
            <i class="fa fa-question-circle"></i>

            <div class="tooltip">
              <b>{{__('TGE - Token Generation Event.')}}</b>
              <br>
              {{__('It is a synonym of the ICO. We use the TGE term because TBX tokens but not coins will be issued.')}}<br><a href="/tge">{{__('Learn more')}} &rarr;</a>
            </div>
          </sup>

          starts in
        </div>
        @include('shared/countdownBlock')
      </div>-->

      <div class="buttons">
        <a href="#join-queue" class="button js-modal-link">
          {{__('Join Private Sale')}}
        </a><!--
        <a href="/tge" class="button button-info">
          {{__('Learn about TGE')}}
          <i class="fa fa-long-arrow-right"></i>
        </a>
        --><a href="https://t.me/Tokenbox" target="_blank" class="button button-info">
          <i class="fa fa-telegram"></i>
          {{__('Join Community')}}
        </a>
      </div>

      <!-- <h1 class="main-title">
        <span class="fade-in-item">{{__('Tokenbox')}}</span>
        <span class="fade-in-item">{{__('is an ecosystem')}}</span><br />
        <strong class="fade-in-item">{{__('for crypto')}}-</strong>
        <strong class="fade-in-item"><a href="#for-investors">{{__('investors')}},</a></strong>
        <strong class="fade-in-item"><a href="#traders-and-funds">{{__('traders and funds')}}.</a></strong>
      </h1>-->

      <div class="row" style="margin-top:100px">
        <div class="columns offset-by-two eight features">
          <i class="background-icon features-icon-l"></i>
          <i class="background-icon features-icon-r"></i>
          <div class="slider fade-in-item">
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-1.png')"></div>
              <div class="caption">{{__('Choose crypto funds for your investments')}}.</div>
            </div>
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-2.png')"></div>
              <div class="caption">{{__('Invest with any currency and store tokens in a handy and secure multi-currency wallet')}}.</div>
            </div>
            <div class="slide">
              <div class="img" style="background-image: url('/assets/front/img/slider/slide-3.png')"></div>
              <div class="caption">{{__('The services of experienced traders when and wherever you need them')}}.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @if(app('request')->input('video'))
    @include('shared/videoSlider')
  @else
  @include('shared/video')
  @endif
  
  <section class="get-notified get-notified-top">
    <div class="wrapper">
      <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=22cb9e6caf&c=?" class="js-ajax-form" data-extra-action="/send" method="post" id="mc-embedded-subscribe-form-1">
        <div class="row">
          <div class="seven columns">
            <input required name="EMAIL" type="email" placeholder="{{__('Enter your email')}}">
          </div>
          <div class="five columns">
            <button value="Subscribe" name="subscribe" type="submit" class="button button-condensed">
              {{__('Get notified about TGE')}}!
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="section section-benefits">
    <div class="wrapper">
      <h1>Tokenbox Benefits</h1>
      <img src="/assets/front/img/benefits/{{__('solution-en-mob.svg')}}" class="mobile-only">
      <div class="row no-mobile">
        <div class="offset-by-one ten columns">
          <img src="/assets/front/img/benefits/{{__('solution-en.svg')}}">
        </div>
      </div>
    </div>
  </section>

  <div class="big-title from-bottom" id="traders-and-funds"><h1>{{__('For Traders and Funds')}}</h1></div>

  <section class="become-legal">
    <div class="wrapper">
      <i class="background-icon become-legal-icon"></i>
      <h1 class="from-bottom">{{__('Legal Clarity and Transparency')}}</h1>
      <p class="from-bottom">{{__('Operating  within the current legal framework')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one five columns">
          <div class="text">
            <p>{{__('Conducting activities on the Tokenbox Platform within the relevant legislative infrastructure. Tokenbox is a legal "umbrella" fund. Thus, funds and traders can minimize their legal costs')}}.</p>
            <div class="section-img-wrap mobile-only">
              <div class="section-img"></div>
            </div>
            <p>{{__('Tokenbox undertakes to perform of KYC/AML for user-investors as well liaising with the requisite data verification systems')}}.</p>
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
      <h1 class="from-bottom">{{__('Professional software')}}</h1>
      <p class="from-bottom">{{__('Practical trading terminal for traders, and a foolproof system for managing your fund')}}</p>

      <div class="tablet-only mac from-bottom"></div>
      <div class="row">
        <div class="offset-by-seven four columns">
          <h2 class="from-bottom">{{__('Most powerful and user-friendly trading terminal ever!')}}</h2>
        </div>
      </div>
      <div class="tablet-only ipad from-bottom"></div>

      <div class="mac-ipad no-tablet">
        <div class="mac from-bottom"></div>
        <div class="ipad from-bottom"></div>
        <h3>{{__('Manage your Fund’s portfolio on any device')}}</h3>
      </div>
    </div>
  </section>

  <section class="issue">
    <i class="background-icon issue-icon"></i>

    <div class="wrapper">
      <h1 class="from-bottom">{{__('Funds tokenization')}}</h1>
      <p class="from-bottom">{{__('A prime opportunity to create your own tokenized fund')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one five columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-one five columns">
          <div class="text">
            <p>{{__('Investors can make mutual settlements utilizing their own token according to the relevant Smart Contract.  This token is an analogue of a Fund Unit, and its value depends on the profitability and dynamics of any fluctuation in portfolio capitalization. Investors can purchase the tokens, store them and nurture them to maturity')}}.</p>
            <p>{{__('Tokens can also be accessed on organized markets - exchanges')}}.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="send-request send-request-body section" id="partnership">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('Want to become one of the first funds and traders using our ecosystem?')}}</h1>

      <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=6317d830cb&c=?" data-extra-action="/sendfull" class="js-ajax-form" method="post" id="mc-embedded-subscribe-form-2">
        <div class="row">
          <div class="six columns">
            <input required value="" name="NAME" id="mce-NAME" placeholder="{{__('Your Name')}}">
          </div>
          <div class="six columns">
            <input required name="COMPANY" id="mce-COMPANY" placeholder="{{__('Company')}}">
          </div>
        </div>
        <div class="row">
          <div class="six columns"><input required type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="{{__('Email')}}"></div>
          <div class="six columns"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">{{__('Send Request')}}</button></div>
        </div>
      </form>
    </div>
  </section>

  <div class="big-title from-bottom" id="for-investors"><h1>{{__('For investors')}}</h1></div>

  <section class="multi-crypto">
    <i class="background-icon multi-crypto-icon offset-by-one"></i>

    <div class="wrapper">
      <h1 class="from-bottom">{{__('Multi-cryptocurrency wallet')}}</h1>
      <p class="from-bottom">{{__('Keep all your crypto assets conveniently in a single wallet')}}</p>

      <div class="row section-image-example">
        <div class="mobile-only">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="offset-by-two-sd four-sd six columns">
          <div class="text">
            <p>{{__('Universal crypto-currency wallet for the secure storage of digital assets. The wallet allows you to store all main crypto-currencies and tokens')}}.</p>
            <p>{{__('For the convenience, there are two types of wallets - "Easy" and "Professional" which can both  store keys both inside and outside the system')}}. </p>
          </div>
        </div>
        <div class="columns five-sd six no-mobile">
          <div class="section-img-wrap fade-in-right">
            <div class="section-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="invest-in-pro">
    <div class="wrapper">
      <i class="background-icon invest-in-pro-top-icon"></i>
      <i class="background-icon invest-in-pro-bottom-icon"></i>

      <h1 class="from-bottom">{{__('Invest in pro traders and funds')}}</h1>
      <p class="from-bottom">{{__('Reliable, transparent professional funds and traders')}}</p>
      <div class="row section-image-example">
        <div class="offset-by-one-sd five-sd six columns">
          <div class="section-img-wrap fade-in-left">
            <div class="section-img"></div>
          </div>
        </div>
        <div class="columns offset-by-one-sd four-sd six">
          <div class="text">
            <p>{{__('Tokenbox is a platform for professionals only. Traders and Funds participating are carefully selected and reviewed. We conduct Due Diligence of all traders. And no Fund can withdraw assets from a client’s account')}}.</p>
            <p>{{__('The Rating System and “Advisory Service” can assist you in making the optimal choice of the traders represented on our system')}}.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pay-with">
    <div class="wrapper">
      <i class="background-icon pay-with-icon"></i>

      <h1 class="from-bottom">{{__('Pay by Credit/Debit Card and Fiat money')}}</h1>
      <p class="from-bottom">{{__('Yes, we accept payments in fiat currencies!')}}</p>
      <div class="row">
        <div class="offset-by-four four columns">
          <div class="section-img-wrap pay-1">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-1-add pay-with-screen"></div>
          </div>
          <div class="section-img-wrap pay-2">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-2-add pay-with-screen"></div>
          </div>
          <div class="text">
            <p>{{__('The payment gateway integrated with our platform allows you to accept payments in traditional "fiat" currencies (USD, EUR)')}}.</p>
            <p>{{__('Investors can convert fiat currencies into crypto-currencies and tokens, and conduct reverse operations on the Tokenbox platform')}}.</p>
          </div>
          <div class="section-img-wrap pay-3">
            <div class="section-img pay-with-screen"></div>
            <div class="pay-3-add pay-with-screen"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('shared/devices')
  @include('shared/roadmap')
  @include('shared/tech')
  @include('shared/team')
  @include('shared/faq')
  @include('shared/media')

  <section class="get-notified get-notified-bottom">
    <div class="wrapper">
      <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=22cb9e6caf&c=?" data-extra-action="/send" class="js-ajax-form" method="post" id="mc-embedded-subscribe-form-3" target="_blank">
        <div class="row">
          <div class="four columns">
            <h1>{{__('Get notified when we go into TGE!')}}</h1>
          </div>
          <div class="five columns"><input required name="EMAIL" type="email" placeholder="{{__('Enter your email address')}}"></div>
          <div class="three columns"><button value="Subscribe" name="subscribe" type="submit" class="button">{{__('Get notified!')}}</button></div>
        </div>
      </form>
    </div>
  </section>

  @include('shared/powered')
@endsection
