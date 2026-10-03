<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Join the 100M founding member hat auction and choose your unique member number.">
  <title>100M Founding Member Hat Auction</title>
  <link rel="stylesheet" href="commons/css/bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" href="commons/css/100m-founding-members.css">

  <style>
    .page-shell .bg-info {
        background-color: #003f43 !important;
    }
  
    .page-shell .text-info {
      color: #215f62 !important;
    }
    .page-shell .badge-info {
       background-color: #003f43 !important;
    }
    .product-hero .hero-copy p,
    .product-hero .hero-copy span,
    .product-hero .hero-copy h1,
    .product-hero .hero-copy strong {
      font-family: 'Arial', sans-serif !important;
      font-weight: bold;
    }

    /* Desktop Hero (kept exactly as in current desktop design) */
    @media (min-width: 992px) {
      .hero-copy {
        text-align: left !important;
        margin-left: 150px !important;
        padding-left: 150px !important;
        marigin-top: 100px !important;
        padding-top: 5px !important;
      }
    }

    /* Tablet Hero (768px - 991.98px) */
    @media (max-width: 991.98px) and (min-width: 576px) {
      .product-hero {
        height: auto !important;
        min-height: 260px !important;
        position: relative !important;
      }
      .product-hero > img {
        height: 100% !important;
        min-height: 260px !important;
        object-fit: cover !important;
      }
      .hero-copy {
        position: absolute !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        right: 18px !important;
        left: auto !important;
        width: 56% !important;
        margin: 0 !important;
        padding: 0 !important;
        text-align: left !important;
      }
      .hero-copy p {
        font-size: 15px !important;
        line-height: 1.2 !important;
        margin: 0 !important;
      }
      .hero-copy h1 {
        font-size: 18px !important;
        line-height: 1.15 !important;
        margin: 3px 0 !important;
      }
      .hero-copy > strong {
        font-size: 13px !important;
        padding: 4px 8px !important;
        margin: 4px 0 !important;
        display: inline-block !important;
      }
      .hero-copy > span {
        font-size: 13px !important;
        display: block !important;
      }
      .hero-copy > a {
        font-size: 10px !important;
        padding: 8px 16px !important;
        margin-top: 10px !important;
        display: inline-block !important;
      }
    }

    /* Mobile Hero (< 576px) */
    @media (max-width: 575.98px) {
      .product-hero {
        height: auto !important;
        min-height: 220px !important;
        position: relative !important;
      }
      .product-hero > img {
        height: 100% !important;
        min-height: 220px !important;
        object-fit: cover !important;
      }
      .hero-copy {
        position: absolute !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        right: 10px !important;
        left: auto !important;
        width: 60% !important;
        margin: 0 !important;
        padding: 0 !important;
        text-align: left !important;
      }
      .hero-copy p {
        font-size: 12px !important;
        line-height: 1.2 !important;
        margin: 0 !important;
      }
      .hero-copy h1 {
        font-size: 14px !important;
        line-height: 1.15 !important;
        margin: 2px 0 !important;
      }
      .hero-copy > strong {
        font-size: 11px !important;
        padding: 3px 6px !important;
        margin: 3px 0 !important;
        display: inline-block !important;
      }
      .hero-copy > span {
        font-size: 11px !important;
        display: block !important;
      }
      .hero-copy > a {
        font-size: 9px !important;
        padding: 6px 12px !important;
        margin-top: 6px !important;
        border-radius: 6px !important;
        display: inline-block !important;
      }
    }

    @media (max-width: 380px) {
      .product-hero {
        min-height: 200px !important;
      }
      .hero-copy {
        width: 64% !important;
        right: 6px !important;
      }
      .hero-copy p {
        font-size: 10px !important;
      }
      .hero-copy h1 {
        font-size: 12px !important;
      }
      .hero-copy > strong {
        font-size: 9.5px !important;
        padding: 2px 5px !important;
      }
      .hero-copy > span {
        font-size: 9.5px !important;
      }
      .hero-copy > a {
        font-size: 8px !important;
        padding: 5px 10px !important;
      }
    }

    /* Auction Grids 1–5 Styling */
    #numberGrid button[data-number="1"],
    #numberGrid button[data-number="2"],
    #numberGrid button[data-number="3"],
    #numberGrid button[data-number="4"],
    #numberGrid button[data-number="5"] {
      font-size: 7.5px !important;
      font-weight: 800 !important;
      letter-spacing: -0.2px !important;
      background-color: var(--deep, #003f43) !important;
      color: #fff !important;
      cursor: pointer !important;
    }

    #numberGrid button[data-number="1"]:hover,
    #numberGrid button[data-number="2"]:hover,
    #numberGrid button[data-number="3"]:hover,
    #numberGrid button[data-number="4"]:hover,
    #numberGrid button[data-number="5"]:hover {
      filter: brightness(1.2);
    }

    #numberGrid button[data-number="1"].selected,
    #numberGrid button[data-number="2"].selected,
    #numberGrid button[data-number="3"].selected,
    #numberGrid button[data-number="4"].selected,
    #numberGrid button[data-number="5"].selected {
      outline: 3px solid var(--red, #990c12) !important;
      outline-offset: 1px !important;
      background-color: var(--red, #990c12) !important;
    }

    /* Cap-row interactive styling matching selection-layout */
    .cap-row {
      cursor: pointer;
    }
    .cap-row figure {
      cursor: pointer;
      border: 2px solid transparent;
      border-radius: 8px;
      padding: 3px 2px;
      transition: transform 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, background-color 0.15s ease;
      user-select: none;
    }
    .cap-row figure:hover {
      transform: translateY(-2px);
      background: rgba(0, 63, 67, 0.05);
    }
    .cap-row figure.active {
      border-color: var(--red, #990c12) !important;
      box-shadow: 0 0 0 2px var(--paper, #fff), 0 0 0 4px var(--red, #990c12) !important;
      background: var(--soft, #cbdcdb) !important;
    }
</style>                                                                                                                                                                                                                                                                                                                                                           
</head>


<body>
  <main class="page-shell">
    <section class="story-panel" aria-label="100M membership story">
      <header class="site-header">
        <a class="logo" href="#" aria-label="100M home"><img src="images/logo.png" alt=""><strong>100M</strong></a>
        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false" aria-controls="primaryNav"><span></span><span></span><span></span></button>
        <nav id="primaryNav" aria-label="Primary navigation"><a href="#mission">Our Mission</a><a href="#auction">Our Goal</a><a href="#reserve">The Reserve</a></nav>
      </header>

     <section class="product-hero">
        <img src="images/red-cap-hero.jpg" alt="Burgundy 100M founding member hat">
        <div class="hero-copy">
          <p>CPR For The Spirit of America</p>
          <p>Freedom deserves an Identity</p>

          <h1>Join the 100M Freedom Movement</h1>
          <strong>Claim Your Founding Member Hat</strong>
          <span>Own your piece of history.</span>
          <a href="#auction">JOIN THE MOVEMENT</a>
        </div>
      </section>


      <!-- WHY HATS -->
   
        
      <section class="bg-light text-info py-4 px-3" aria-labelledby="journey-title">
        <div class="text-center">
          <div class="d-flex align-items-center justify-content-center small font-weight-bold"><span class="border-top border-info w-25"></span><strong class="mx-3">26 YEAR JOURNEY TO 100M MEMBER HATS</strong><span class="border-top border-info w-25"></span></div>
          <h2 id="journey-title" class="font-weight-bold text-dark mt-2 mb-1">26 Years Working to Build a More Conscious Community.</h2>
          <p class="small mb-0">Then 2024 Arrived and gave birth to 2025
"The beginning of the END?.

We are living the conquence of the slow degradation but in a larger scale
Before it was subtle and we read about it, or saw it in movies.

Now it's in your face, that's what we're bein led to believe
because there is one target.

It's deeper than that
It can only be fixed one way.

It can't be left up to someone else
That's what created the problem in the beginning.
<br class="d-none d-md-block">
Being part of the 100M million movement changes your energy from a passive observer
to a engaged participant in the game of destiny.

Let's take a quick walk down memory lane
250 years ago. We had just won independence

But it didn't mean anything.
The reason we wanted it, was because we thought things were going to be better.
<br class="d-none d-md-block">
Actually. They were worse
States that had committed to contributing to the cost of the war, had defaulted.

Some states were doing better than others
Why would anybody care, if it didn't affect them.</p>
        </div>

        <div class="row no-gutters mt-3">
          <div class="col-12 col-md-6 col-lg-3 p-1">
            <article class="card h-100 border-light shadow-sm">
              <div class="card-body d-flex p-3">
                <span class="badge badge-info rounded-circle align-self-start p-3 mr-3">◉</span>
                <div class="text-dark"><h3 class="h6 font-weight-bold text-dark"  >Not in our Image</h3>
                <strong class="small text-dark">In Personal Freedom</strong>
                <p class="small mt-2 mb-0">That was the challenge. We had a lot to learn.</p>
              </div>
            </div>
          </article>
        </div>




          <div class="col-12 col-md-6 col-lg-3 p-1">
            <article class="card h-100 border-light shadow-sm"><div class="card-body d-flex p-3"><span class="badge badge-info rounded-circle align-self-start p-3 mr-3">△</span><div class="text-dark"><h3 class="h6 font-weight-bold">The Big Breakthrough</h3><strong class="small">Not from reading a million books on</strong><ul class="small pl-3 my-2"><li>Philosophy, it helped a lot</li><li>The Giant Within, although it helped</li>
           <li>Think and Grow Big, although it helped</li>
            <li> Following Gurus,Reading Philosophy, although it helped</p></li></ul>
           </div>
            </div>
              </article> 
          </div>
          <div class="col-12 col-md-6 col-lg-3 p-1"><article class="card h-100 border-light shadow-sm"><div class="card-body d-flex p-3"><span class="badge badge-info rounded-circle align-self-start p-3 mr-3">♙</span><div class="text-dark"><h3 class="h6 font-weight-bold">The answer?</h3><ul class="small pl-3 mb-0"><li>The people that took our courses</li><li>The people that came in for consultation</li><li>The people that came in for sunday sessions</li></ul></div></div></article></div>
          <div class="col-12 col-md-6 col-lg-3 p-1"><article class="card h-100 bg-info text-white border-0 shadow-sm"><div class="card-body d-flex p-3"><span class="badge badge-light rounded-circle align-self-start p-3 mr-3">⌒</span><div><h3 class="h6 font-weight-bold">Why Hats</h3><p class="small mb-2">The 100M Founding Member Hats were conceived to give outstanding individuals the opportunity to share their leadership in support of the community.</p><p class="small mb-2">The 100M Freedom Member hats were created to carry the message to all for whom the system was created that their role in their own destiny isn't an individual effort rather that it also requires an individual effort to preserve the society that guarantees it and protects it.</p><strong class="small">100 Million people standing together under one unifying symbol defines history.</strong></div></div></article></div>
           
                
        <div class="row border-top border-info mt-3 pt-3 mx-2">
          <article class="col-12 col-md-4 d-flex border-right border-info py-2"><span class="display-4 mr-3">♙</span><div><h3 class="h6 font-weight-bold text-dark">Easier to get someone to wear a hat<br>than to get someone to look at your shirt</h3><p class="small mb-0 text-dark">It can’t be about a hat<br>It has to be about who you are</p></div></article>
          <article class="col-12 col-md-4 d-flex border-right border-info py-2"><span class="display-4 mr-3">⚑</span><div><h3 class="h6 font-weight-bold text-dark">Make Your Hat Your Megaphone</h3><p class="small mb-0 text-dark">Wearing the hat carries a message that can be heard a mile away,<br>to be counted and to celebrate the identity shared by free people.</p></div></article>
          <article class="col-12 col-md-4 d-flex py-2"><span class="display-4 mr-3">★</span><div><h3 class="h6 font-weight-bold text-dark">🇺🇸 &nbsp; USA Made</h3><p class="small mb-0 text-dark">Every stitch, made in America with pride.<br>Built here to unite, inspire, and be worn<br>boldly by everyone.</p></div></article>
        </div>
            

        </div>  

        <div class="card bg-info text-white border-0 mt-3 overflow-hidden">
          <div class="card-body text-center p-3">
            <div class="d-flex align-items-center justify-content-center small font-weight-bold"><span class="border-top border-light w-25"></span><strong class="mx-3">THE 100M FREEDOM MEMBER HATS</strong><span class="border-top border-light w-25"></span></div>
            <h3 class="font-weight-bold mb-2">More Than a Hat — It’s a Movement</h3>
            <p class="small">The 100M Freedom Member hats were created to carry the message to all for whom the system was created<br class="d-none d-md-block">that their role in their own destiny isn’t an individual effort rather that it also requires an individual effort<br class="d-none d-md-block">to preserve the society that guarantees it and protects it.</p>
            <div class="row no-gutters justify-content-center">
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">⌒</b><strong class="d-block small">The hat<br>is the:</strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">◆</b><strong class="d-block small">Key<br><small>that turns you<br>“O” on</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">Ⅱ</b><strong class="d-block small">Gate<br><small>that opens your<br>panorama</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">◉</b><strong class="d-block small">Visor<br><small>that flips your<br>vision</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">⌖</b><strong class="d-block small">GPS<br><small>that sets your<br>horizon</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">∩</b><strong class="d-block small">Magnet<br><small>that attracts your<br>community</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">⚑</b><strong class="d-block small">Megaphone<br><small>that announces<br>your presence</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">▱</b><strong class="d-block small">Bulldozer<br><small>that clears<br>your path</small></strong></div>
              <div class="col-4 col-md p-1"><b class="d-inline-block rounded-circle border border-light p-2">♙</b><strong class="d-block small">Magnet<br><small>that attracts your<br>community</small></strong></div>
            </div>
            <img class="img-fluid mt-2" src="/images/hats/hat_red.png" width="240" alt="Cardinal 100M Freedom Member hat">
          </div>
        </div>
      </section>
    
      <section class="parade-band"><img src="/images/hats/united.png" alt="American community marching together beneath the flag"></section>

      <section class="auction-box" id="auction">
        <h2>PREMIUM AUCTION: HAT NUMBERS 1 TO 5</h2>
        <p>Secure your sponsored hat number 1 through 5. Place any range, and additional automated bids. The highest bidder will receive the exclusive hat.</p>
        <div class="premium-bids">
          <button type="button" data-number="1"><b>1</b><span>Current Bid<br><strong>$999</strong></span></button>
          <button type="button" data-number="2"><b>2</b><span>Current Bid<br><strong>$999</strong></span></button>
          <button type="button" data-number="3"><b>3</b><span>Current Bid<br><strong>$999</strong></span></button>
          <button type="button" data-number="4"><b>4</b><span>Current Bid<br><strong>$999</strong></span></button>
          <button type="button" data-number="5"><b>5</b><span>Current Bid<br><strong>$999</strong></span></button>
        </div>
        <button class="place-bid" type="button">PLACE YOUR BID</button>
        <small>Bid increments increase over time</small>
      </section>

      <section class="member-photo">
        <img src="/images/hats/crowd.jpg" alt="A diverse community of FREEDOM members wearing caps">
        <div class="member-photo-copy"><h2>Join the Community</h2><p>100 million freedom members. One American movement.</p></div>
      </section>
    </section>

    <aside class="reserve-panel" id="reserve" aria-label="Choose your 100M hat and member number">
      <section class="selector-section">
        <h2>CHOOSE YOUR STYLE &amp; NUMBER</h2>
        <label class="search"><span class="sr-only">Search member number</span><input id="numberSearch" type="number" min="1" max="100" placeholder="Search"><button type="button" aria-label="Search">⌕</button></label>
        <div class="selection-layout">
          <div class="styles" aria-label="Hat color">
            <button class="style-card active" type="button" data-color="cardinal" aria-pressed="true"><img src="images/hats/hat_red.png" alt="Cardinal 100M embroidered hat"><strong>Cardinal</strong></button>
            <button class="style-card" type="button" data-color="independence" aria-pressed="false"><img src="images/hats/hat_dodger_blue.png" alt="Independence 100M embroidered hat" loading="lazy"><strong>Independence</strong></button>
            <button class="style-card" type="button" data-color="liberty" aria-pressed="false"><img src="images/hats/hat_white.png" alt="Liberty 100M embroidered hat" loading="lazy"><strong>Liberty</strong></button>
                        <button class="style-card" type="button" data-color="vintage" aria-pressed="false"><img src="/images/hats/freedom_hats/khaki_freedom.png" alt="Vintage 100M embroidered hat" loading="lazy"><strong>Vintage</strong></button>

            <button class="style-card" type="button" data-color="heritage" aria-pressed="false"><img src="/images/hats/freedom_hats/green_freedom.png" alt="Heritage 100M embroidered hat" loading="lazy"><strong>Heritage</strong></button>

          </div>
          <div class="number-area"><h3>SECURE YOUR SPECIAL<br>FOUNDING NUMBER (1–100)</h3><div class="number-grid" id="numberGrid" aria-label="Founding member numbers"></div></div>
        </div>
        
        <p class="choose-note"><strong>Choose Your Color. Spread the Message. Change the World.</strong><br>
      </section>

      <section class="goal-section">
        <h2>OUR NATION'S GOAL:<br>100 MILLION FREEDOM MEMBERS</h2>
        <p>A movement of support &amp; unity</p>
        <div class="progress"><span></span></div>
        <div class="progress-labels"><b>1M</b><strong>Our journey to 100M</strong><b>100 Million</b></div>
      </section>

        <p class="choose-note"><strong>Choose Your Color. Spread the Message. Change the World.</strong><br>Available after slots 1–100 are reserved at auction.</p>
        <div class="cap-row" aria-label="Available hat colors">
          <figure><img src="/images/hats/freedom_hats/hat_red.png" alt="Cardinal 100M hat" loading="lazy">
            <figcaption>Cardinal</figcaption>
          </figure>
          
          <figure><img src="/images/hats/freedom_hats/navy_blue_freedom.png" alt="Independence 100M hat" loading="lazy"><figcaption>Independence</figcaption></figure>
          <figure><img src="/images/hats/freedom_hats/white_freedom.png" alt="Liberty 100M hat" loading="lazy"><figcaption>Liberty</figcaption></figure>
          <figure><img src="/images/hats/freedom_hats/khaki_freedom.png" alt="Vintage 100M hat" loading="lazy"><figcaption>Vintage</figcaption></figure>
          <figure><img src="/images/hats/freedom_hats/green_freedom.png" alt="Heritage green 100M hat" loading="lazy"><figcaption>Heritage</figcaption></figure>
        </div>

      <section class="faq-section">
        <h2>AUCTION FAQs (Placeholders)</h2>
        <div class="faq-list">
          <article><button type="button" aria-expanded="false"><span><strong>What are the rules?</strong><small>Answer text placeholder (tap to expand)</small></span><i></i></button><p>Bids are tied to one numbered hat. The highest valid bid wins when the auction closes.</p></article>
          <article><button type="button" aria-expanded="false"><span><strong>How to place a bid?</strong><small>Answer text placeholder (tap to expand)</small></span><i></i></button><p>Choose a style and number, then select Place Your Bid to confirm your choice.</p></article>
          <article><button type="button" aria-expanded="false"><span><strong>Can I increase my bid?</strong><small>Answer text placeholder (tap to expand)</small></span><i></i></button><p>Yes. Return to your selected number and submit a higher amount before closing.</p></article>
        </div>
      </section>

      <section class="assurance"><h2>TRUST &amp; QUALITY ASSURANCE</h2><div><span>🇺🇸<strong>USA Made</strong></span><span>●<strong>30 Day Guarantee</strong></span><span>♙<strong>Secure Checkout</strong></span><span>✣<strong>100% Satisfaction</strong></span></div></section>
      <footer><div><a href="#mission">About</a><a href="#auction">Auction</a><a href="#reserve">Support</a></div><p>© 2026 100M &nbsp; · &nbsp; United by purpose.</p></footer>
    </aside>
  </main>
  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script src="commons/js/boostrap4/bootstrap.bundle.min.js"></script>
  <script src="commons/js/100m-hat-auction.js"></script>
  <script>
    (function() {
      // 1. Setup Auction Grids 1-5: show BID, clickable, direct to Auction section
      function initAuctionGrids1to5() {
        var grid = document.querySelector('#numberGrid');
        if (!grid) return;
        
        for (var i = 1; i <= 5; i++) {
          var btn = grid.querySelector('button[data-number="' + i + '"]');
          if (btn) {
            btn.textContent = 'BID';
            btn.setAttribute('title', 'Bid on founding member number ' + i);
            btn.setAttribute('aria-label', 'Bid on founding member number ' + i);
            
            btn.addEventListener('click', function(e) {
              var num = this.getAttribute('data-number');
              var premBtn = document.querySelector('.premium-bids button[data-number="' + num + '"]');
              if (premBtn) {
                document.querySelectorAll('.premium-bids button').forEach(function(b) {
                  b.classList.remove('selected');
                });
                premBtn.classList.add('selected');
              }
              var auctionSec = document.querySelector('#auction');
              if (auctionSec) {
                auctionSec.scrollIntoView({ behavior: 'smooth', block: 'start' });
              }
            });
          }
        }
      }

      // 2. Setup Cap Row interactivity matching selection-layout
      function initCapRow() {
        var capFigures = document.querySelectorAll('.cap-row figure');
        var styleCards = document.querySelectorAll('.style-card');
        var capRow = document.querySelector('.cap-row');

        var activeStyle = document.querySelector('.style-card.active strong');
        var initialColor = activeStyle ? activeStyle.textContent.trim().toLowerCase() : 'cardinal';
        
        capFigures.forEach(function(fig) {
          var caption = fig.querySelector('figcaption');
          var colorName = caption ? caption.textContent.trim().toLowerCase() : '';
          fig.setAttribute('role', 'button');
          fig.setAttribute('tabindex', '0');
          fig.setAttribute('aria-label', 'Select ' + (caption ? caption.textContent.trim() : 'color') + ' hat');
          
          if (colorName === initialColor) {
            fig.classList.add('active');
            fig.setAttribute('aria-pressed', 'true');
          } else {
            fig.setAttribute('aria-pressed', 'false');
          }

          function selectThisCap(e) {
            if (e) e.stopPropagation();
            capFigures.forEach(function(f) {
              f.classList.remove('active');
              f.setAttribute('aria-pressed', 'false');
            });
            fig.classList.add('active');
            fig.setAttribute('aria-pressed', 'true');

            // Sync with selection-layout style cards
            var targetCard = null;
            styleCards.forEach(function(card) {
              var cardName = card.querySelector('strong');
              if (cardName && cardName.textContent.trim().toLowerCase() === colorName) {
                targetCard = card;
              }
            });

            if (targetCard) {
              targetCard.click();
            }

            var reserve = document.querySelector('#reserve');
            if (reserve) {
              reserve.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
          }

          fig.addEventListener('click', selectThisCap);
          fig.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
              e.preventDefault();
              selectThisCap(e);
            }
          });
        });

        // Clicking anywhere in the whole cap-row also navigates to selection-layout
        if (capRow) {
          capRow.addEventListener('click', function(e) {
            if (!e.target.closest('figure')) {
              var reserve = document.querySelector('#reserve');
              if (reserve) {
                reserve.scrollIntoView({ behavior: 'smooth', block: 'start' });
              }
            }
          });
        }

        // When style cards in selection-layout are clicked, keep cap-row in sync
        styleCards.forEach(function(card) {
          card.addEventListener('click', function() {
            var cardNameEl = card.querySelector('strong');
            if (!cardNameEl) return;
            var color = cardNameEl.textContent.trim().toLowerCase();
            capFigures.forEach(function(fig) {
              var caption = fig.querySelector('figcaption');
              var capColor = caption ? caption.textContent.trim().toLowerCase() : '';
              if (capColor === color) {
                fig.classList.add('active');
                fig.setAttribute('aria-pressed', 'true');
              } else {
                fig.classList.remove('active');
                fig.setAttribute('aria-pressed', 'false');
              }
            });
          });
        });
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
          initAuctionGrids1to5();
          initCapRow();
        });
      } else {
        initAuctionGrids1to5();
        initCapRow();
      }
    })();
  </script>
</body>
</html>
