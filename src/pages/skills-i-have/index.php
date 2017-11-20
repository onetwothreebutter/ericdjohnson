<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . 'page-components/header/header.php' ?>

    <section class="skills-banner">
        <div class="skills-banner__page-width">
            <h1 class="site__banner-heading">
                Skills I Have
            </h1>
            <a class="site__photo-credit" style="color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="http://unsplash.com/@jakobowens1?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Jakob Owens"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Jakob Owens</span></a>
        </div>
        <div class="skills-banner__background"></div>
        <img class="skills-banner__water-effect-target-image" src="/src/pages/skills-i-have/images/jakob-owens-299038.jpg"/>

    </section>
    <section class="site__section">
        <p class="site__page-width">
            <h2 class="site__section-heading">Web Skills</h2>
            <p class="site__paragraph-text">I have a BS in Computer Science from the University of Iowa and have been a
                professional web developer for <?php print (date('Y') - 2006); ?> years.

            </p>
            <p class="site__paragraph-text">
                Below is a list of my relative proficiency in different technologies.
            </p>
            <fieldset class="web-skills__scale">
                <legend class="web-skills__scale-heading">Skill Scale</legend>
                <dl class="web-skills__legend">
                    <dt class="web-skills__scale-name">Beginner:</dt><dd class="web-skills__scale-definition"><div class="proficiency--beginner"></div>I've used this technology to build something at least once.</dd>
                    <dt class="web-skills__scale-name">Comfortable:</dt><dd class="web-skills__scale-definition"><div class="proficiency--comfortable"></div>I've used this technology several times and have a decent feel for it.</dd>
                    <dt class="web-skills__scale-name">Very Comfortable:</dt><dd class="web-skills__scale-definition"><div class="proficiency--master"></div>I could teach a class on this topic!</dd>
                </dl>
            </fieldset>
            <ul class="web-skills__skill-list">
                <li class="web-skills__skill-item">
                    CSS/Sass
                    <div class="proficiency--master"></div>
                </li>
                <li class="web-skills__skill-item">
                    SVG
                    <div class="proficiency--comfortable"></div>
                </li>
                <li class="web-skills__skill-item -javascript">JS
                    <ul class="web-skills__skill-sublist">
                        <li class="web-skills__skill-item">Regular JS
                            <div class="proficiency--master"></div>
                        </li>
                        <li class="web-skills__skill-item">jQuery
                            <div class="proficiency--master"></div>
                        </li>
                        <li class="web-skills__skill-item">Angular 1
                            <div class="proficiency--beginner"></div>
                        </li>
                        <li class="web-skills__skill-item">React
                            <div class="proficiency--beginner"></div>
                        </li>
                        <li class="web-skills__skill-item">GreenSock
                            <div class="proficiency--comfortable"></div>
                        </li>
                    </ul>
                </li>
                <li class="web-skills__skill-item">Elm
                    <div class="proficiency--beginner"></div>
                </li>
                <li class="web-skills__skill-item">PHP
                    <div class="proficiency--master"></div>
                </li>
                <li class="web-skills__skill-item">Drupal
                    <div class="proficiency--master"></div>
                </li>
            </ul>
            <div class="web-skills__asterisk">
            </div>
            <p class="site__paragraph-text">
                I maintain and improve my coding skills by using a variety of tools and materials. I train on <a class="site__paragraph-link" href="https://www.codewars.com/users/ericdjohnson" target="_blank">Codewars</a>
                and <a class="site__paragraph-link" href="https://codefights.com/profile/ericdjohnson_ia" target="_blank">CodeFights</a>. I read books on programming like <span class="site__book-title">Clean Code</span> and <span class="site__book-title">The Pragmatic Programmer</span>.
            </p>
        <p class="site__paragraph-text">
            I also subscribe to <a class="site__paragraph-link" href="https://frontendmasters.com/" target="_blank">Frontend Masters</a> so I can dive deeply into new technologies quickly. The courses range from 5 hours to 10 hours in length, but I usually spend double that coding the examples and creating flashcards of the material.
                <a class="web-course" href="https://frontendmasters.com/courses/elm/">
                    <img class="web-course__image" src="/src/pages/skills-i-have/images/elm-frontend-masters.jpg"/>
                </a>
                <a class="web-course" href="https://frontendmasters.com/courses/svg-animation/">
                    <img class="web-course__image" src="/src/pages/skills-i-have/images/svg-animation-frontend-masters.jpg"/>
                </a>
                <a class="web-course" href="https://frontendmasters.com/courses/good-parts-javascript-web/">
                    <img class="web-course__image" src="/src/pages/skills-i-have/images/js-good-parts-frontend-masters.jpg"/>
                </a>
                <a class="web-course" href="https://frontendmasters.com/courses/react-intro/">
                    <img class="web-course__image" src="/src/pages/skills-i-have/images/intro-to-react-frontend-masters.jpg"/>
                </a>
            </p>
        </div>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Communication</h2>
        <p class="site__paragraph-text">
            Good communication is often taken for granted, but I know that it doesn't happen automatically. Here are some steps
            I take to improve communication:

