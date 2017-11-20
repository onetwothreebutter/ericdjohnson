<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . 'page-components/header/header.php' ?>

    <section class="work-example-banner">
        <h1 class="web-animations__heading">
            Web Animations
        </h1>
    </section>

    <section class="site__section">
        <p class="site__paragraph-text">I've got a knack for visualizing how a static design can be animated.
            Below are static designs that I've brought to life with my animation vision and coding skills.
        </p>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">SVG Icon Animations</h2>
        <p class="site__paragraph-text">At Cornerstone, our marketing website needed to feel more alive, personable, and less stock-photo-y.
            To address this, the designers wanted custom SVG icons to be animated as the user scrolled over them. I was given the static design and I
        designed the animation and coded it.</p>
        <div class="web-animations__codepen-embed">
            <div class="web-animations__instructions">scroll to animate</div>
            <p data-height="435" data-theme-id="0" data-slug-hash="XROOyy" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Newtons Cradle" class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/XROOyy/">Newtons Cradle</a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </div>
        <div class="web-animations__codepen-embed">
            <div class="web-animations__instructions">scroll to animate</div>
            <p data-height="435" data-theme-id="0" data-slug-hash="pPGGMK" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Mountain Flag" class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/pPGGMK/">Mountain Flag</a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </div>
        <div class="web-animations__codepen-embed">
            <div class="web-animations__instructions">scroll to animate</div>
            <p data-height="435" data-theme-id="0" data-slug-hash="OmdqPg" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Map Markers" class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/OmdqPg/">Map Markers</a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </div>
        <div class="work-example__button-container">
            <a class="site__button" href="http://codepen.io/collection/DyVgBV/" target="_blank">Full Collection on Codepen</a>
        </div>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Cornerstone Conference Logo</h2>
        <p class="site__paragraph-text">I love Cornerstone's 2016 conference logo. Its vibrant rainbow colors
            inspired me to see if I could animate it in an eye-catching way.
            We added the animation as a hover effect for the logo on the conference website.</p>
        <div class="site__codepen-embed">
            <p data-height="400" data-theme-id="0" data-slug-hash="vKQJvG" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Cycling Rainbow Color Logo Animation" class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/vKQJvG/">Cycling Rainbow Color Logo Animation</a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </div>
        <p class="site__paragraph-text">
            Here is the animation in action on the website:
        </p>
        <iframe class="work-example__iframe" width="560" height="315" src="//www.youtube.com/embed/Phlgxt4lE8A"
                frameborder="0" allowfullscreen></iframe>


    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Cornerstone Product Wheel</h2>
        <p class="site__paragraph-text">Our design team created a "product wheel" to illustrate how our products fit together and cover the employee lifecycle (hiring, learning, performance review, etc).
            I was given a static design and I crafted this animation for the Cornerstone home page. </p>
        <div class="site__codepen-embed">
            <p data-height="400" data-theme-id="0" data-slug-hash="ZOqEwo" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Product Wheel" class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/ZOqEwo/">Product Wheel</a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
            <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
        </div>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Founder's Timeline</h2>
        <p class="site__paragraph-text">
            Cornerstone's CEO wanted a fun and lively webpage describing the company's journey from startup to IPO. Our creative director handed
            me a static Photoshop file and I ran with it. I designed and coded the animations using ScrollMagic and GreenSock.
        </p>
        <p class="site__paragraph-text">
            Here's a quick screencast of a user scrolling through the page (for this demo, I refactored the page to remove company-specific information and added some fun fake companies).
        </p>
        <div class="work-example__video-container -autoplay-not-supported">
            <span class="site__video-instructions">click to play</span>
            <video class="site__video-embed" autoplay loop width="600">
                <source
                        src="/src/pages/work-ive-done/subpages/web-animations/videos/founders-page-demo--optimized.webm"
                        type="video/webm">
                <source
                        src="/src/pages/work-ive-done/subpages/web-animations/videos/founders-page-demo--optimized.mp4"
                        type="video/mp4">
                Your browser doesn't support HTML5 video tag.
            </video>
            <a class="work-example__button" href="https://codepen.io/ericdjohnson/project/live/AwknqA" target="_blank">Live Codepen
                demo</a>

        </div>
    </section>

    <hr class="section-divider"/>


<?php include ROOT_PATH . 'page-components/footer/footer.php' ?>

<?php include ROOT_PATH . '/page-components/javascript-includes/javascript-includes.php'; ?>
<script src="/src/pages/work-ive-done/subpages/web-animations/js/web-animations.js"></script>

<?php include ROOT_PATH . 'page-components/html-bottom/html-bottom.php'; ?>