<div class="countdown">
  <h1>
    {{__('Countdown until we go to TGE')}}

    <sup data-tooltip>
      <i class="fa fa-question-circle"></i>

      <div class="tooltip">
        <b>{{__('TGE - Token Generation Event.')}}</b>
        <br>
        {!!__('It is a synonym of the ICO. We use the TGE term because TBX tokens but not coins will be issued.<br><a href="/tge">Learn more &rarr;</a>') !!}
      </div>
    </sup>
  </h1>

  <p>
    <a href="/docs/Tokenbox-TGE-Start.ics">{{__('Add event to calendar')}}</a> {{__('and get notified')}}
  </p>

  <div id="countdown"
       data-days-label="{{__('Days')}}"
       data-hours-label="{{__('Hours')}}"
       data-minutes-label="{{__('Minutes')}}"
       data-seconds-labels="{{__('Seconds')}}"
  ></div>

  {{ $slot }}
</div>
