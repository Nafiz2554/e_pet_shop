<html>

<head>
  <title>Pet shopping</title>
  <link rel="stylesheet" href="index_style.css" />
  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background: linear-gradient(285deg, #02adc9, #16191a99);
      color: #f30043;
      font-weight: bolder;
      cursor: pointer;
      padding: 15px;
      border-radius: 50%;
      box-shadow: 3px 3px 3px black;
      text-shadow: 2px 2px 2px darkblue;

    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
</head>

<body>

  <?php
  include("header_index.php");
  include("mainbody.php");

  ?>


  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


  <script>
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;

    }
  </script>


</body>

</html>