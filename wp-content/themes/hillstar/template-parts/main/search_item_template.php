<div class="h-column h-column-container d-flex h-col-lg-12 h-col-md-12 h-col-12  masonry-item style-142-outer style-local-25-m4-outer">
  <div data-colibri-id="25-m4" class="d-flex h-flex-basis h-column__inner h-px-lg-0 h-px-md-0 h-px-0 v-inner-lg-2 v-inner-md-2 v-inner-2 style-142 style-local-25-m4 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <?php hillstar_layout_wrapper(array (
        'name' => 'categories_container',
        'slug' => 'categories-container-2',
      )); ?>
      <div data-colibri-id="25-m8" class="h-blog-title style-146 style-local-25-m8 position-relative h-element">
        <div class="h-global-transition-all">
          <?php hillstar_post_title(array (
            'heading_type' => 'h4',
            'classes' => 'colibri-word-wrap',
          )); ?>
        </div>
      </div>
      <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
      <div data-colibri-id="25-m9" class="h-blog-meta style-147 style-local-25-m9 position-relative h-element">
        <div name="1" class="metadata-item">
          <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>">
            <span class="h-svg-icon">
              <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="user" viewBox="0 0 512 545.5">
                <path d="M240 112c61.666 0 112 50.334 112 112 0 38.54-19.698 72.834-49.5 93 57.074 24.477 97.5 81.1 97.5 147h-32c0-70.89-57.11-128-128-128s-128 57.11-128 128H80c0-65.9 40.426-122.522 97.5-147-29.802-20.166-49.5-54.46-49.5-93 0-61.666 50.334-112 112-112zm0 32c-44.372 0-80 35.628-80 80s35.628 80 80 80 80-35.628 80-80-35.628-80-80-80z"></path>
              </svg>
            </span>
            <?php echo esc_html(get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) )); ?>
          </a>
          <span class="meta-separator">
            <?php esc_html_e('-','hillstar'); ?>
          </span>
        </div>
        <div name="2" class="metadata-item">
          <a href="<?php hillstar_post_meta_date_url(); ?>">
            <span class="h-svg-icon">
              <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="calendar" viewBox="0 0 512 545.5">
                <path d="M144 96h32v16h160V96h32v16h64v352H80V112h64V96zm-32 48v32h288v-32h-32v16h-32v-16H176v16h-32v-16h-32zm0 64v224h288V208H112zm96 32h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32zm-192 64h32v32h-32v-32zm64 0h32v32h-32v-32zm64 0h32v32h-32v-32z"></path>
              </svg>
            </span>
            <?php hillstar_the_date('F j, Y'); ?>
          </a>
        </div>
      </div>
      <?php endif; ?>
      <div data-colibri-id="25-m10" class="style-148 style-local-25-m10 position-relative h-element">
        <div class="h-global-transition-all">
          <?php hillstar_post_excerpt(array (
            'max_length' => '',
          )); ?>
        </div>
      </div>
      <div data-colibri-id="25-m11" class="h-x-container style-149 style-local-25-m11 position-relative h-element">
        <div class="h-x-container-inner style-dynamic-25-m11-group">
          <span class="h-button__outer style-150-outer style-local-25-m12-outer d-inline-flex h-element">
            <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="25-m12" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-150 style-local-25-m12 position-relative">
              <span>
                <?php esc_html_e('read more','hillstar'); ?>
              </span>
              <span class="h-svg-icon h-button__icon style-150-icon style-local-25-m12-icon">
                <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="angle-right" viewBox="0 0 512 545.5">
                  <path d="M207.5 100.5l176 176 11 11.5-11 11.5-176 176-23-23L349 288 184.5 123.5z"></path>
                </svg>
              </span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
