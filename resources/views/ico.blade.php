@extends('shared/layout')

@section('content')
  <div class="topblock topblock-ico">
    <div class="topblock_bg">
      <div class="topblock_bg_inner"></div>
    </div>

    @component('shared/header')
      @slot('mobile')
        <li><a href="/home">{{__('Product')}}</a></li>
        <li><a href="#token-distribution">{{__('Token Distribution')}}</a></li>
        <li><a href="#join-crowdsale">{{__('How to Join')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
      @endslot

      <nav class="nav js-scroll-nav" role="navigation">
        <li><a href="/home">{{__('Product')}}</a></li>
        <li><a href="#token-distribution">{{__('Token Distribution')}}</a></li>
        <li><a href="#join-crowdsale">{{__('How to Join')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
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
      @include('shared/tgeTitle')

      <div class="progress" style="margin-top:53px;">
        <script>
          var icoProgress = {
            total: 1113848,
            usd: 1113848,
            eth: 0,
            btc: 0,
            participants: 20,
            target: window.icoProgressTarget || 20000000
          };
        </script>

        <div class="progress-current">
          <span class="js-progress-current">0</span>
          USD
        </div>

        <div class="progress-bar">
          <div class="js-progress-bar">
            <div class="progress-bar-current"></div>
          </div>
        </div>

        <div class="progress-target">
          <span class="js-progress-target"></span>
          USD
        </div>

        <div class="progress-participants js-progress-target-label" data-second-title="{{__('Second tier')}}" data-third-title="{{__('Third tier')}}"></div>

        <!--<div class="progress-participants">
          20,000,000 USD {{__('Hard cap')}}
        </div>-->

        <div class="progress-participants">
          <span class="js-progress-participants"></span> {{__('participants')}}
        </div>
      </div>

      <div class="buttons">
        <a class="button" href="https://wallet.tokenbox.io/" target="_blank">{{__('Buy TBX Tokens')}}!</a><!-- 
<a class="button button-info" href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}">
          <i class="fa fa-file-pdf-o" style="margin-right: 6px;"></i>
          {{__('White Paper')}}
        </a>
 -->
        <p style="color:#abb4bb; margin-top: 22px;">
          <b>{{__('Escrow provided by:')}}</b> {{__('The Token Fund and Zerion')}}
        </p>
      </div>

      <div class="founded-money u-cf">
        <div class="founded-money-usd">0</div>
        <div class="founded-money-btc">0</div>
        <div class="founded-money-eth">0</div>
      </div>

      <div class="topblock-ratings">
        <div href="http://icorating.com/project/581/Tokenbox" target="_blank" class="topblock-ratings_item">
            <span>ICO Rating: <strong>Stable+</strong></span>
            <span>Hype Score: <strong>Very High</strong></span>
            <a href="https://drive.google.com/open?id=0B8xj2ie0HTQrSFRRTGlGaUpDRUE" target="_blank"><i class="fa fa-file-pdf-o"></i>  View rating review</a>
        </div>
        <div href="https://icobench.com/ico/tokenbox/ratings#ratings" target="_blank" class="topblock-ratings_item">
            <span>TGE/ICO powered by</span>
            <img src="/assets/front/img/zerion-white.png" alt="">
        </div>
      </div>
    </div>
  </div>

  @include('shared/powered')
  @include('shared/media')
  @include('shared/distribution')

  <section class="section section-join-crowdsale" id="join-crowdsale" style="border-bottom: 2px solid #f6f6f8; border-top: 2px solid #f6f6f8;">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('How to Join the Crowdsale')}}</h1>
      <p class="from-bottom">{{__('The process is simple and only takes ~5 minutes')}}</p>

      <h2>{{__('4 easy steps')}}</h2>

      <ol class="step-list" data-title="{{__('4 easy steps')}}">
        <li>
          <span><b>{{__('Make sure')}}</b> {{__('you comply with our')}} <a href="#terms" class="js-modal-link inner-link">{{__('Terms & Conditions')}}</a>.</span>
        </li><li>
          <span>
            <a href="https://wallet.tokenbox.io/" target="_blank"><b>{{__('Create')}}</b>
            {{__('a Zerion account')}}</a>.
          </span>
        </li><li>
          <span><b>{{__('Choose currency')}}</b> {{__('and the amount of Tokens you want to purchase')}}.</span>
        </li><li>
          <span><b>{{__('Send')}}</b> {{__('the required amount to the specified wallet address and wait for 6 confirmations')}}.</span>
        </li><li>
          <span><b>{{__('Congratulations!')}}</b><br>{{__("You've just purchased TBX Tokens.")}}</span>
        </li>
      </ol>

      <a href="https://wallet.tokenbox.io/" target="_blank" class="button button-centred">{{__('Buy TBX Tokens')}}!</a>

      <div class="button-details">
        <a href="#wire" class="inner-link js-modal-link">{!!__('Request Wire Transfer?')!!}</a>
      </div>

      <p style="font-size:3.6rem;">{!!__('Got questions?')!!} <a href="{!!__('/docs/Tokenbox-TGE-Guide-En.pdf')!!}" target="_blank" style="font-weight:bold; color:#3434bb;">{!!__('See the detailed guide.')!!}</a></p><!-- <p>{!!__('If you decide to purchase more tokens, repeat steps 3-4 by signing-in to your <a href="https://wallet.tokenbox.io/" target="_blank" style="color:#3434bb;">dashboard</a>.')!!}</p> -->

    </div>
  </section>

  @include('shared/team')

  <section>
    <div class="documentation" id="documentation" style="margin-bottom:150px;">
      <h1 class="from-bottom">{{__('Documentation')}}</h1>

      <div class="documentation_list">
        <a href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('White Paper')}}
        </a><a href="{{__('/docs/Tokenbox-LightPaper-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Light Paper')}}
        </a><a href="{{__('/docs/Tokenbox-Onepager-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('One-Pager')}}
        </a><a href="{{__('/docs/Tokenbox-Overview-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Tokenbox Overview')}}
        </a><a href="{{__('/docs/Tokenbox-BusinessOverview-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Business Overview')}}
        </a><a href="{{__('/docs/Tokenbox-Presentation-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Product Presentation')}}
        </a><a href="{{__('/docs/Tokenbox-HoweyTest-En.pdf')}}" target="_blank">
          <i class="fa fa-file-pdf-o"></i>{{__('Howey Test')}}
        </a>
      </div>
    </div>
  </section>

  @include('shared/offer')

  @include('shared/roadmap')
  @include('shared/faq')
  @include('shared/offer')
@endsection

