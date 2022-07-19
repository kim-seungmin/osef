<?php 
    session_start();
    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7395e48b31.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>억새풀</title>
</head>

<body>
    <!-- navbar -->
    <nav id="navbar">
        <div class="navbar_logo">
            <i class="fas fa-seedling"></i>
            <a href="index.php">억새풀</a>
        </div>
        <ul class="navbar_list">
            <li><a href="rent.html">임대신청</a></li>
            <li>자료실</li>
            <li><a href="introduce.html">회사소개</a></li>
            <li><a href="lend.html">기계등록</a></li>
        </ul>
        <ul class="navbar_list_login">
            <li><a href="mypage.php">마이페이지</a></li>
            <?php
            if(!isset($_SESSION['id'])) {
                echo '<li><a href="login.php">로그인</a></li>';
            }else{
                echo '<li><a href="logout.php">로그아웃</a></li>';
            }
            ?>
            <li><a href="signup.php">회원가입</a></li>
        </ul>
        <button class="navbar_toggle_btn">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    <!-- section main img -->
    <section id="main">
        <div class="main_img">
            <a href="https://www.freepik.com/photos/paddy-field" class="contact_title">Paddy field photo created by
                wirestock - www.freepik.com</a>
        </div>
    </section>

    <!-- section item -->
    <section id="machine" class="section">
        <div class="section_container">
            <h2>임대 신청</h2><br>
            <hr>
            <div class="machine_list">
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/d3da6c6016/img_index_01.jpg"
                        class="machine_list_item_img">
                    <h2>트렉터</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/360101ce76/img_index_52.jpg"
                        class="machine_list_item_img">
                    <h2>트렉터 부속기</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/a7a8f9241c/img_index_08.jpg"
                        class="machine_list_item_img">
                    <h2>존디어</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/3f924afbef/img_index_18.jpg"
                        class="machine_list_item_img">
                    <h2>존디어 부속기</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/6e1eb89142/img_index_19.jpg"
                        class="machine_list_item_img">
                    <h2>콤바인</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/d6e76e72da/img_index_27.jpg"
                        class="machine_list_item_img">
                    <h2>이양기</h2>
                    <p>등록 장비 : 0</p>
                </div>
                <div class="machine_list_item" onclick="location.href='#';">
                    <img src="https://www.yanmar.com/ltc/kr/agri/img/53d8c1c3a7/img_index_29.jpg"
                        class="machine_list_item_img">
                    <h2>기타</h2>
                    <p>등록 장비 : 0</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer id="footer">
        <div class="footer_logo">
            <div class="navbar_logo">
                <i class="fas fa-seedling"></i>
                <a href="index.php">억새풀</a>
            </div>
        </div>
        <div class="footer_text">
            <p class="footer_text_p">36729 경상북도 안동시 경동로 1375 (송천동) 국립안동대학교 공대1호관 413호 NGN연구실</p>
            <p class="footer_text_p">TEL : 010-9548-1369 / E-MAIL : w1683111@naver.com</p>
            <p class="footer_text_p">COPYRIGHT (C)2022 억새풀. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>
</body>

</html>