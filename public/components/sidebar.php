<aside>
<?php switch ($lang) {
    case "en":
        ?>
<section class="stats">
  <?php require 'components/frab-stats.php';?>
  <a href="/rueckblick/<?php echo $lang; ?>" class="button">That was the Conference 2018</a>
</section>

<section class="switch news active">

  <article>
    <h3 class="bold">Buchvorstellung <em>"Was Bits & Bäume verbindet"</em></h3>

    <p>Am <u>03. Juli</u> stellen wir unser successfully crowdfunded Buch vor. Du bist herzlich eingeladen, um <u>15:00</u> in der Messehalle dabei zu sein.</p>
  </article>

</section>

<section class="switch twitter">
    <?php require 'components/twitter.php';?>

</section>

<div class="control">
    <div class="news active">
        <div class="icon"></div>
        <p>News</p>
    </div>
    <div class="twitter">
        <div class="icon"></div>
        <p>#bitsundbäume</p>
    </div>
</div>
        <?php
break;
    default:
        ?>
<section class="stats">
  <?php require 'components/frab-stats.php';?>
  <a href="/rueckblick/<?php echo $lang; ?>" class="button">Das war die Konferenz 2018</a>
</section>

<section class="switch news active">

  <article>
    <h3 class="bold">Buchvorstellung <em>"Was Bits & Bäume verbindet"</em></h3>

    <p>Am <u>03. Juli</u> stellen wir unser successfully crowdfunded Buch vor. Du bist herzlich eingeladen, um <u>15:00</u> in der Messehalle dabei zu sein.</p>
  </article>

</section>

<section class="switch twitter">
    <?php require 'components/twitter.php';?>

</section>

<div class="control">
    <div class="news active">
        <div class="icon"></div>
        <p>News</p>
    </div>
    <div class="twitter">
        <div class="icon"></div>
        <p>#bitsundbäume</p>
    </div>
</div>
    <?php }?>

</aside>

<script>
$news = $('section.news');
$twitter = $('section.twitter');
$newsBtn = $('.control .news');
$twitterBtn = $('.control .twitter');

function showTwitter () {
  $twitterBtn.addClass('active');
  $twitter.addClass('active');
  $newsBtn.removeClass('active');
  $news.removeClass('active');
}

function showNews () {
  $newsBtn.addClass('active');
  $news.addClass('active');
  $twitterBtn.removeClass('active');
  $twitter.removeClass('active');
}

$twitterBtn.click(function () {
    showTwitter();
});

$newsBtn.click(function () {
    showNews();
});

$portraits = $('.portrait');

function switchSidebar() {
  if ( $news.hasClass('active') )
    showTwitter();
  else
    showNews();
}

var index = 0;
// setInterval(function () {
//     switchSidebar();
// }, 10000)
</script>
