@extends('shared/layout')

@section('content')
  <section class="topblock topblock-ico">
    <div class="hamburger-icon" id="hamburger-icon">
      <span class="line line-1"></span>
      <span class="line line-2"></span>
      <span class="line line-3"></span>
    </div>

    <div class="mobile-nav js-scroll-nav">
      <div class="logo"></div>
      <ul>
        <li><a href="#raised-token">Raised</a></li>
        <li><a href="#token-distribution">Token Distribution</a></li>
        <li><a href="#fact-sheat">Fact Sheet</a></li>
        <li><a href="#join-crowdsale">How to Join</a></li>
        <li>
          @include('shared/langSwitcher')
        </li>
      </ul>
    </div>

    <div class="wrapper">
      <header class="header">
        <div class="row">
          <div class="offset-by-one-sd logo two-sd three columns"></div>

          <nav class="nav six columns js-scroll-nav" role="navigation">
            <li><a href="#raised-token">Raised</a></li>
            <li><a href="#token-distribution">Token Distribution</a></li>
            <li><a href="#fact-sheat">Fact Sheet</a></li>
            <li><a href="#join-crowdsale">How to Join</a></li>
          </nav>

          <div class="three columns">
            <ul class="nav">
              <li>
                @include('shared/langSwitcher')
              </li>
            </ul>
          </div>
        </div>
      </header>

      <div class="countdown">
        <h1>
          Tokenbox token crowdsale is now live!
        </h1>

        <div id="countdown"></div>

        <a class="button">Join the Crowdsale!</a><a class="button button-info" href="/docs/TBX-WhitePaper-Eng.pdf">
          <i class="fa fa-file-pdf-o"></i>
          White Paper
        </a>
      </div>
    </div>
  </section>

  <section class="section raised-token" id="raised-token">
    <div class="wrapper">
      <h1> Total Raised </h1>
      <p>Pay only for what you use. No setup fees, no minimum usage.</p>

      <div class="progress">
        <div class="progress-current">
          9,163,974  USD
        </div>

        <div class="progress-bar"></div>

        <div class="progress-target">
          20,000,000  USD
        </div>
      </div>

      <div class="founded-money u-cf">
        <div class="founded-money-participants">2563 participants</div>
        <div class="founded-money-usd">3,109,852</div>
        <div class="founded-money-btc">21.1560</div>
        <div class="founded-money-eth">2,357.0492</div>
      </div>
    </div>
  </section>

  <section class="section section-distribution" id="token-distribution">
    <div class="wrapper">
      <h1>Token Distribution</h1>
      <p>Pay only for what you use. No setup fees, no minimum usage.</p>

      <div class="distribution">
        <div class="distribution-item distribution-item-token">
          <span>75%</span>
          Token
          Generation
          Even
        </div>
        <div class="distribution-pie">
          <div class="distribution-pie-icon">
          </div>
        </div>
        <div class="distribution-item distribution-item-bounty">
          <span>5%</span>
          Bounty
        </div>
        <div class="distribution-item distribution-item-team">
          <span>20%</span>
          Team
        </div>
      </div>
    </div>
  </section>

  <section class="section section-fact-sheet" id="fact-sheat">
    <div class="wrapper">
      <h1>Fact Sheet</h1>

      <dl>
        <dt>What is a Tokenbox token</dt>
        <dd>Tokenbox token  represents the right to receive a part of company's profit. All token holders are eligible for obtaining dividends according to their stakes. Any number of tokens (100％) sold at the end of ICO have right to receive 20％ of company's profits</dd>
      </dl>

      <dl>
        <dt>Payout Structure</dt>
        <dd>According to the company bylaws, at the end of a financial year 20％ of the company's profit is transferred to an ETH wallet. The ETH is then redistributed to all holders of Tokenbox Tokens according to smart contract conditions</dd>
      </dl>

      <dl>
        <dt>Symbol</dt>
        <dd>TBX</dd>
      </dl>

      <dl>
        <dt>Total Supply</dt>
        <dd>31 000 000 (thrity one million) tokens</dd>
      </dl>

      <dl>
        <dt>Adjustable</dt>
        <dd>Yes. All unsold tokens will be burned</dd>
      </dl>

      <dl>
        <dt>Initial Rate</dt>
        <dd>Price per token, locked. 1 token = 1 USD</dd>
      </dl>
    </div>
  </section>

  <section class="section section-join-crowdsale" id="join-crowdsale">
    <div class="wrapper">
      <h1>How to Join the Crowdsale</h1>
      <p>The process is simple and only takes ~5 minutes</p>

      <h2>4 easy steps</h2>

      <ol class="step-list">
        <li>
          <span><b>Make</b> sure you comply with our Terms & Conditions.</span>
        </li><li>
          <span><b>Create</b> a Zerion account.</span>
        </li><li>
          <span><b>Choose currency</b> and the amount of Tokens you want topurchase.</span>
        </li><li>
          <span><b>Send</b> the required amount to the specified wallet address and wait for 6 confirmations.</span>
        </li><li>
          <span><b>Congratulations!</b> You’ve just purchased TBX Tokens.</span>
        </li>
      </ol>

      <a href="" class="button button-centred">Join the Crowdsale!</a>

      <div class="button-details">
        Got questions?
        <a href="">See the detailed guide.</a>
      </div>

      <p>If you decide to purchase more tokens, repeat steps 4-5 by signing-in to your dashboard.</p>
    </div>
  </section>

  @include('shared/powered')
  @include('shared/roadmap')
  @include('shared/team')

@endsection

