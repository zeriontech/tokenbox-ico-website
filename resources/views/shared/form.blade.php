<div class="modal" id="join-queue-modal">
  <div class="modal-overlay"></div>
  <div class="modal-body">
    <section class="send-request section">
      <div class="wrapper">
        <h1>{{__('Get a chance to participate in the Private Pre-Sale')}}</h1>
        <form action="//tokenbox.us16.list-manage.com/subscribe/post-json?u=10249fa68b5f02a162df5af34&id=80b1bdf6fe&c=?" method="post" id="presale-form" name="mc-embedded-subscribe-form">
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
              <input type="phone" value="" name="PHONE" id="mce-PHONE" placeholder="{{__('Phone (Optional)')}}">
            </div>
            <div class="six columns">
              <input required type="text" value="" name="AMOUNT" id="mce-AMOUNT" placeholder="{{__('You wish to invest')}}">

              <p style="margin: 0;">Minimum $50,000</p>
            </div>
          </div>

          <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">{{__('Join the Queue')}}</button>
          <div class="button-details">
            Due to high demand, we cannot guarantee your participation in the private pre-sale.
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
