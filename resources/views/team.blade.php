<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>فريق العمل</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      color: #000;
      font-family: 'Nunito', sans-serif;
    }

    .testimonial {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-bottom: 5rem;
    }

    h1 {
      margin: 20px 0;
    }

    .line {
      height: 2px;
      width: 6rem;
      background-color: #e26c4f;
      margin-bottom: calc(3rem + 2vmin);
    }

    .arrow-wrapper {
      position: relative;
      width: 70%;
      border-radius: 2rem;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      overflow: hidden;
      place-items: center;
    }

    .review-wrap {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-top: calc(2rem + 1vmin);
      width: 100%;
    }

    #imgBox {
      border-radius: 50%;
      width: calc(6rem + 4vmin);
      height: calc(6rem + 4vmin);
      position: relative;
      box-shadow: 5px -3px #e26c4f;
      background-size: cover;
      margin-bottom: calc(0.7rem + 0.5vmin);
    }

    #name {
      margin-bottom: calc(0.7rem + 0.5vmin);
      font-size: calc(1rem + 0.5vmin);
      letter-spacing: calc(0.1rem + 0.1vmin);
      font-weight: bold;
    }

    #profession {
      font-size: calc(0.8rem + 0.3vmin);
      margin-bottom: calc(0.7rem + 0.5vmin);
      color: #e26c4f;
    }

    #description {
      font-size: calc(0.8rem + 0.3vmin);
      width: 70%;
      max-width: 40rem;
      text-align: center;
      margin-bottom: calc(1.4rem + 1vmin);
      color: rgb(92, 92, 92);
      line-height: 2rem;
    }

    .arrow {
      width: calc(1.4rem + 0.6vmin);
      height: calc(1.4rem + 0.6vmin);
      border: solid #e26c4f;
      border-width: 0 calc(0.5rem + 0.2vmin) calc(0.5rem + 0.2vmin) 0;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .arrow:hover {
      transition: 0.3s;
      transform: scale(1.15);
    }

    .left-arrow-wrap {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: rotate(135deg);
    }

    .right-arrow-wrap {
      position: absolute;
      top: 50%;
      right: 5%;
      transform: rotate(-45deg);
    }

    @media screen and (max-width: 900px) {
      .testimonial {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <div class="testimonial">
    <h1>Our Reviews</h1>
    <div class="line"></div>
    <!-- arrow wrapper contains the review and the arrows -->
    <div class="arrow-wrapper">
      <!-- review section -->
      <div id="reviewWrap" class="review-wrap">
        <div id="imgBox"></div>
        <div id="name"></div>
        <div id="profession"></div>
        <div id="description"></div>
      </div>
      <!-- left arrow -->
      <div class="left-arrow-wrap">
        <div class="arrow"></div>
      </div>
      <!-- right arrow -->
      <div class="right-arrow-wrap">
        <div class="arrow"></div>
      </div>
    </div>
  </div>

  <script>
    const reviewWrap = document.getElementById("reviewWrap");
    const leftArrow = document.querySelector(".left-arrow-wrap .arrow");
    const rightArrow = document.querySelector(".right-arrow-wrap .arrow");
    const imgBox = document.getElementById("imgBox");
    const name = document.getElementById("name");
    const profession = document.getElementById("profession");
    const description = document.getElementById("description");

    let people = [{
        photo: 'url("https://scontent.fblj1-2.fna.fbcdn.net/v/t39.30808-6/327728612_1179514309351914_636541914474566891_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGHmuy5p_buFmaGCchQzAaMMyWr661_nwMzJavrrX-fA0UNt7mlyBNLhEpWnZcY7fGfIVEg-YXLohTHxvggcl_-&_nc_ohc=FIQtum5A8lcAX9xfy2O&_nc_ht=scontent.fblj1-2.fna&oh=00_AfA_lMGjHijmlmGrX7b8aNveWNrZN3g_frNMEwllDUeG3w&oe=64750901")',
        name: "Boualleg Mohamed lamine",
        profession: "مهندس برمجيات",
        description: "ماستر 2 اعلام الي :"
      },
      {
        photo: "url('')",
        name: "حفظ الله وناسة",
        profession: "اطار بشركة OAIC",
        description: "مهدنسة اعلام الي."
      },
      {
        photo: "url('')",
        name: "جابر روابحية",
        profession: "دكتور في الذكاء الصناعي",
        description: "دكتور في الذكاء الصناعي بجامعة تبسة."
      },
    
    ];

    // set the first person
    imgBox.style.backgroundImage = people[0].photo;
    name.innerText = people[0].name;
    profession.innerText = people[0].profession;
    description.innerText = people[0].description;
    let currentPerson = 0;

    //Select the side where you want to slide
    function slide(side, personNumber) {
      let reviewWrapWidth = reviewWrap.offsetWidth + "px";
      let descriptionHeight = description.offsetHeight + "px";
      //(+ or -)
      let side1symbol = side === "left" ? "" : "-";
      let side2symbol = side === "left" ? "-" : "";

      setTimeout(() => {
        imgBox.style.backgroundImage = people[personNumber].photo;
      }, 0);
      setTimeout(() => {
        description.style.height = descriptionHeight;
      }, 100);
      setTimeout(() => {
        name.innerText = people[personNumber].name;
      }, 200);
      setTimeout(() => {
        profession.innerText = people[personNumber].profession;
      }, 300);
      setTimeout(() => {
        description.innerText = people[personNumber].description;
      }, 400);
    }

    function setNextCardLeft() {
      if (currentPerson === 3) {
        currentPerson = 0;
        slide("left", currentPerson);
      } else {
        currentPerson++;
      }

      slide("left", currentPerson);
    }

    function setNextCardRight() {
      if (currentPerson === 0) {
        currentPerson = 3;
        slide("right", currentPerson);
      } else {
        currentPerson--;
      }

      slide("right", currentPerson);
    }

    leftArrow.addEventListener("click", setNextCardLeft);
    rightArrow.addEventListener("click", setNextCardRight);
  </script>
</body>

</html>