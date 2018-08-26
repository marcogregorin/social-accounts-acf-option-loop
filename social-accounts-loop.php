<ul>
  <?php

  /*
  In order to use this snippet you first need to create Social Network Settings with ACF Option
  @see acf_add_options_page (https://www.advancedcustomfields.com/resources/options-page/)  
  */
            
  // Store ACF fields
  $facebook_link = get_field('facebook','option');
  $twitter_link = get_field('twitter','option');
  $youtube_link = get_field('youtube','option');
  $instagram_link = get_field('instagram','option');
  $linkedin_link = get_field('linkedin','option');
  $vimeo_link = get_field('vimeo','option');
  // ...add more here if need more account

  // Create array with class and link for each social network
  $facebook = array('class'=>'facebook', 'link'=> $facebook_link);
  $twitter = array('class'=>'twitter', 'link'=> $twitter_link);
  $youtube = array('class'=>'youtube', 'link'=> $youtube_link);
  $instagram = array('class'=>'instagram', 'link'=> $instagram_link);
  $linkedin = array('class'=>'linkedin', 'link'=> $linkedin_link);
  $vimeo = array('class'=>'vimeo', 'link'=> $vimeo_link);
  // ...add more here if need more account

  // Add it to the array if field is not empty
  $social_accounts = array();
    if($facebook_link != '') {
      $social_accounts[] = $facebook;
    }
    if($twitter_link != '') {
      $social_accounts[] = $twitter;
    }
    if($youtube_link != '') {
      $social_accounts[] = $youtube;
    }
    if($instagram_link != '') {
      $social_accounts[] = $instagram;
    }
    if($linkedin_link != '') {
      $social_accounts[] = $linkedin;
    }
    if($vimeo_link != '') {
      $social_accounts[] = $vimeo;
    }
    // ...add more here if need more account

  // Run loop through each social accoutn and display
  foreach($social_accounts as $social_account ) { ?>
    <li class="list-inline-item <?php echo $social_account['class']; ?>">
      <a href="<?php echo $social_account['link']; ?>" class="social-link">
        // Using Font Awesome we can use the class name to retrieve the icon name
        <?php echo '<i class="fa fa-'.$social_account['class'].'"></i>' ?>
      </a>
    </li>
  <?php } ?>
</ul>
