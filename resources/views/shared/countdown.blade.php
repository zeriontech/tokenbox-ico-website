<div class="countdown">
  <h1>
    {{__('Countdown until we go to TGE')}}

    <sup data-tooltip>
      <i class="fa fa-question-circle"></i>

      <div class="tooltip">
        <b>{{__('TGE - Token Generation Event.')}}</b>
        <br>
        {{__('It is a synonym for ICO. The term TGE is used because we issue tokens — not coins.')}}<br><a href="#faq">{{__('Learn more')}} &darr;</a>
      </div>
    </sup>
  </h1>

  <p>
    <i class="fa fa-calendar-check-o"></i>
    <a href="/docs/Tokenbox-TGE-Start.ics">{{__('Add event to calendar')}}</a>
    {{__('and get notified')}}
  </p>

  @include('shared/countdownBlock')
</div>
