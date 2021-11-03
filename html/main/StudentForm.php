<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/studentForm.css">
    <title>studentForm</title>
</head>
<body>

    <?php
        include("leftbar.php")
    ?>

    <section class="home_section">
        <nav>
            <?php
                include("heading.php")
            ?>
        </nav>
        

        <form action="" method="get" class="container">
            <h2>Thông tin học sinh</h2>
            <div>
                <label class="student name">Họ và tên:</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label class="student gender">Giới tính:</label>
                <label class="radio-btn">
                    <input type="radio" id="male" name="gioitinh" class="radio-input">
                    <div class="radio_radio"></div>
                    <span class="gender">Nam</span>
                </label>

                <label class="radio-btn">
                    <input type="radio" id="female" name="gioitinh" class="radio-input">
                    <div class="radio_radio"></div>
                    <span class="gender">Nữ</span>
                </label>
            </div>
            
            <div>
                <label class="student dob">Ngày sinh:</label>
                <input type="date" name="dob" id="dob">
            </div>

            <div>
                <label class="student father">Họ và tên bố:</label>
                <input type="text" name="nationality" id="nationality">
            </div>

            <div>
                <label class="student mother">Họ và tên mẹ:</label>
                <input type="text" name="nationality" id="nationality">
            </div>

            <div>
                <label class="student nationality">Quốc tịch:</label>
                <input type="text" name="nationality" id="nationality">
            </div>

            <div>
                <label class="student email">Email:</label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label class="student grade">Khối:</label>
                <input type="text" name="grade" id="grade">
            </div>
            
            <div>
                <label class="student class">Lớp:</label>
                <input type="text" name="class" id="class">
            </div>

            <div>
                <label class="student phonenumber">Số điện thoại:</label>
                <input type="text" name="phonenumber" id="phonenumber">
            </div>

            <div>
                <label class="student Btn">&nbsp</label>
                <input type="button" onclick="javascript:Accept();" value="Chấp nhận">
                <input type="button" onclick="javascript:Deny();" value="Bỏ qua">
            </div>
        </form>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let sidebar = document.querySelector('.navbar')
        let sidebarBtn = document.querySelector('.menu')
        $(document).ready(function () {
            $(sidebarBtn).click(function () { 
                $(sidebar).toggleClass("active");
            });

            $(".subject").click(function () { 
                $('nav ul .sub_item').toggleClass("show");
                $('nav ul .first').toggleClass("rotate")
                console.log('a')
            });

            $(".teacher").click(function () { 
                $('nav ul .teacher_item').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate")
                console.log('a')
            });

            $(".student").click(function () { 
                $('nav ul .student_item').toggleClass("show2");
                $('nav ul .third').toggleClass("rotate")
                console.log('a')
            });

        });

   </script>
</body>
</html>