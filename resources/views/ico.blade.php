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
        <li><a href="#mybalance">{{__('My Balance')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
        <li><a href="#roadmap">{{__('Roadmap')}}</a></li>
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

      <nav class="nav js-scroll-nav" role="navigation">
        <li><a href="/home">{{__('Product')}}</a></li>
        <li><a href="#token-distribution">{{__('Token Distribution')}}</a></li>
        <li><a href="#mybalance">{{__('My Balance')}}</a></li>
        <li><a href="#documentation">{{__('Docs')}}</a></li>
        <li><a href="#roadmap">{{__('Roadmap')}}</a></li>
        <li><a href="#faq">{{__('FAQ')}}</a></li>
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
            total: 5036401,
            usd: 5036401,
            eth: 0,
            btc: 0,
            participants: 20,
            target: window.icoProgressTarget || 7000000
          };
        </script>

        <div class="progress-current">
          <span class="js-progress-current">0</span>
          USD
        </div>

        <div class="progress-bar">
          <div class="js-progress-bar" style="width: 100%">
            <div class="progress-bar-current"></div>
          </div>
        </div>

        <div class="progress-target" style="text-transform:uppercase;">
          {{__('Collected')}}
        </div>

        <div class="progress-participants">
          <span class="js-progress-participants"></span> {{__('participants')}}. {{__('Thank you!')}}
        </div>
      </div>

    </div>
  </div>

  @include('shared/powered')
  @include('shared/media')
  @include('shared/distribution')

  <section class="section section-join-crowdsale" id="mybalance" style="border-bottom: 2px solid #f6f6f8; border-top: 2px solid #f6f6f8;">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('How to View My TBX Balance')}}</h1>
      <p class="from-bottom">{{__('The process is simple and only takes ~2 minutes')}}</p>

      <p style="margin-bottom:30px;">
		<b>Method 1</b><br />
		1. Login to <a href="https://www.myetherwallet.com" target="_blank">MyEtherWallet</a> with ETH address on which TBX tokens are stored.<br />
		2. Click "Add Custom Token"<br />
		3. Enter Token Contract Address: 0x3a92bd396aef82af98ebc0aa9030d25a23b11c6b<br>
		4. Enter Token Symbol: TBX<br />
		5. Enter Decimals: 18<br />
		6. Click "Save"<br />
		<br />
		<b>Method 2</b>
		<br />
		Just use <a href="http://etherscan.io" target="_blank">etherscan.io</a> or <a href="http://ethplorer.io" target="_blank">ethplorer.io</a> and check your ETH address with TBX tokens there.<br>
		<br>
		<b>Method 3</b><br />
		Login to your dashboard by clicking this button.
		<br />
      </p>

      <a href="https://wallet.tokenbox.io/" target="_blank" class="button button-centred">{{__('View my TBX balance')}}</a>

<!--       <p style="font-size:2.6rem;">{!!__('Got questions?')!!} <a href="{!!__('/docs/Tokenbox-TGE-Guide-En.pdf')!!}" target="_blank" style="font-weight:bold; color:#3434bb;">{!!__('See the detailed guide.')!!}</a></p> -->

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

  @include('shared/roadmap')
  @include('shared/faq')
  @endsection

