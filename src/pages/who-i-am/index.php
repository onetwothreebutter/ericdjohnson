<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . '/page-components/header/header.php' ?>

<?php
    include ROOT_PATH . '/utility-functions.php';
    $d1 = new DateTime('2011-04-01');
    $d2 = new DateTime();
    $diff = $d2->diff($d1);
    $blueyah_years = numberToWord($diff->y);
?>

    <section class="who-banner">
        <div class="site__page-width">
            <h1 class="site__banner-heading">
                Who I Am
            </h1>
            <a class="site__photo-credit"
               style="color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;"
               href="http://unsplash.com/@krisroller?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
               target="_blank" rel="noopener noreferrer"
               title="Download free do whatever you want high-resolution photos from Kristopher Roller"><span
                        style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg"
                                                                           style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;"
                                                                           viewBox="0 0 32 32"><title></title><path
                                d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span
                        style="display:inline-block;padding:2px 3px;">Kristopher Roller</span></a>
        </div>
    </section>
    <section class="site__section">
        <p class="site__paragraph-text">
            I’m a creative, good-humored guy who cares a lot about user-friendly experiences, civic
            responsibility, and the environment. I've been a web developer for <?php print (date('Y') - 2006); ?> years, and for the past <?php print $blueyah_years; ?> years I've been
            telecommuting from an acreage outside Iowa City, where my wife and I grow
            pick-your-own blueberries. We are also the stewards of two rambunctious llamas, <a class="site__paragraph-link" href="https://twitter.com/llama_jake" target="_blank">Jake</a> and <a
                    class="site__paragraph-link" href="https://twitter.com/llama_elwood" target="_blank">Elwood</a>, and we're renovating our 100-year
            old
            barn to host rural events (scary movies are better in an old barn!).
        </p>

        <h2 class="site__section-heading">Rural Nerd</h2>
        <p class="site__paragraph-text">
            I grew up on a 2,000-acre corn and soybean farm in southeast Iowa. I did farm stuff like driving tractors and
            baling hay, and I rode our farm's old blue ATV like I was competing in the X Games. But I alse loved computers.
            My family got our first computer in 1990. It had a 20 mHz processor, and one of the greatest presents I got was
            a SoundBlaster sound card. I was totally a rural nerd.

        </p>
        <img class="who-i-am__image" src="/src/pages/who-i-am/images/rural-nerd.jpg" alt="Eric showcasing his middle school art"/>

        <h2 class="site__section-heading">Open-minded</h2>
        <p class="site__paragraph-text">
            I've made several reversals in my life when I have encountered compelling evidence to change. I used to believe
            running would lead to some kind of crippling injury, and I even bought an elliptical machine to protect my joints. But
            then I read <span class="site__book-title">Born to Run</span> by Christopher McDougall, which details evidence
            that humans actually evolved to be great long-distance runners. (Did you know humans can beat a horse in a marathon?)
            Now I run several times a week cross-country for exercise, and I own a treadmill.
        </p>
        <p class="site__paragraph-text">
            I'm also OK with being wrong. I feel like it's better to stick my neck out and and suggest an idea than it is to
            keep quiet (even if the idea is flawed, it may lead to a better idea).
            I welcome feedback from colleagues and stakeholders and happily make changes to my work.
        </p>

        <h2 class="site__section-heading">A Connector</h2>
        <p class="site__paragraph-text">
            I have a underlying drive to connect people and reveal their common ground.
            Part of the reason I like co-leading our local chapter of Citizens' Climate Lobby is that CCL's approach involves
            having civil, respectful conversations with Democrats and Republicans about climate change. And I have a pet
            project of developing an app that helps
            people have difficult conversations with each other.
        </p>

        <h2 class="site__section-heading">Egalitarian</h2>
        <p class="site__paragraph-text">
            I’m empathetic and a good listener. In meetings and conversations, I work hard to hear everyone
            and help them have the space to complete their thoughts. In video chats, it's not always obvious
            when someone interrupts another person, but when I notice it, I wait for the current speaker to finish and then
            I ask the interrupted person what they were trying to say.

        </p>

        <h2 class="site__section-heading">Arty</h2>
        <p class="site__paragraph-text">
            I love visual design. Though I don’t have formal training, I have a passion and talent for creating
            designs, both for the web and otherwise (my hobby business is designing funny t-shirts and stickers). It's
            thrilling when I stumble across a new idea and the design clicks into place. I have
            the most fun coding when inventing a visual animation or recreating a complex visual design in code.
        </p>

        <h2 class="site__section-heading">Community Oriented</h2>
        <p class="site__paragraph-text">
            I’m an engaged citizen and civic-minded. A few examples:

        <ul class="site__ol-or-ul-list">
            <li class="site__list-item">I’m the co-leader of the Iowa City chapter of <a class="site__paragraph-link"
                                                                                         href="https://citizensclimatelobby.org/"
                                                                                         target="_blank">Citizens'
                    Climate Lobby</a>, which is an international organization focused on
                passing bipartisan climate change legislation
                at the federal level. I lead and organize monthly meetings and help chapter members write letters and meet
                with Iowa’s Senators and Representatives.
            </li>
            <li class="site__list-item">In Spring 2017, I organized a <a class="site__paragraph-link" href="https://runforvictimsofclimatechange.org/" target="_blank">run/walk fundraiser</a> for climate change victims.
                We had 71 registrants and raised over $2,300 for the American Red Cross's Disaster Relief Fund.
            </li>
            <li class="site__list-item">I served on the Wellness Committee and the Coolness Committee at my previous
                job at Integrated DNA Technologies. We created a "Thinnest Winner" contest for weight loss (my name!), and
                helped plan office overhauls to modernize our workplace.</li>
        </ul>
        </p>


        <h2 class="site__section-heading">Miscellaneous</h2>
        <p class="site__paragraph-text">
            <ul class="site__ol-or-ul-list">
                <li class="site__list-item">I love baseball and once led a co-ed slow-pitch softball team called the Monster Ballads.</li>
                <li class="site__list-item">I say "pop" instead of "soda" but don't drink either anymore.</li>
                <li class="site__list-item">I have a <a class="site__paragraph-link" href="https://onewheel.com/" target="_blank">Onewheel+</a> and I love it to death!</li>
            <li class="site__list-item">I unfortunately pronounce the "h" in "white" and "whale."</li>
            </ul>

        </p>
    </section>

    <hr class="section-divider"/>


<?php include ROOT_PATH . '/page-components/footer/footer.php' ?>

<?php include ROOT_PATH . '/page-components/javascript-includes/javascript-includes.php'; ?>
    <script src="/src/js/image-zoom.js"></script>

<?php include ROOT_PATH . '/page-components/html-bottom/html-bottom.php'; ?>