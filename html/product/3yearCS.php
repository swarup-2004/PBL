<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product page </title>
    <link rel="stylesheet" href="../../Css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
</head>

<body>


    <!-- =============================== * navbar * ============================================ -->

    <div class="hedder">
        <div class="navbar">




            <img src="images/logo.png">






            <div class="contry_select" id="contry">
                <div class="select">
                    <p id="text"> Select Your Year </p>
                    <i class="fa-solid fa-chevron-down" id="moving"></i>
                </div>


                <ul class="option_box" id="list">
                    <li class="option" onclick="myfunction('FirstYear')">
                        <p>First Year</p>
                    </li>
                    <li class="option" onclick="myfunction('SecondYear')">
                        <p>Second Year</p>
                    </li>
                    <li class="option" onclick="myfunction('ThirdYear')">
                        <p>Third Year</p>
                    </li>
                    <li class="option" onclick="myfunction('Fourth Year')">
                        <p>Fourth Year</p>
                    </li>
                </ul>
            </div>





            <div class="search_box">
                <input type="text" class="searchclass" id="searchid" placeholder="Find Books, Notes and More....">
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
                        <p> KK Varma </p>
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





    <!-- =============================== * product img * ============================================ -->



    <div class="product_img">


        <div class="image_discription">
            <div class="swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"> <img src="images/3cs.jpg"> </div>
                    <div class="swiper-slide"> <img src="images/3cs2.jpg"></div>
                    <div class="swiper-slide"> <img src="images/3cs3.jpg"></div>
                    <div class="swiper-slide"> <img src="images/pro_4.jpg"></div>

                </div>

                <div class="swiper-pagination"></div>


                <div class="swiper-button-prev" id="prev"></div>
                <div class="swiper-button-next" id="next"></div>
            </div>

            <div class="descriptiopn">
                <h3> Description </h3>
                <p>Third Year Computer Science Department
                    SPOS,Data Science, AI, Web Technology
                </p>
            </div>
        </div>

        <div class="product_details">
            <div class="box">
                <div class="price">
                    <h3> ₹500</h3>
                    <div>
                        <p><i class="fa-solid fa-share-nodes"></i> </p>
                        <p> <i class="fa-regular fa-heart"></i> </p>
                    </div>
                </div>
                <span>Third year CS books </span>
                <div class="location">
                    <p>Harsh Sutar 9359019291</p>
                    <p>Today</p>
                </div>
            </div>

         <div class="box" id="box3">
              <h2> Posted in </h2>
              <p>PICT Dhankawadi, Pune 
                Sahil Warade 9420255917,
                Swarup Pokharkar,
                Harsh Suthar,
                Saurabh Joshi,
                Kaustubh Kulkarni.

              </p>
              <img src="T.jpeg" >
              <img src="pict.jpg">
         </div>



        </div>



    </div>





    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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
        function myfunction(info) {
            text.innerHTML = info;
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





        //  =============================== * product img* ============================================


        const swiper = new Swiper('.swiper', {

            loop: true,


            pagination: {
                el: '.swiper-pagination',
            },


            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });


    </script>

</body>

</html>