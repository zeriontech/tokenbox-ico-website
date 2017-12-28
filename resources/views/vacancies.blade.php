@extends('shared/layout')

@section('content')
  <div class="header-wrapper" style="background: #25258e;">
    @component('shared/header')
      @slot('mobile')
        <li><a href="/tge">{!!__('TGE')!!}</a></li>
        <li><a href="#traders-and-funds">{{__('Features')}}</a></li>
        <li><a href="#roadmap">{{__('Roadmap')}}</a></li>
        <li><a href="#team">{{__('Team')}}</a></li>
        <li><a href="#partners">{{__('Partners')}}</a></li>
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
        <li><a href="#team">{!!__('Team')!!}</a></li>
        <li><a href="#partners">{!!__('Partners')!!}</a></li>
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
  </div>

  @if (LaravelLocalization::getCurrentLocale() == 'ru')
    @include('shared/vacancies/ru')
  @else
    @include('shared/vacancies/en')
  @endif
@endsection

