<section class="section section-faq js-tabs" id="faq">
    <h1>{{__('FAQ')}}</h1>

    <div class="tabs">
        <a href="#faq-1" class="current">{{__('Tokenbox platform')}}</a>
        <a href="#faq-2">{{__('TBX tokens')}}</a>
        <a href="#faq-3">{{__('Crowdsale')}}</a>
    </div>

    <div class="wrapper">
        <div class="accordion js-tab" id="faq-1">
            <div class="accordion-item">
                <input type="checkbox" id="item-1">

                <label class="heading-2" for="item-1">
                    {{__('What you mean \'an ecosystem for crypto-investors, traders and funds\' - does \'fund\' mean an investment fund? Or does it have some kind of meaning?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Portfolio managers and traders receive a ready-made "box" solution for the creation of its own tokenized fund, operating within the legal framework. Investors can make their choice between different funds, according to the inherent ratio of risk and return. "Fund" means an investment fund which specializes in investing on cryptocurrencies and tokens markets.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-2">

                <label class="heading-2" for="item-2">
                    {{__('What is the difference between a trader and a fund?')}}
                </label>

                <div class="accordion-item-content">
                    <i>{{__('A trader is a person, who independently making decisions and selecting active trading strategies on the market.')}}</i>
                    {{__('A fund mostly includes a team of specialists (a fund manager, a portfolio manager, a department of analysis and strategy). Decisions can be made collectively.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3">

                <label class="heading-2" for="item-3">
                    {{__('Is there any prototype of the platform?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('"Tokenized funds" will be a key element of the system. The Token Fund (https://thetoken.io) that is currently working is an example or prototype, it was created and developed by the Tokenbox team.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-4">

                <label class="heading-2" for="item-4">
                    {{__('Is Tokenbox itself a trading exchange or is it a gateway to access trading exchanges?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Tokenbox is not an exchange. Individual investors will not be using the platform as an exchange, meanwhile, investors will be able to buy tokens of Funds and Traders (to make a choice, buy, keep tokens on the platform, repay tokens, receive revenue, etc.) <br> For Funds and Traders Tokenbox will be a gateway for entering to exchanges via API, using trading terminal.') }}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-4-1">

                <label class="heading-2" for="item-4-1">
                    {{__('Is the alpha-version going to be live and functional?')}}
                </label>

                <div class="accordion-item-content">
                    {!! __('Yes, the alfa-version will be functional for early-bird Funds and Traders which will announce their partnership with Tokenbox.<br>The first partners of Tokenbox (funds and traders) have the opportunity to receive significant funds for managment at the start of work with Tokenbox.') !!}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-5">

                <label class="heading-2" for="item-5">
                    {{__('How will Tokenbox find funds and traders to use its alpha product?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Promotional activities, direct negotiations (business development).')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-6">

                <label class="heading-2" for="item-6">
                    {{__('What happens between the end of the crowdsale in October and Q2/3 next year.  Why does it take so long?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('We need to conduct complex legal procedures and large scale development. We do not think that this is long period for such a project even if we take into account our experience in creating the tokenized fund.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-7">

                <label class="heading-2" for="item-7">
                    {{__('What is "Fund’s tokenization"?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Each Fund will be able to create its own token which will be an equivalent of a share in the Fund. The cost of a token depends on the portfolio capitalization growth without dependency on investors number. The process of issuing and redeeming tokens is fully built on Ethereum smart-contracts.')}}
                    <br>
                    {{__('For example, the Fund began with 1,000 Bitcoin investments. Initially, there were two investors and each invested 500 BTC. The capitalization was equal to USD 4,000,000.')}}
                    <br>
                    {{__('The Fund issued its own tokens at USD 100 (for instance, it selected a name “FMG”). Each FMG token costs USD 100. Both investors received FMG 20,000 (totally 40,000) as a confirmation of their shares in the Fund.')}}
                    <br>
                    {{__('Then the fund manager sold a part of Bitcoins, bought other cryptocurrencies, market grows, and the capitalization grew to USD 6,000,000. Now each FMG token costs USD 150.')}}
                    <br>
                    {{__('Then a third investor comes and invested USD 1,500,000. In this case third investor receives FMG 10,000.')}}
                    <br>
                    {{__('So, the Fund’s capitalization is USD 7,500,000. The total number of FMG tokens is 50,000. Each FMG token costs USD 150.') }}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-8">

                <label class="heading-2" for="item-8">
                    {{__('What kind of trading terminal will be developed? Will it be a cross platform application for Windows and *NIX systems? What about browser based version and app for Android and IOS devices?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Trading terminal will be developed according to the needs of various market participants (fund managers and traders).')}}
                    <br>
                    {{__('For instance, portfolio managers will get an opportunity to re-balance portfolios in accordance with the parameters set beforehand, by making transactions with a few assets. This will cut labor costs. Also, the software will allow automatic reports generation for portfolios via messengers (using bots), etc.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-10">

                <label class="heading-2" for="item-10">
                    {{__('What kind of security measures and policies will be provided against investor funds losts and misappropriate usage by traders and other platform participants?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Investor\'s funds, excluding daily liquidity, are stored on multi-signature wallets behind a closed loop. All private keys are placed in a separate storage behind the contour of the platform, which allows to guarantee a higher degree of their safety.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-11">

                <label class="heading-2" for="item-11">
                    {{__('What is unique key features of Tokenbox, that differs it from similar services?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Differences from other services are presented in section 8 of White Paper.')}}
                </div>
            </div>
        </div>

        <div class="accordion js-tab" id="faq-2">
            <div class="accordion-item">
                <input type="checkbox" id="item-2-1">

                <label class="heading-2" for="item-2-1">
                    {{__('What is TBX token?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('TBX is an utility token that providing an access to the platform’s services. A fund manager or trader who wishes to operate his own fund on the platform, acquires TBX tokens and deposits them on the platform. These funds in the TBX format, are placed in the portfolio of the Fund or Trader and are valued in the portfolio like any other assets. The share of TBX-tokens in portfolios should be maintained at a level of at least 5%.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-2-2">

                <label class="heading-2" for="item-2-2">
                    {{__('What is the price of one TBX token?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('The established price (1 TBX = 1 USD) is a price of initial token offering.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-13">

                <label class="heading-2" for="item-13">
                    {{__('What amount of TBX tokens can be issued?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('The number of TBXs will be fixed at the end of TGE. Max. 31 000 000 TBX. No additional creation is available.')}}
                </div>
            </div>
        </div>

        <div class="accordion js-tab" id="faq-3">
            <div class="accordion-item">
                <input type="checkbox" id="item-3-1">

                <label class="heading-2" for="item-3-1">
                    {{__('What is a TGE crowdsale?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('TGE - Token Generation Event. It is a synonym of the ICO. We use the TGE term because TBX tokens but not coins will be issued.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3-2">

                <label class="heading-2" for="item-3-2">
                    {{__('Do you have a hard cap?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Yes, the amount raised cannot exceed USD 20 million.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3-4">

                <label class="heading-2" for="item-3-4">
                    {{__('What currencies do you accept?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('We accept ETH, BTC. We are sorry, but we don’t accept fiat contributions.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3-5">

                <label class="heading-2" for="item-3-5">
                    {{__('What address can I use to participate?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('You can use only ETH address. You will receive TBX tokens after token distribution period on this address. Do not use exchanges or online services addresses, you will not be able to receive TBX there. If you do not own an ETH address, we recommend you to create one on MyEtherWallet: https://myetherwallet.com')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3-6">

                <label class="heading-2" for="item-3-6">
                    {{__('In which countries will the TGE be compliant and able to accept funds from resident investors? Or, in which countries will the TGE not be accessible?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('All countries except the USA and Singapore.')}}
                </div>
            </div>

            <div class="accordion-item">
                <input type="checkbox" id="item-3-7">

                <label class="heading-2" for="item-3-7">
                    {{__('Are there any special conditions, bonuses? Will there be a pre-sale?')}}
                </label>

                <div class="accordion-item-content">
                    {{__('Currently, there is still an opportunity to participate in a private pre-sale. If you are a fund or a major investor, you can&nbsp;<a href="mailto:hello@tokenbox.io">contact us</a>&nbsp;for a special offer. During the TGE crowdsale period bonuses are not provided.')}}
                </div>
            </div>
        </div>
    </div>
</section>
