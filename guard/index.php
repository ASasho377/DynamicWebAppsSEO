<?php 
    get_header();
?>

  <!-- about section -->

<section class="about_section layout_padding" id="about">
<div class="container">
<div class="row">
<div class="col-md-6 px-0">
<div class="img_container">
<div class="img-box"><img class="alignnone size-full wp-image-56" src="<?php bloginfo('template_directory'); ?>/images/about-img.jpg" alt="" width="699" height="473" /></div>
</div>
</div>
<div class="col-md-6 px-0">
<div class="detail-box">
<div class="heading_container ">
<h2>НАЙ-ДОБРАТА ОХРАНА!</h2>
</div>
Guarder предлага охранителни услуги, <span class="Y2IQFc" lang="bg">които осигуряват първокласна защита за различни фирми и физически лица. Ние предоставяме на клиентите цялостна корпоративна сигурност или услуги за частна сигурност на територията на цялата държава!</span>
<div class="btn-box"><a href="about">
Прочетете повече
</a></div>
</div>
</div>
</div>
</div>
</section>

  <!-- end about section -->

  <!-- service section -->

<section class="service_section layout_padding" id="service">
  <div class="container">
    <div class="heading_container heading_center"><h2>Какво предлагаме</h2></div>
    <div class="row">
      <?php query_posts('showposts=3&cat=6'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 }
      							  ?>
            </div>
          <div class="detail-box">
            <h6><?php the_title(); ?></h6>
            <a href="<?php the_permalink(); ?>" class="text-button">Научете повече</a>
         
          </div>
        </div>
      </div>
      <?php 
            endwhile;
            endif;
            ?>
    </div>
  </div>
</section>

  <!-- end service section -->


 
  <!-- team section -->
  <section class="team_section layout_padding" id="team">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Нашите Охранители
        </h2>
        <p>
        С дългогодишен опит, старание, и отдаденост на работата си, нашите охранители ви предоставят пълна сигурност.
      </div>
      <div class="row">
      <?php query_posts('showposts=3&cat=20'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4">
        <div class="box">
          <div class="img-box">
            <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 }
      							  ?>
            </div>
          <div class="detail-box">
            <h6><?php the_title(); ?></h6>
            <div class="btn-box"><a href="<?php the_permalink(); ?>" class="text-button">Научете повече</a></div>
          </div>
        </div>
      </div>
      <?php 
            endwhile;
            endif;
            ?>
      </div>
    </div>
  </section>
  <!-- end team section -->

  <section class="contact_section layout_padding" id="contactus">
    <div class="container">
      <div class="heading_container heading_center">
        <div class="row">
          <div class="box">
            <div class="img-box">
              <div class="detail-box">
                <div class="btn-box">
                  <a href="?page_id=22" class="text-button button">Свържете се с нас</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php 
    get_footer();
?>


