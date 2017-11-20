<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<?php include ROOT_PATH . '/page-components/header/header.php' ?>

    <section class="resume__banner">
        <div class="site__page-width">
            <h1 class="resume__banner-heading">
                Resume & Contact Info
            </h1>
            <a class="site__photo-credit" style="color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="http://unsplash.com/@helloimnik?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Nicola Jones"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Hello I'm Nik</span></a>
        </div>
    </section>

<section class="site__section">
    <h2 class="site__section-heading">Resume</h2>
    <p class="resume__paragraph-text">
        <object data="/src/pages/contact-me/files/Eric-Johnson-Resume.pdf" style="width: 100%; height: 100%; display: block;" type='application/pdf'></object>
    </p>

</section>
    <hr class="section-divider"/>
<section class="site__section">
    <h2 class="site__section-heading">Contact Info</h2>
    <p class="site__paragraph-text">
        <a class="contact-link" href="mailto:eric.d.johnson@gmail.com">
            <img class="email-icon" src="/src/pages/contact-me/images/opened-email-envelope.svg" alt="envelope with @ sign" title="Icon made by https://www.flaticon.com/authors/ocha"/>
            <span class="contact-link__text">eric.d.johnson@gmail.com</span>
        </a>
    </p>
    <p class="site__paragraph-text">
        <a class="contact-link" href="tel:+13194009903">
            <img class="phone-icon" src="/src/pages/contact-me/images/cell-phone.svg" alt="cell phone" title="Icon made by https://www.flaticon.com/authors/freepik"/>
            <span class="contact-link__text">(319) 400-9903</span>
        </a>
    </p>
    <p class="site__paragraph-text">
        <a class="contact-link" href="https://www.linkedin.com/in/er1cj0hns0n/">
            <img class="linked-in-logo" src="/src/pages/contact-me/images/In-Black-81px-R--colored.png" alt="LinkedIn logo"/>
            <span class="contact-link__text">linkedin.com/in/er1cj0hns0n</span>
        </a>
    </p>
</section>

    <hr class="section-divider"/>

<?php include ROOT_PATH . '/page-components/footer/footer.php' ?>

<?php include ROOT_PATH . '/page-components/javascript-includes/javascript-includes.php'; ?>

<?php include ROOT_PATH . '/page-components/html-bottom/html-bottom.php'; ?>