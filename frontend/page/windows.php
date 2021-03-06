<?php include_once('../lib/lib.php');?>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/css/index.css" />
    <link rel="stylesheet" href="../assets/css/content.css" />

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
      <a href="windows.php"><div class="menu-item" onclick="display(event,'windows')">
          WINDOWS
        </div><a>
        <div class="menu-item-underline"></div>

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

    <div class="left_contents">
    <div class="profile_box">
        <img
            class="profile_picture"
            src="https://www.macmillandictionary.com/us/external/slideshow/full/Grey_full.png"
            alt="프로필 사진"
        />
        <span class="student_name_number_wrap">
            <span class="student_name"><?= $_SESSION['username'] ?></span>
            <span class="student_number"><?= $_SESSION['userinfo']['grade']?>학년 <?= $_SESSION['userinfo']['class']?>반 <?= $_SESSION['userinfo']['number']?>번</span>
        </span>
        <div class="student_info">
            <div>대구소프트웨어 고등학교 재학생</div>
            <div>관심 분야 : WEB </div>
        </div>
    </div>
    <div class="profile_box grade_div">
                <h1>학년별 질문 보기</h1>
                <div>
                    <input type="checkbox" value="1" class="grade" />1학년
                </div>
                <div>
                    <input type="checkbox" value="2" class="grade" />2학년
                </div>
                <div>
                    <input type="checkbox" value="3" class="grade" />3학년
                </div>
            </div>
</div>

    <div class="CardList">
      <?php
      $rows = fetchAll("SELECT * FROM question WHERE tag = 'window'");

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
