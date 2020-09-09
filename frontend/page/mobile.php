<?php include_once('../lib/lib.php');?>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/css/index.css" />
  </head>
  <body>
    <?php if(!isset($_SESSION['userid'])) {
        echo "<a href='login.php'><div class='Header'>로그인 및 회원가입</div></a>";
    }
    else{
        echo "<a href='logout.php'><div class='Header'>로그아웃</div></a>";
    } ?>
    <ul class="menu">
      <li>
        <a href="../index.php"><div class="menu-item" onclick="display(event,'web')">WEB</div><a>
      </li>
      <li>
      <a href="window.php"><div class="menu-item" onclick="display(event,'windows')">
          WINDOWS
        </div><a>
      </li>
      <li>
      <a href="server.php"><div class="menu-item" onclick="display(event,'server')">
          SERVER
        </div><a>
      </li>
      <li>
      <a href="mobile.php"><div class="menu-item" onclick="display(event,'mobile')">
          MOBILE
        </div><a>
        <div class="menu-item-underline"></div>

      </li>
      <li>
      <a href="embedded.php"><div class="menu-item" onclick="display(event,'embedded')">
          EMBEDDED
        </div><a>
      </li>
      <li>
      <a href="game.php"><div class="menu-item" onclick="display(event,'game')">GAME</div><a>
      </li>
    </ul>

    <div class="CardList">
      <?php
      $rows = fetchAll("SELECT * FROM question WHERE tag = 'mobile'");

      foreach ($rows as $row) {
          ?>
          <a href="./read.php?idx=<?php echo $row->idx ?>">
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
