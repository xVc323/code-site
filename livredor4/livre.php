<html>
<style>
  @import url(https://fonts.googleapis.com/css?family=opensans:500);

  ._1,
  ._404,
  .c {
    position: relative
  }

  body {
    background: #3c9;
    color: #fff;
    font-family: 'Open Sans', sans-serif;
    max-height: 700px;
    overflow: hidden
  }

  .c {
    text-align: center;
    display: block;
    width: 80%;
    margin: 100px auto
  }

  ._404 {
    font-size: 220px;
    display: inline-block;
    z-index: 2;
    height: 250px;
    letter-spacing: 15px
  }

  ._1,
  ._2 {
    display: block;
    text-align: center
  }

  ._1 {
    letter-spacing: 12px;
    font-size: 4em;
    line-height: 80%
  }

  ._2 {
    position: relative;
    font-size: 20px;
    margin-top: 15px;
  }

  .btn,
  .text,
  hr:after {
    display: inline-block;
    position: relative
  }

  .text {
    font-size: 70px;
    text-align: center;
    margin: 19px 0 0;
    z-index: 3;
    width: 100%;
    line-height: 1.2em
  }

  .btn {
    background-color: #fff;
    width: 358px;
    padding: 5px;
    z-index: 5;
    font-size: 25px;
    margin: 0 10px 0 auto;
    color: #3c9;
    text-decoration: none
  }

  .right {
    float: right;
    width: 60%
  }

  hr {
    padding: 0;
    border: none;
    border-top: 5px solid #fff;
    color: #fff;
    text-align: center;
    margin: 0 auto;
    width: 420px;
    height: 10px;
    z-index: -10
  }

  hr:after {
    content: "\2022";
    top: -.75em;
    font-size: 2em;
    padding: 0 .2em;
    background: #3c9
  }

  .cloud {
    width: 350px;
    height: 120px;
    background: #FFF;
    background: linear-gradient(top, #FFF 100%);
    background: -webkit-linear-gradient(top, #FFF 100%);
    background: -moz-linear-gradient(top, #FFF 100%);
    background: -ms-linear-gradient(top, #FFF 100%);
    background: -o-linear-gradient(top, #FFF 100%);
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    position: absolute;
    margin: 120px auto 20px;
    z-index: -1;
    transition: ease 1s
  }

  .cloud:after,
  .cloud:before {
    content: '';
    position: absolute;
    background: #FFF;
    z-index: -1
  }

  .cloud:after {
    width: 100px;
    height: 100px;
    top: -50px;
    left: 50px;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px
  }

  .cloud:before {
    width: 180px;
    height: 180px;
    top: -90px;
    right: 50px;
    border-radius: 200px;
    -webkit-border-radius: 200px;
    -moz-border-radius: 200px
  }

  .x1 {
    top: -50px;
    left: 100px;
    -webkit-transform: scale(.3);
    -moz-transform: scale(.3);
    transform: scale(.3);
    opacity: .9;
    -webkit-animation: moveclouds 15s linear infinite;
    -moz-animation: moveclouds 15s linear infinite;
    -o-animation: moveclouds 15s linear infinite
  }

  .x1_5 {
    top: -80px;
    left: 250px;
    -webkit-transform: scale(.3);
    -moz-transform: scale(.3);
    transform: scale(.3);
    -webkit-animation: moveclouds 17s linear infinite;
    -moz-animation: moveclouds 17s linear infinite;
    -o-animation: moveclouds 17s linear infinite
  }

  .x2,
  .x3 {
    left: 250px;
    -webkit-animation: moveclouds 25s linear infinite;
    -moz-animation: moveclouds 25s linear infinite;
    -o-animation: moveclouds 25s linear infinite
  }

  .x2 {
    top: 30px;
    -webkit-transform: scale(.6);
    -moz-transform: scale(.6);
    transform: scale(.6);
    opacity: .6
  }

  .x3 {
    bottom: -70px;
    -webkit-transform: scale(.6);
    -moz-transform: scale(.6);
    transform: scale(.6);
    opacity: .8
  }

  .x4 {
    left: 470px;
    botttom: 20px;
    -webkit-transform: scale(.75);
    -moz-transform: scale(.75);
    transform: scale(.75);
    opacity: .75;
    -webkit-animation: moveclouds 18s linear infinite;
    -moz-animation: moveclouds 18s linear infinite;
    -o-animation: moveclouds 18s linear infinite
  }

  .x5 {
    left: 200px;
    top: 300px;
    -webkit-transform: scale(.5);
    -moz-transform: scale(.5);
    transform: scale(.5);
    opacity: .8;
    -webkit-animation: moveclouds 20s linear infinite;
    -moz-animation: moveclouds 20s linear infinite;
    -o-animation: moveclouds 20s linear infinite
  }

  @-webkit-keyframes moveclouds {
    0% {
      margin-left: 1000px
    }

    100% {
      margin-left: -1000px
    }
  }

  @-moz-keyframes moveclouds {
    0% {
      margin-left: 1000px
    }

    100% {
      margin-left: -1000px
    }
  }

  @-o-keyframes moveclouds {
    0% {
      margin-left: 1000px
    }

    100% {
      margin-left: -1000px
    }
  }
</style>
</html>

<?php
if(isset($_POST['submit']))
{

}else echo"Vous devez saisir tous les champs pour pouvoir poster un commentaire";

}

 ?>
<form method="POST" action"livre.php">
  <hr>
  <strong>Poster un commentaire sur le livre d'or de Fast+</strong>
    <TD colspan="2"><div align="center"></TD>
  <p>Votre nom :</p>
    <TD colspan="2"><div align="center"><input type="text" name="nom"></TD>
  <p>Votre e-mail :</p>
    <TD colspan="2"><div align="center"><input type="text" name="email"></TD>
  <p>Votre message :</p>
  <textarea name="text" rows="6" cols-"35"></textarea><br/><br/>
<!--    <TD colspan="2"><div align="center"><input type"button" name="submit" value="Enoyer le commentaire"></TD> -->
  <TR>
    <TD colspan="2"><div align="center"><Input Type="submit" name="submit" OnClick="ControleVide_lo()" Value="Envoyer"></TD>
  </TR>
</form>
