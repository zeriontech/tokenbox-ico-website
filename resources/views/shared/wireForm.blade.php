<div class="modal" id="wire">
  <div class="modal-overlay"></div>
  <div class="modal-body">
    <section class="send-request section">
      <div class="wrapper">
        <h1>{{__('Request for Wire Tranfer')}}</h1>
        <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=0dd937f62b&c=?" class="js-ajax-form" data-extra-action="/sendwire" method="post" id="wire-form" name="mc-embedded-subscribe-form">
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
              <input required data-number-mask type="number" min="0" value="" name="AMOUNT" id="mce-AMOUNT" step="50000" placeholder="{{__('You wish to invest')}}">

              <p style="margin: 0;">{{__('Minimum')}} $10,000 ({{__('Base price of 1 TBX is USD')}})</p>
            </div>
          </div>

          <button type="submit" value="Subscribe" name="subscribe" class="button">{{__('Send Wire Transfer Request')}}</button>
          <div class="button-details">
            {!!__('We will handle your request and send the invoice for payment via email as soon as possible. <br>The value of the bonus is set at the time of the request.')!!}
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
