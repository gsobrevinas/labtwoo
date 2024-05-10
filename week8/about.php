<!doctype html>
<head>
    <title>Gian's Site</title>
    <link rel="icon" type="image/x-icon" href="/lab3/ci4/public/Images/twitchicon2.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
/*about page css */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 10px 0;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
  color:azure;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}

</style>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn">Socials</a>
          <div class="dropdown-content">
            <a href="https://github.com/gsobrevinas">Github</a>
            <a href="https://steamcommunity.com/id/yukisoba_steam/">Steam</a>
            <a href="https://www.instagram.com/g.s0bs/">Instagram</a>
          </div>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="form.php">Forms</a></li>
        <li style="float:right"><a class="active" href="">References</a></li>
      </ul>

    <section class="about-us">
      <div class="about">
          <img src="./images/gian.jpg" class="pic">
        <div class="text">
          <h2>Personal Information</h2>
          <h5>Front-end Developer & <span>Designer</span></h5>
            <p>Full Name: <br> Gian Sobrevinas</p>
            <p>Nickname: <br> Gian</p>
            <p>Senior High School Graduated From: <br> O.B Montessori</p>
            <p>City the High School is Located at: <br> Las Pinas</p>
            <p>Course: <br> BSIT-MI</p>
            <p>Scholarship: <br> No</p>
            <p>Transferee: <br> No</p>
            <p>Did You Choose This Course: <br> Yes</p>
            <p>Why Yes: <br> I have been interested on how websites are made: from the designs and incorporating functions within each element.</p>
          <div class="data">
          <a href="https://www.linkedin.com/in/gian-sobrevinas-576235271/" class="hire">LinkedIn</a>
          </div>
        </div>
      </div>
    </section>
  </body>

  </html>