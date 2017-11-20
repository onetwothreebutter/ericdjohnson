<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . 'page-components/header/header.php' ?>

<section class="work-example-banner">
    <h1 class="work-example-banner__heading">
        UI Components
    </h1>
</section>

<section class="site__section">
    <p class="site__paragraph-text">These are some of the user interface elements I designed and developed for my current job at Cornerstone. In
        most cases, I was
        given a static visual design with no direction and left to create the animations and interactions using my best
        judgement.</p>
</section>

<hr class="section-divider"/>

<section class="site__section">
    <h2 class="site__section-heading">Animated Banner</h2>
    <p class="site__paragraph-text">I designed the animations for this banner and figured out a way to make the background layers out
        of a single repeating image. This allowed me more flexibility in animating the background.
    </p>
    <div class="site__codepen-embed">
        <p data-height="785" data-theme-id="0" data-slug-hash="VMLdZX" data-default-tab="result" data-user="ericdjohnson" data-embed-version="2" data-pen-title="Performance Banner Animation " class="codepen">See the Pen <a href="https://codepen.io/ericdjohnson/pen/VMLdZX/">Performance Banner Animation </a> by Eric Johnson (<a href="https://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
    </div>
</section>

<hr class="section-divider"/>

<section class="site__section">

    <h2 class="site__section-heading">Displaying Cropped Text</h2>
    <p class="site__paragraph-text">Conference speaker bios tend to vary widely in length, and almost always exceed
        the area provided for them in any design. On Cornerstone's conference website, we needed to to crop the text, while still allowing
        users to easily access speaker's full bios.
    </p>
    <p class="site__paragraph-text">
        Two obvious options were:
    </p>
    <ol class="site__ol-or-ul-list">
        <li class="site__list-item">Expand the element containing a speaker's bio, pushing the other
            elements out of the way
        </li>
        <li class="site__list-item">Open a modal that would have plenty of room to display the speaker's bio</li>
    </ol>
    <p class="site__paragraph-text">
        In each approach, the user's eye would be distracted by a lot of movement on the screen,
        and, in the second case, the user wouldn't be able to continue reading where he or she left off.
    </p>
    <p class="site__paragraph-text">
        I devised the solution below, which reveals the hidden text using <code>overflow:hidden</code>.
    </p>
    <div class="site__codepen-embed">
        <p data-height="665" data-theme-id="0" data-slug-hash="MmmNKP" data-default-tab="result"
           data-user="ericdjohnson" data-embed-version="2" data-pen-title="Quick reveal of long text without modal"
           class="codepen">See the Pen <a href="http://codepen.io/ericdjohnson/pen/MmmNKP/">Quick reveal of long text
                without modal</a> by Eric Johnson (<a href="http://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a
                    href="http://codepen.io">CodePen</a>.</p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
    </div>

</section>

<hr class="section-divider"/>

<section class="site__section">
    <h2 class="site__section-heading">Making Web Forms Engaging</h2>
    <p class="site__paragraph-text">
        For the reboot of one of our products, I was tasked with creating a multi-pane form for account creation. The
        idea was to make the form engaging and user-friendly, and to try to encourage form completion by breaking the 10+ field
        form into bite-size chunks.
    </p>
    <p class="site__paragraph-text">
        The original design called for putting the form labels in the text field. I
        initiated a conversation with
        the designer and convinced him to move the form labels above the input boxes to improve usability. I also included
        a fun shake effect, borrowed from Mac OS's login field, to play the user enters invalid information.
    </p>
    <div class="site__codepen-embed">
        <p data-height="865" data-theme-id="0" data-slug-hash="JWZzEN" data-default-tab="result"
           data-user="ericdjohnson" data-embed-version="2"
           data-pen-title="Multi-part form with Apple's invalid password shake" class="codepen">See the Pen <a
                    href="http://codepen.io/ericdjohnson/pen/JWZzEN/">Multi-part form with Apple's invalid password
                shake</a> by Eric Johnson (<a href="http://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a
                    href="http://codepen.io">CodePen</a>.</p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
    </div>
</section>

<hr class="section-divider"/>

<section class="site__section">
    <h2 class="site__section-heading">Client Slider</h2>
    <p class="site__paragraph-text">I created this slider to display some of Cornerstone's featured clients and to play a
        video of each client's story. I used an SVG filter to achieve the grayed-out logos, which ensured broad browser
        compatibility, and also made it so our content admins would only need to upload a single image. Here I've replaced
        the client quotes and videos with more fun material.
    </p>
    <div class="site__codepen-embed" style="width:800px;">
        <p data-height="625" data-theme-id="0" data-slug-hash="b93e0578d2a42b3a8983431c02cf7a8d"
           data-default-tab="result" data-user="ericdjohnson" data-embed-version="2"
           data-pen-title="Client Testimonial Showcase Slider" class="codepen">See the Pen <a
                    href="http://codepen.io/ericdjohnson/pen/b93e0578d2a42b3a8983431c02cf7a8d/">Client Testimonial
                Showcase Slider</a> by Eric Johnson (<a href="http://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a
                    href="http://codepen.io">CodePen</a>.</p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
    </div>
</section>

<hr class="section-divider"/>

<section class="site__section">
    <h2 class="site__section-heading">Morphing Video Play Button</h2>
    <p class="site__paragraph-text">
        I've coded a few video play buttons in my time, and one night I had a dream about a play button that morphed into
        the video. In my spare time I created the proof-of-concept is below (unfortunately, it's a little buggy on Safari). I have also made progress on an SVG version.
    </p>
    <div class="site__codepen-embed">
        <p data-height="465" data-theme-id="0" data-slug-hash="LNvxow" data-default-tab="result"
           data-user="ericdjohnson" data-embed-version="2" data-pen-title="Morphing Play Button" class="codepen">See the
            Pen <a href="http://codepen.io/ericdjohnson/pen/LNvxow/">Morphing Play Button</a> by Eric Johnson (<a
                    href="http://codepen.io/ericdjohnson">@ericdjohnson</a>) on <a href="http://codepen.io">CodePen</a>.
        </p>
        <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
    </div>
</section>

<hr class="section-divider"/>

<?php include ROOT_PATH . 'page-components/footer/footer.php' ?>

<?php include ROOT_PATH . 'page-components/html-bottom/html-bottom.php'; ?>


