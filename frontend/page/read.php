<?php include_once('../lib/lib.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../assets/css/content.css" />
    </head>
    <body>
        <div class="wrap">
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
                    <div>관심 분야 : WEB</div>
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
        <?php 
        $idx = $_GET['idx'] ?? null;

        $sql = "SELECT * FROM question WHERE idx = '{$idx}'";
        $row = fetch($sql);
        ?>
        <div class="content">
            <div class="question">
                <div class="profile">
                    <img
                        class="profile_picture"
                        src="https://www.macmillandictionary.com/us/external/slideshow/full/Grey_full.png"
                        alt="프로필 사진"
                    />
                    <div class="name"><?= $_SESSION['username'] ?></div>
                    <div class="students_id"><?= $row->grade ?>학년 <?= $row->class ?>반 <?= $row->number ?>번</div>
                    <div class="metoo_content">
                        <div class="metoo">나도 궁금해요!</div>
                        </div>
                </div>
                <div class="title">
                    <div class="title_name"><?= $row->title ?></div>
                    <div class="write_date">작성일-2020-09-09</div>
                </div>
                <div class="question_write"><?= $row->contents ?></div>
                <div class="icon">
                <?= $row->tag ?>
                </div>
                <?php if(isset($_SESSION['userid']) == $row->username) {
                    echo "<a href='./update.php?idx=<?php echo $row->idx?>'> <button> 수정 </button></a>
                    <a href='#!' onclick='delread(<?=$idx?>); return false;'> <button> 삭제 </button></a>
                    <a href='./list.php'> <button> 목록 </button></a>";
                }
                else{
                    echo "<button>추천</button> <button>답변</button>";
                } ?>
                
            </div>
            <ul class="answer">
                <li>
                    <div class="profile">
                        <img
                            class="profile_picture"
                            src="https://www.macmillandictionary.com/us/external/slideshow/full/Grey_full.png"
                            alt="프로필 사진"
                        />
                        <div class="name">박세헌 강사님</div>
                        <div class="students_id">2학년 1반 16번</div>
                    </div>
                    <div class="write_date">작성일-2020-09-09</div>
                    <div class="answer_write">답변</div>
                </li>
            </ul>
        </div>
        </div>
    </body>
</html>