<!--            Because I'm a web developer on a marketing team, I am careful to speak in non-technical terms and to use analogies to clarify.-->

<!--            I make my communication as clear as possible by inserting screenshots in emails to my colleagues or by recording short screencasts when a screenshot might leave-->
<!--            ambiguity. I keep my emails short and focused. For instance, when I need to get someone's opinion or schedule a meeting, I give him/her a few concrete options to choose from instead of-->
<!--            asking open-ended questions (e.g., "Would Tuesday at 2 p.m. work for you?" instead of "What does your week look like?"). I'll reach out on chat or phone to-->
<!--            hash something out quickly.-->



        </p>
        <ul class="site__ol-or-ul-list">
            <li class="site__list-item">I try to reduce the number of emails required to reach a decision or convey information by summarizing long email
                chains, and by asking multiple choice questions instead of open-ended questions (when appropriate).</li>
            <li class="site__list-item">I'm aware of my audience and I adjust my language and jargon accordingly.</li>
            <li class="site__list-item">I convey my uncertainty when I'm not sure about something
                and ask for other's input when warranted.</li>
            <li class="site__list-item">I'm honest about weaknesses in my ideas (and other's ideas).</li>
            <li class="site__list-item">I use screenshots and screencasts to capture information and context when it would be harder to
            convey using solely words.</li>
        </ul>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Remote Work</h2>
        <p class="site__paragraph-text">
            After working in both corporate and home office environments, I've learned that working from home full-time takes a ton of self-discipline, as well as strong communication skills.
            My personality is a good match for this sort of work, and I've found that I can better attain a deep state of focus when I'm not in a bustling office.
        </p>
        <p class="site__paragraph-text">
            However,
            there are challenges to not being physically present in the office. Psychological and technical
            barriers to setting up face-to-face video chats result in fewer interactions with my coworkers, which makes me sad.
            I try to increase my connection to the office by advocating the use of video presence software (like
            PukkaTeam or Perch.co) and by using high-quality equipment for video chats. I even bought a life-size
            cardboard cutout of myself for my team to keep in the office, complete with a dry-erase word bubble so they
            could give me things to say! : )
            <img class="site__image--cutout" src="/src/pages/skills-i-have/images/cardboard-cutout.jpg"/>
        </p>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Deep Work</h2>
        <p class="site__paragraph-text">
            I’ve studied some
            ways of boosting my learning speed to help keep pace with the stream of
            new and shiny web technologies.
        </p>
        <p class="site__paragraph-text">
            I enrolled in a Coursera online class called "Learning to Learn" at UC San Diego. The class details the
            latest research on how we learn best and most efficiently. I was surprised to discover that our brains
            continue to work on problems even when we take a break and do other activities, like taking a walk. These
            breaks allow “diffuse thinking” to occur and actually help our brains learn and process information faster.
            I used to try to work straight through long stretches of my work day, but now I take short breaks every couple of hours
            or even do 15 minutes of mindfulness meditation to help engage diffuse thinking and stay sharp all day long.</p>

        <p class="site__paragraph-text">
            And according to <a class="site__book-title" href="http://a.co/1qULY7R" target="_blank">Deep Work</a> by Cal Newport, the way we focus
            matters a lot, too. When we focus on a problem or learn new material, what we're really doing is repeatedly firing a set of related neurons. As we fire them more
            and more, the connections become stronger and we start to solve problems and solidify our learning. However, each
            time a distraction breaks our concentration, our neural connections weaken.
            Because of this, I put my phone facedown on my desk so I don't see the notifications flash by, and I periodically close my email client for a couple of hours in the
            morning when I really need to focus.
        </p>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Innovative Thinking</h2>
        <p class="site__paragraph-text">
            I often have unconventional ideas for new services, products, and work processes, and I love to share them. When my team sends out an email asking for ideas for a marketing
            campaign or event, I always reply. For example, the marketing team was working on a campaign for airports and one of the ideas I suggested was for
            airport bathrooms that would read "Don't flush away your talent".
        </p>
        <p class="site__paragraph-text">
            At a team retreat, my company hired <a class="site__paragraph-link" href="http://futurethink.com/" target="_blank">FutureThink</a> to improve our
            innovative thinking. We learned how to give new
            ideas a fair shake instead of immediately shooting them down (i.e., thinking “How might we pay for this new idea?” instead
            of “This new idea is too expensive”). We learned how to reverse our assumptions to avoid being constrained
            artificially (“What if a restaurant brought food to where people are instead of vice versa?”).
        </p>

        <p class="site__paragraph-text">
            When I have a frustrating experience with a device or a business, I like to troubleshoot the experience and
            figure out ways to make it better.
            Or—even more fun—envision new products or services that could solve the problem. To keep in our
            llamas, we use a semi-permanent fencing that needs re-adjusting every few months. My dream scenario would be a
            fluid fence made from self-charging drones. They could even have little water reservoirs to squirt the animals
            they're fencing if the animals challenge them.
        </p>
    </section>

    <hr class="section-divider"/>

    <section class="site__section">
        <h2 class="site__section-heading">Entrepreneurship</h2>
        <p class="site__paragraph-text">
            Last year I participated in two <a class="site__paragraph-link" href="https://startupweekend.org/" target="_blank">Startup Weekends</a>,
            which were challenging and exciting. During the second Startup Weekend, I pitched an idea to help
            elderly people record their family stories and memories. My team’s great collaboration on the idea
            led to our winning free tuition to the University of Iowa's six-week <a class="site__paragraph-link" href="https://iowajpec.org/entrepreneur-support/venture-school/" target="_blank">Venture School</a> at the Pappajohn Entrepreneurial Center.
        </p>
        <p class="site__paragraph-text">In Venture School, my team and I conducted over 70 customer
            interviews to answer questions about our business model hypothesis.
            We also learned some of the pitfalls of startups, like focusing on launch dates instead of customer fit, or on
            an orderly set of steps instead of the messy process of discovery and learning. Each week we practiced five-minute pitches in
            front of the class (and sometimes investors) and worked closely with business community mentors and teachers
            to move as far through the startup process as we could in six weeks.
        </p>
        <p class="site__paragraph-text">
        I really enjoyed these experiences and would like to incorporate the customer validation and product development elements in my
            career. That's why I'm looking for a job where I get to be involved in the design of the user experience.
        </p>

    </section>

    <hr class="section-divider"/>

<?php include ROOT_PATH . '/page-components/footer/footer.php' ?>

<?php include ROOT_PATH . '/page-components/javascript-includes/javascript-includes.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.5.1/pixi.min.js"></script>
    <script src="/src/pages/skills-i-have/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="/src/pages/skills-i-have/js/banner-effect.js"></script>
    <script src="/src/pages/skills-i-have/js/skills-i-have.js"></script>

<?php include ROOT_PATH . '/page-components/html-bottom/html-bottom.php'; ?>