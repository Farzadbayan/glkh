<?php
require_once('includes/config.php');
$title = "گووولاخ";
include(ROOT_PATH . 'includes/header.php');
?>

<main id="main-content">
  <div class="center">
    <div class="container">
      <section class="posts">
        <article class="article-card">
          <h2><a href="#">بامزه‌ترین کمک چوبی جهان اینطوری کار می‌کند! باورتان می‌شود؟</a></h2>
          <img src="<?php BASE_URL ?>uploads/img1.png" alt="img1">
          <section class="post-meta">
            <div class="vote">
              <div class="vote-submit">
                <div class="vote-up"></div>
                <div class="vote-down"></div>
              </div>
              <div class="vote-count">
                <span>1250</span>
              </div>
            </div>
            <div class="comment-share">
              <div class="comment-btn"></div>
              <div id="share_btn" class="share-btn">
              <div id="share_menu" class="share-menu">
                <span class="facebook"></span>
                <span class="twitter"></span>
              </div></div>
            </div>
          </section>
        </article>
        <article class="article-card">
          <h2><a href="#">چطور خانم‌ها با آقایان فرق دارند</a></h2>
          <img src="<?php BASE_URL ?>uploads/img1.png" alt="img1">
          <section class="post-meta">
            <div class="vote">
              <div class="vote-submit">
                <div class="vote-up"></div>
                <div class="vote-down"></div>
              </div>
              <div class="vote-count">
                <span>1250</span>
              </div>
            </div>
            <div class="comment-share">
              <div class="comment-btn"></div>
              <div class="share-btn"></div>
            </div>
          </section>
        </article>
      </section>
    </div>
    <?php include(ROOT_PATH . 'includes/sidebar.php'); ?>
  </div>
<?php
include(ROOT_PATH . 'includes/footer.php');
?>
