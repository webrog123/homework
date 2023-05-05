<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <script type="text/javascript" src = "./js/universities.js"></script>
  <title>Shops</title>
  <style>
    #informationdiv {
      width: 600px;
    }
    #universityinfo {
      float: right;
      border: 1px solid black;
      width: 250px;
      height: 100px;
    }
    .label1{
      display: inline-block;
      width: 60px;
      text-align: right;
    }
    span {
      margin: 3px 5px;
    }
    label {
      display: inline-block;
      width: 70px;
      text-align: right;
    }
    select {
      width: 115px;
    }
  </style>
  </head>
  <body>
    <h2>Our partner shops</h2>
    <div id = 'informationdiv'>
      <div id = 'universityinfo'>
        <span class="label1">Name:</span><span id="name" class="unidata"></span><br>
        <span class="label1">Address:</span><span id="address" class="unidata"></span><br>
        <span class="label1">Tel:</span><span id="tel" class="unidata"></span><br>
        <span class="label1">E-mail:</span><span id="email" class="unidata"></span><br>
      </div>
      <label for='countrylabel'>Country:</label>
      <select id = 'countryselect'></select>
      <br><br>
      <label for = 'citylabel'>City:</label>
      <select id = 'cityselect'></select>
      <br><br>
      <label for = 'universitylabel'>Shops:</label>
      <select id = 'universityselect'></select>
    </div>
  </body>
</html>
