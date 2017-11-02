@extends('shared/layout')

@section('content')

  <div class="header-wrapper">
    @component('shared/header')
      @slot('mobile')
        <li><a href="/" target="_blank" class="link">{{__('Learn about Tokenbox')}}</a></li>
        <li><a href="/tge" target="_blank" class="link">{{__('TGE crowdsale starts')}} - {{__('14 November')}}</u></a></li>
      @endslot

      <nav class="nav js-scroll-nav" role="navigation">
        <li><a href="/" target="_blank" class="link">{{__('Learn about Tokenbox')}}</a></li>
        <li><a href="/tge" target="_blank" class="link">{{__('TGE crowdsale starts')}} - {{__('14 November')}}</a></li>
      </nav>

      <ul class="nav header_right">
          <li class="active nav-pill">
            <a href="{{__('/docs/Tokenbox-WhitePaper-En.pdf')}}" target="_blank">
              {{__('White Paper')}}
            </a>
          </li><li class="active nav-pill">
            <a href="{{__('/docs/Tokenbox-LightPaper-En.pdf')}}" target="_blank">
              {{__('Light Paper')}}
            </a>
          </li>
      </ul>
    @endcomponent
  </div>

  <div class="wrapper">
    <div class="quiz">
      <h1>What Kind of Crypto Trader are You?</h1>
      <div class="quiz-cover">
        <a href="https://m.me/tokenbox" target="_blank">
          <img src="/assets/front/img/hamsters/cover.png" alt="Cover">
        <a>
        <a href="https://m.me/tokenbox" target="_blank" class="quiz-button">
          <img src="/assets/front/img/hamsters/startbutton.png" alt="Startbutton">
        </a>
      </div>
    </div>
  </div>

  <style>
    .quiz {
      text-align: center;
      margin: 0 0 80px;
    }

    .quiz h1 {
      color: #abb4bb;
    }
    
    .quiz-cover {
      display: block;
      margin: 0 -20px;
      padding-bottom: 15px;
      background-color: #fff;
      box-shadow: 0px 0px 42px 0px rgba(0, 0, 0, 0.07);
    }

    .quiz-button {
      transition: .4s opacity;
    }

    .quiz-button:hover {
      opacity: 0.8;
    }

    .link {
      font-weight: bold !important;
      text-decoration: underline !important;
    }
    .link:hover {
      opacity: 0.8;
    }

    @media (min-width: 760px) {
      .quiz-cover {
        max-width: 650px;
        margin: auto;
        padding: 25px;
        margin: auto;
        border-radius: 8px;
      }
    }
  </style>
@endsection