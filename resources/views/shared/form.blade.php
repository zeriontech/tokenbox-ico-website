<div class="modal" id="join-queue">
  <div class="modal-overlay"></div>
  <div class="modal-body">
    <section class="send-request section">
      <div class="wrapper">
        <h1>{{__('Get a chance to participate in the Private Sale')}}</h1>
        <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=80b1bdf6fe&c=?" class="js-ajax-form" data-extra-action="/sendqueue" method="post" id="presale-form" name="mc-embedded-subscribe-form">
          <div class="row">
            <div class="six columns">
              <input required name="NAME" id="mce-NAME" placeholder="{{__('Your Name')}}">
            </div>

            <div class="six columns">
              <input type="email" required name="EMAIL" id="mce-EMAIL" placeholder="{{__('Email')}}">
            </div>
          </div>
          <div class="row">
            <div class="six columns">
              <input type="tel" value="" name="PHONE" id="mce-PHONE" placeholder="{{__('Phone (Optional)')}}">

              <p style="margin: 0;">{{__('Example: +1 123 4567890')}}</p>
            </div>
            <div class="six columns">
              <input required type="number" min="0" value="" name="AMOUNT" id="mce-AMOUNT" placeholder="{{__('You wish to invest')}}">

              <p style="margin: 0;">{{__('Minimum')}} $50,000</p>
            </div>
          </div>

          <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">{{__('Join the Queue')}}</button>
          <div class="button-details">
            {{__('Due to high demand, we cannot guarantee your participation in the private sale.')}}
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
