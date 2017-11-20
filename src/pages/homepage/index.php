<?php define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/src/'); ?>

<?php include ROOT_PATH . 'page-components/html-head/html-head.php'; ?>

<div class="homepage-background"></div>
<div class="homepage-background-helper"></div>
<div class="easter-egg">
</div>
<div class="easter-egg__video-container">
    <div id="easter-egg__video" class="easter-egg__video"></div>
    <div class="easter-egg__close">&#10005;</div>
</div>
<img class="easter-egg__appendage" src="/src/pages/homepage/images/clean-foot.png"/>
<div class="homepage-container">
    <div class="homepage-scaling-container">
        <section class="homepage-banner">
            <h1 class="homepage-banner__heading">Eric Johnson</h1>
            <div class="homepage-banner__subheading">Web Developer, UX Guy, <br/> Llama Enthusiast</div>
        </section>

        <?php include ROOT_PATH . 'page-components/menu/menu.html'; ?>
    </div>
</div>

<?php include ROOT_PATH . 'page-components/footer/footer.php'; ?>

<div class="photo-focus">
    <button class="photo-focus__button -focus -active">focus photo</button>
    <button class="photo-focus__button -blur">blur photo</button>
</div>

<?php include ROOT_PATH . 'page-components/javascript-includes/javascript-includes.php'; ?>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="/src/pages/homepage/js/homepage.js"></script>

<?php include ROOT_PATH . 'page-components/html-bottom/html-bottom.php'; ?>
