<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../Css/index.css">
    <title>studyswap</title>
</head>

<body>


    <!-- =============================== * navbar * ============================================ -->
    <div class="hedder">
        <div class="navbar">




            <img src="../images/logo.png">






            <div class="contry_select" id="contry">
                <div class="select">
                    <p id="text"> Select Your Year </p>
                    <i class="fa-solid fa-chevron-down" id="moving"></i>
                </div>


                <ul class="option_box" id="list">
                    <li class="option" onclick="myfunction('FirstYear')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>First Year</p>
                    </li>
                    <li class="option" onclick="myfunction('SecondYear')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Second Year</p>
                    </li>
                    <li class="option" onclick="myfunction('ThirdYear')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Third Year</p>
                    </li>
                    <li class="option" onclick="myfunction('FourthYear')">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Fourth Year</p>
                    </li>

                </ul>
            </div>





            <div class="search_box">
                <input type="text" class="searchclass" id="searchid" placeholder="Find Books, notes and More....">
                <p> <i class="fa-solid fa-magnifying-glass"></i> </p>
            </div>




            <div class="language">
                <p id="eng_tag"> English </p>

                <ul class="hin_eng">
                    <li onclick="languageolx('English')"> English </li>
                    <li onclick="languageolx('हिन्दी')">हिन्दी</li>
                </ul>

            </div>




            <div class="messeage">
                <i class="fa-regular fa-comment"></i>
            </div>




            <div class="messeage">
                <i class="fa-regular fa-bell"></i>
            </div>





            <div class="your_logo">
                <div class="girl_img" id="girl_img_id">
                    <img src="images/pic3.jpg">
                </div>

                <div class="dropdwon" id="gropdwonid">
                    <div class="nameandimg">
                        <img src="images/pic3.jpg">
                        <p> KK Verma </p>
                    </div>

                    <ul>
                        <li>
                            <i class="fa-regular fa-user"></i>
                            <p>My Account</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-box"></i>
                            <p>My Orders</p>
                        </li>
                        <hr>
                        <li>
                            <i class="fa-regular fa-circle-question"></i>
                            <p>Help</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-gear"></i>
                            <p>Setting</p>
                        </li>
                        <hr>

                        <li>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Log Out</p>
                        </li>

                    </ul>
                </div>
            </div>





            <div class="selling_page">
                <button> <i class="fa-solid fa-plus"></i>
                    <p>SELL</p>
                </button>
            </div>


        </div>
    </div>




    <!-- =============================== * product * ============================================ -->

    
    <div class="product">
        <div class="First_row">
            <!--Graphics Kit-->
            <div class="box">
                <a href="product/GraphicsKIt.php">
                    <img src="../images/EGp.jpg">
                    <h2>₹500</h2>
                    <p>Graphics Kit</p>
                    <div class="addres_data">
                        <p>1234567890</p>
                        <p>Today</p>
                    </div>
                </a>
            </div>
            <!--WorkShop Kit-->
            <div class="box">
                <a href="product/ws.php">
                    <img src="../images/wsimage.jpg" height = 150>
                    <h2>₹300</h2>
                    <p>Workshop Kit</p>
                    <div class="addres_data">
                        <p>1234567890</p>
                        <p>Today</p>
                    </div>
                </a>
            </div>
            <div class="box">
                <img src="../images/fBooks.jpeg" height = 150>
                <h2> ₹700</h2>
                <p>First Year Books</p>
                <div class="addres_data">
                    <p>2345XXXXXXX</p>
                    <p> Today </p>
                </div>
            </div>
            <div class="box">
                <img src="../images/fNotes.jpeg" height = 150>
                <h2> ₹100</h2>
                <p>First Year Notes</p>
                <div class="addres_data">
                    <p>jj@gmail.com</p>
                    <p> Today </p>
                </div>
            </div>
        </div>



        <div class="First_row">
            <div class="box">
                <img src="../images/secondBooks.jpeg" height = 150>
                <h2> ₹800 </h2>
                <p> Second Year Books</p>
                <div class="addres_data">
                    <p>1234567890</p>
                    <p> DEC 24 </p>
                </div>
            </div>
            <div class="box">
                <a href="product/3D.php">
                    <img src="../images/3dp.jpg" height="150">
                    <h2>₹3000</h2>
                    <p>3D Printing Kit</p>
                    <div class="addres_data">
                        <p>1234567890</p>
                        <p>Today</p>
                    </div>
                </a>
            </div>
            <div class="box">
                <a href="product/3yearCS.php">
                    <img src="../images/thirdBooks.jpeg" height="150">
                    <h2>₹800</h2>
                    <p>Third Year Books</p>
                    <div class="addres_data">
                        <p>1234567890</p>
                        <p>Today</p>
                    </div>
                </a>
            </div>
            <div class="box">
                <img src="../images/images/product-8.jpg">
                <h2> ₹900 </h2>
                <p> Fourth Year Books </p>
                <div class="addres_data">
                    <p>1345267890</p>
                    <p> FEB 02 </p>
                </div>
            </div>
        </div>


    <!-- =============================== * footer * ============================================ -->



    <div class="Main_footer">
        <div class="footer">
            <div class="footer_box">
                <h2>POPULAR COLLEGES</h2>
                <p>PICT</p>
                <p>SCOE</p>
                <p>ACOE</p>
                <p>AISSM College</p>
            </div>
            <div class="footer_box">
                <h2>TRENDING LOCATIONS</h2>
                <p>Pune</p>
                <p>Nashik</p>
                <p>Ahmednagar</p>
                <p>Sangamner</p>
            </div>
            <div class="footer_box">
                <h2>ABOUT US</h2>
                <p>About StudySwap</p>
                <p>Careers</p>
                <p>Contact Us</p>
                <p>StudySwap People</p>
            </div>
            <div class="footer_box">
                <h2>StudySwap</h2>
                <p> Help</p>
                <p>Legal & Privacy information</p>
                <p>Blog</p>
            </div>
        </div>
    </div>

        

    <script>

        //  =============================== * navbar * ============================================

        let contry = document.getElementById('contry');
        let moving = document.getElementById('moving');
        let text = document.getElementById('text');
        let list = document.getElementById('list');


        contry.addEventListener('click', () => {
            list.classList.toggle('hidden');
            moving.classList.toggle('roted')
        });
        function myfunction(omkar) {
            text.innerHTML = omkar;
        }


        let eng_tag = document.getElementById('eng_tag');
        let hin_eng = document.querySelector('.hin_eng');
        let language = document.querySelector('.language');


        language.addEventListener('click', () => {
            hin_eng.classList.toggle('display_div');
        });
        function languageolx(anyone) {
            eng_tag.innerHTML = anyone;
        }

        let girl_img_id = document.getElementById('girl_img_id');
        let gropdwonid = document.getElementById('gropdwonid');

        girl_img_id.addEventListener('click', () => {
            gropdwonid.classList.toggle('block_div')
        });


    </script>

</body>

</html>