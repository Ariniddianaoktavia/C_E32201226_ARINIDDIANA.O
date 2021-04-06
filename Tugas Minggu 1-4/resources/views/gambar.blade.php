<!DOCTYPE html>
<html>
  <head>
    <title> gambar </title>
    <style>
      html, body {
        background-color:#F0E68C  ;
        color: #FFFACD;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
      }
      .full-height {
        height: 100vh;
      }
      .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
      }
      .position-ref {
        position: relative;
      }
      .top-right {
        position: absolute;
        right: 10px;
        top: 20px;
      }
      .content {
        text-align: center;
      }
      img {
        max-width: 100%;
        height: auto;
      }
      .m-b-md {
        margin-bottom: 30px;
      }
      .title {
        border-top: 2px solid;
        font-size: 30px;
        font-weight: bold;
        text-transform: uppercase;
        border-bottom: 2px solid;
        padding: 12px 0;
        color:#CD853F;
      }
    </style>
  </head>

  <body>
    <div class="flex-center position-ref full-height">
      <img src="{{ ('img/gambar1.jpg') }}" alt="Gambar1" width="450" height="auto">
      <div class="content">
        <img src="{{ ('img/gambar2.jpg') }}" alt="Gambar2" width="300" height="auto">
        <div class="title m-b-md">
            TEMPAT FAVORITE
        </div> 
        <img src="{{ ('img/gambar5.jpg') }}" alt="Gambar5" width="300" height="auto">
      </div>
      <img src="{{ ('img/gambar3.jpg') }}" alt="Gambar3" width="400" height="auto">
    </div>
  </body>
</html>