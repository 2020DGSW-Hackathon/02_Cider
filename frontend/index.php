<?php include_once('./lib/lib.php');?>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/index.css" />
  </head>
  <body>
    <?php if(!isset($_SESSION['userid'])) {
        echo "<a href='page/login.php'><div class='Header'>로그인 및 회원가입</div></a>";
    }
    else{
        echo "<a href='page/logout.php'><div class='Header'>로그아웃</div></a>";
    } ?>
    <ul class="menu">
      <li>
        <a href="index.php"><div class="menu-item" onclick="display(event,'web')">WEB</div><a>
        <div class="menu-item-underline"></div>
      </li>
      <li>
      <a href="page/windows.php"><div class="menu-item" onclick="display(event,'windows')">
          WINDOWS
        </div><a>
      </li>
      <li>
      <a href="page/server.php"><div class="menu-item" onclick="display(event,'server')">
          SERVER
        </div><a>
      </li>
      <li>
      <a href="page/mobile.php"><div class="menu-item" onclick="display(event,'mobile')">
          MOBILE
        </div><a>
      </li>
      <li>
      <a href="page/embedded.php"><div class="menu-item" onclick="display(event,'embedded')">
          EMBEDDED
        </div><a>
      </li>
      <li>
      <a href="page/game.php"><div class="menu-item" onclick="display(event,'game')">GAME</div><a>
      </li>
    </ul>

    <div class="CardList">
      <?php
      $rows = fetchAll("SELECT * FROM question WHERE tag = 'web'");

      foreach ($rows as $row) {
          ?>
          <a href="page/read.php?idx=<?php echo $row->idx ?>">
              <div class="card">
                <span class="line"></span>
                <span class="title"><?= $row->title ?></span>
                <span class="name"><?= $row->username ?></span>
                <span class="category">분야 : <?= $row->tag ?></span>
              </div>
          </a>
          <?php
      }
      ?>
    </div>
  </body>
</html>
