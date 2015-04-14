<? 
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
        <li><a href="dev/styleguide.php">Styleguide</a></li>
        <li><a href="http://carlwebdev.github.io/cowo-Grid/" target="_blank">Grid</a></li>
      </ul>
    </li>
     
    <? /*
    <li><a href="#dev">Dev</a>
      <ul>
        <li><a href="#dev/history">History</a></li>
        <li><a href="#dev/team">The team</a>
          <ul>
            <li><a href="#dev/team/management">Management</a></li>
            <li><a href="#dev/team/sales">Sales</a></li>
            <li><a href="#about/team/development">Development</a></li>
          </ul>
        </li>
        <li><a href="#about/address">Our address</a></li>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
    */ ?>
  </ul>
</nav>