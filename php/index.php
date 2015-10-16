<?php 
    
  $nav = array("Home", "Browse", "Map", "About",  "Shop", "Contact");
  
  $page = isset($_GET["page"]) ? $_GET['page'] : 'home';
  
?>
<html>
  <head>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <style type="text/css">
      body {
        background: white;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 0px;
        margin-left: 0px;
        font-family: Helvetica;
      }
      .homelogo {
        margin: 5px;
        width: 125px;
      }
      a.nav:link, a.nav:active, a.nav:visited {
        color: white;
        font-weight: bold;
        text-decoration: none;
        font-size: 14pt;
      } 
      a.nav:hover {
        color: #121212;
      }
      .content {
       
      }
      .homesearch input {
        background-color: #DEDEDE;
        border: solid 2px #000000;
        font-size: 24pt;
        color: #000000;
        border-radius: 5px;
        -moz-border-radius: 5px;
      }
      .homesearch input[type=text] {
        background-color: #FFFFFF;
        width: 400px;
      }
      .homesearch input[type=submit]:hover {
        background-color: #9cc993;
      }
      #map {
        width: 1100px;
        height: 900px;
        margin: auto;
      }
    </style>
    <title>To The Trees | Home </title>
  </head>
  <body>

    <table width=100% cellpadding=0 cellspacing=0>
      <tr height="100px">
        <td bgcolor=#2db613 valign="bottom" align="center"> 
          <?php 
            $halfnav = count($nav) / 2;
            for ($i = 0; $i < $halfnav; $i++) {
              echo "<a class='nav' href='?page=" . strtolower($nav[$i]) . "'>" . $nav[$i] . "</a>  &nbsp;&nbsp;&nbsp;&nbsp; ";
            }
          ?>  
            <a href="?page=home"><img class="homelogo" src="img/logo_sm.png" /></a>
          <?php 
            if (count($nav) % 2 != 0) { $halfnav++; }
            for ($i = $halfnav; $i < count($nav); $i++) {
              echo " &nbsp;&nbsp;&nbsp;&nbsp; <a class='nav' href='?page=" . strtolower($nav[$i]) . "'>" . $nav[$i] . "</a>";
            }
          ?> 
        </td>
      </tr>
      <?php if ($page == "home") { ?>
      <tr height="300">
        <td bgcolor=#121212>
          <center>
            <h1 style="color: #FFFFFF;">What kind of adventure are you looking for?</h2>
            <form class="homesearch">
              <input type="text" name="search" /> <input type="submit" value="Search" />
            </form>
          </center>
        </td>
      </tr>
      <?php } ?>
      <tr height=50%>
        <td>
          <br />

          <table width=80% align="center">
            <tr>
              <td>
                <div class="content">
                  
                  <?php if ($page != "home") { include($page . ".php"); } else { ?>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                    <p>Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, id fringilla sem nunc vel mi. Nam dictum, odio nec pretium volutpat, arcu ante placerat erat, non tristique elit urna et turpis. Quisque mi metus, ornare sit amet fermentum et, tincidunt et orci. Fusce eget orci a orci congue vestibulum. Ut dolor diam, elementum et vestibulum eu, porttitor vel elit. Curabitur venenatis pulvinar tellus gravida ornare. Sed et erat faucibus nunc euismod ultricies ut id justo. Nullam cursus suscipit nisi, et ultrices justo sodales nec. Fusce venenatis facilisis lectus ac semper. Aliquam at massa ipsum. Quisque bibendum purus convallis nulla ultrices ultricies. Nullam aliquam, mi eu aliquam tincidunt, purus velit laoreet tortor, viverra pretium nisi quam vitae mi. Fusce vel volutpat elit. Nam sagittis nisi dui.</p>

                    <?php } ?>

                  </div>
                </td>
              </tr>
            </table>

          <br />
        </td>
      </tr>
      <tr height="75">
        <td bgcolor=#121212 align="center">
          <?php foreach ($nav as $i) { echo "<a style='color: white; text-decoration: none;' href='?page=" . strtolower($i) . "'>" . $i . "</a> &nbsp;&nbsp;"; } ?>
        </td>
      </tr>
    </table>
  
  </body>
</html>
