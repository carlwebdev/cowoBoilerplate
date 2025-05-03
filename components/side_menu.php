<?php 
/*
 * cowo-Boilerplate
 * Built by cowowo.cat
 * Project: 
 * Component: Side menu (mmenu jquery plugin)
 * Filename: side_menu.php
 */
?>
<nav id="menu">
  <ul>
    <li><a href="index.php"><?=$pagename_index ?></a></li>
    <li><a href="about-us.php"><?=$pagename_about ?></a></li>
    <li><a href="contact.php"><?=$pagename_contact ?></a></li>
    <li><a href="#secondary">Secondary</a>
      <ul>
        <li><a href="cookies.php"><?=$pagename_cookies ?></a></li>
        <li><a href="404.php"><?=$pagename_404 ?></a></li>
      </ul>
    </li>    
    <li><a href="#dev">Dev</a> <!-- MOVE TO THE DEV FOLDER !!!! -->
      <ul>
        <li><a href="styleguide.php">Styleguide</a></li>
        <li><a href="snippets.php">Snippets</a></li>
        <li><a href="grid.php" target="_blank">Grid</a></li>
        <li><a href="megatron.php">Megatron</a></li>
      </ul>
    </li>
  </ul>
</nav>