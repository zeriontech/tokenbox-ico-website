@extends('shared/layout')

@section('content')
  <section class="topblock topblock-ico">
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
      </nav>

      <div class="header_social">
        <a href="https://bitcointalk.org/index.php?topic=2243307.0" class="icon-bitcointalk" target="_blank"></a>
        <a href="https://www.facebook.com/Tokenbox/" title="Facebook" class="link facebook" target="_blank"><i class="fa fa-facebook-square"></i></a>
        <a href="https://twitter.com/tokenbox" class="link twitter" title="Twitter" target="_blank"><i class="fa fa-twitter-square"></i></a>
        <a href="https://t.me/Tokenbox" class="link telegram" title="Telegram" target="_blank"><i class="fa fa-telegram"></i></a>
      </div>

      <ul class="nav">
        <li>@include('shared/langSwitcher')</li>
      </ul>
    @endcomponent

    <div class="wrapper">
      <h1>
		  <sup data-tooltip>
			<i class="fa fa-question-circle"></i>
			<div class="tooltip">
			<b>{{__('TGE - Token Generation Event.')}}</b>
			<br>
			{{__('It is a synonym of the ICO. We use the TGE term because TBX tokens but not coins will be issued.')}}<br><a href="#faq">{{__('Learn more')}} &rarr;</a>
			</div>
		  </sup>
		  {{__('TGE is on:')}} <span style="color:#ee3d49; font-weight: bold;">{!!__('15% bonus')!!}</span> — 3 {{__('days left!')}}
      </h1>
      <p style="opacity: 0;" class="topblock_subtitle">
        {{__('Time left')}}:
        <span class="inline-countdown">
          <span data-key="days"></span>{{__('d')}}
          <span data-key="hours"></span>{{__('h')}}
          <span data-key="minutes"></span>{{__('m')}}
          <span data-key="seconds"></span>{{__('s')}}
        </span>
      </p>

      <div class="progress">
        <script>
          var icoProgress = {
            total: 1085124,
            usd: 1085124.86,
            eth: 0,
            btc: 0,
            participants: 20
          };
        </script>

        <div class="progress-current">
          <span class="js-progress-current">0</span> USD
        </div>

        <div class="progress-bar">
          <div class="js-progress-bar">
            <div class="progress-bar-current"></div>
          </div>
        </div>

        <div class="progress-target">
          20,000,000 USD
        </div>
      </div>

      <div class="founded-money u-cf">
        <div class="founded-money-participants">
          <span class="js-progress-participants"></span> {{__('participants')}}
        </div>
        <div class="founded-money-usd">0</div>
        <div class="founded-money-btc">0</div>
        <div class="founded-money-eth">0</div>
      </div>

      <div class="buttons">
        <a class="button" href="https://tokenbox.zerion.io/" target="_blank">{{__('Buy TBX Tokens')}}!</a><a class="button button-info" href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}">
          <i class="fa fa-file-pdf-o" style="margin-right: 6px;"></i>
          {{__('White Paper')}}
        </a>
        <p style="color:#abb4bb; margin-top: 30px;">
          <b>{{__('Important:')}}</b> {{__('By clicking on the red button you will be forwarded to Zerion website')}}.
          <br>
          <b>{{__('Escrow provided by:')}}</b> {{__('The Token Fund and Zerion')}}.
        </p>
      </div>

    </div>
  </section>


  <section class="section section-distribution" id="token-distribution">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('Token Distribution')}}</h1>
      <p class="from-bottom">{{__('No more than 31,000,000 TBX will be released')}}</p>

      <div class="distribution">
        <div class="distribution-item distribution-item-token">
          <span>75%</span>
          {{__('Token Generation Event')}}
        </div>
        <div class="distribution-pie">
          <div class="distribution-pie-icon">
          </div>
        </div>
        <div class="distribution-item distribution-item-bounty">
          <span>5%</span>
          {{__('Bounty')}}
        </div>
        <div class="distribution-item distribution-item-team">
          <span>20%</span>
          {{__('Team')}}
        </div>
      </div>

      <div class="distibution-desc">
        <a href="#faq">{{__('See detailed information')}}</a> {{__('in our FAQ section')}}.
      </div>
    </div>
  </section>

  <section class="section section-join-crowdsale" id="join-crowdsale">
    <div class="wrapper">
      <h1 class="from-bottom">{{__('How to Join the Crowdsale')}}</h1>
      <p class="from-bottom">{{__('The process is simple and only takes ~5 minutes')}}</p>

      <h2>{{__('4 easy steps')}}</h2>

      <ol class="step-list" data-title="{{__('4 easy steps')}}">
        <li>
          <span><b>{{__('Make sure')}}</b> {{__('you comply with our')}} <a href="#terms" class="js-modal-link">{{__('Terms & Conditions')}}</a>.</span>
        </li><li>
          <span>
            <a href="https://tokenbox.zerion.io/" target="_blank"><b>{{__('Create')}}</b>
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

      <a href="https://tokenbox.zerion.io/" target="_blank" class="button button-centred">{{__('Buy TBX Tokens')}}!</a>

      <div class="button-details">
        <a href="#wire" class="js-modal-link">{!!__('Request Wire Transfer?')!!}</a>
      </div>

      <p style="font-size:2.6em;">{!!__('Got questions?')!!} <a href="{!!__('/docs/Tokenbox-TGE-Guide-En.pdf')!!}" target="_blank" style="font-weight:bold; color:#3434bb;">{!!__('See the detailed guide.')!!}</a></p><p>{!!__('If you decide to purchase more tokens, repeat steps 3-4 by signing-in to your <a href="https://tokenbox.zerion.io/" target="_blank" style="color:#3434bb;">dashboard</a>.')!!}</p>

    </div>
  </section>

  <section>
    <div class="documentation" id="documentation">
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

  @include('shared/faq')
  @include('shared/powered')
  @include('shared/roadmap')
  @include('shared/team')
  @include('shared/media')

@endsection

