<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . 'page-components/header/header.php' ?>

    <section class="work-example-banner">
        <h1 class="work-example-banner__heading">
            UX Design
        </h1>
    </section>

    <section class="site__section">
        <p class="site__paragraph-text">Although I'm not a full-time user experience designer, I care strongly about UX. When I come across UX issues
            in the projects I work on, I do my best to correct them. Below are a few examples.</p>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <div class="site__page-width">
            <h2 class="site__section-heading">The Case of the Wrong Audience</h2>
            <p class="site__paragraph-text">I received a comp from the design team for a page
                listing online training classes for new clients. It looked this:</p>

            <img class="site__image-zoom js-zoomable" src="/src/pages/work-ive-done/subpages/ux-design/images/comp--initial.png"/>

            <p class="site__paragraph-text">
                Instead of diving right into coding, I took a step back and thought about the intended audience, human resources
                administrators trying to learn our software. These HR admins care more about what they're learning than about
                the time the course is being taught.
            </p>
            <p class="site__paragraph-text">
                I suggested the below information architecture, which de-empahsized the date and time of the course offerings,
                making the course content much easier to visually scan.
            </p>

            <img class="site__image-zoom js-zoomable" src="/src/pages/work-ive-done/subpages/ux-design/images/comp--final.png"/>

            <p class="site__paragraph-text">
                I also recommended other UX improvements, such as moving the
                instructions for attending the webinar from the bottom of the page to a popup triggered by hovering over
                the "Attend Live Webex" button.
            </p>
        </div>

    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <div class="site__page-width">
            <h2 class="site__section-heading">The Case of Unscannable Content</h2>
            <p class="site__paragraph-text">The below web page lists all its information resources in a
                randomized tile format. These include several different types of resources (webinars, infographics, briefs, etc.).
            </p>

            <img class="site__image-zoom js-zoomable" src="/src/pages/work-ive-done/subpages/ux-design/images/csod-resource-center--current.png"/>

            <p class="site__paragraph-text">I felt that the information cards on the page were hard to scan. The only way
                for the user to make sense of the cards was to locate the card type filter dropdown at the top of the page (not shown).
            </p>

            <p class="site__paragraph-text">
                I proposed the below restructuring concept to increase scannability of the page and decrease the number
                of steps a user would have to take to make sense of the content:
            </p>

            <img class="site__image-zoom js-zoomable" src="/src/pages/work-ive-done/subpages/ux-design/images/csod-resource-center--concept.png"/>
        </div>

    </section>

    <hr class="section-divider"/>



<?php include ROOT_PATH . 'page-components/footer/footer.php' ?>

<?php include ROOT_PATH . '/page-components/javascript-includes/javascript-includes.php'; ?>
<script src="/src/js/image-zoom.js"></script>

<?php include ROOT_PATH . 'page-components/html-bottom/html-bottom.php'; ?>