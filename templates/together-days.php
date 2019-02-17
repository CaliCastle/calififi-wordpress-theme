<?php
/**
 * Template Name: Together Days
 */

get_header(); ?>

<div id="main" class="main__wrapper">
    <cover
      style="background-image: url('<?php echo get_theme_file_uri( '/assets/images/background.png' ); ?>')"></cover>
    <div class="main__content">
        <div class="heart"
             style="background-image: url('<?php echo get_theme_file_uri( '/assets/images/hands.jpg' ); ?>')">
        </div>
        <div class="names">
            <h1>Cali</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                <path
                  style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#fff;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal"
                  d="M 25.96875 3 A 1.0001 1.0001 0 0 0 25.804688 3.0195312 L 23.304688 3.5195312 A 1.0001 1.0001 0 0 0 23.138672 5.4472656 L 20.390625 8.1953125 C 19.97414 8.0804768 19.54479 8 19.091797 8 C 16.500797 8 15 10.25 15 10.25 C 15 10.25 13.499203 8 10.908203 8 C 8.1972031 8 6 10.196203 6 12.908203 C 6 15.263732 7.3710643 17.562003 9.0566406 19.529297 L 7.5859375 21 L 6 21 A 1.0001 1.0001 0 0 0 4.9863281 22 A 1.0001 1.0001 0 0 0 3.9863281 23 A 1.0001 1.0001 0 1 0 4 25 L 5 25 L 5 26 A 1.0001 1.0001 0 1 0 7 26.013672 A 1.0001 1.0001 0 0 0 8 25.013672 A 1.0001 1.0001 0 0 0 9 24 L 9 22.414062 L 11.707031 19.707031 A 1.0001 1.0001 0 0 0 11.775391 19.634766 A 1.0001 1.0001 0 0 0 11.78125 19.626953 L 16.115234 15.292969 C 16.506234 14.901969 17.138297 14.901969 17.529297 15.292969 C 17.920297 15.683969 17.920297 16.316031 17.529297 16.707031 L 11.875 22.361328 C 12.71 23.097328 13.491656 23.722266 14.097656 24.197266 C 14.097656 24.197266 14.495 24.5 15 24.5 C 15.505 24.5 15.902344 24.197266 15.902344 24.197266 C 18.433344 22.212266 24 17.663203 24 12.908203 C 24 11.402458 23.308925 10.072228 22.242188 9.171875 L 24.552734 6.8613281 A 1.0001 1.0001 0 0 0 26.480469 6.6953125 L 26.980469 4.1953125 A 1.0001 1.0001 0 0 0 25.96875 3 z"></path>
            </svg>
            <h1>Fifi</h1>
        </div>
        <div class="counter">
            <span>We have been perfect for each other together for</span><br>
            <span><span class="number">{{ count.days }}</span> days, <span class="number">{{ count.hours }}</span> hours, <span
                  class="number">{{ count.minutes }}</span> minutes and <span class="number">{{ count.seconds }}</span> seconds.</span>
        </div>
    </div>
</div>

<svg viewBox="0 0 30 30" height="0" width="0" id="heart">
    <defs>
        <clipPath id="heart-clipper" clipPathUnits="objectBoundingBox">
            <path
              d='M.50,.90 L.20,.60 A.15,.15 0 0,1 .50,.30 A.15,.15 0 0,1 .80,.60 z'></path>
        </clipPath>
    </defs>
</svg>

<?php get_footer(); ?>
