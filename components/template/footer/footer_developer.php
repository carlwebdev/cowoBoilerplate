  <?php /*?><?php */?><?php // echo $website_developer ?>
  
  <div class="footer_developer">
    <span>Developed by</span>
    <a href="<?php echo htmlspecialchars((isset($footer_developer_url) && $footer_developer_url !== '') ? $footer_developer_url : 'https://cowowo.cat', ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">
      <img src="<?php echo htmlspecialchars((isset($footer_developer_logo) && $footer_developer_logo !== '') ? $footer_developer_logo : 'assets/img/logos/logo_cowowo.png', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars((isset($footer_developer_name) && $footer_developer_name !== '') ? $footer_developer_name : 'Developer', ENT_QUOTES, 'UTF-8'); ?>">
    </a>
  </div> <!-- /footer_developer -->
  