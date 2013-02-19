    <div id="pp-demo" >
      <a href="../../../index.php">&laquo Back to Sitemap</a> | Demo Role: <?php echo $role_name; ?>
    </div>
    <header id="pp-hd">
      <div class="pp-top-nav">
        <div class="pp-header-left">
          <div class="logo">
              <a href="/">
                  <img src="../../../images/origin/pinpointhealth_logo.png" alt="Home Page" border="0" />
              </a>
          </div>
          <ul>
            <?php echo $nav_topline; ?>
          </ul>
        </div>
        <div class="pp-header-right">
          <div class="userMenu">
            <div class="user">
            <?php echo $user_dept; ?>
            <br />
            <?php echo $user_name; ?>
            -
            <?php echo $user_title; ?>
            </div>
            <div class="settings">
            <a href="/"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <?php echo $subnav; ?>
      </div>
    </header>