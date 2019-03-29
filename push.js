$(document).ready(function() {


  //INITIALISATION
  $tags = new Array();
  var vitesseBtn = 500;
  var vitesseImg = 1500;
  $requete = "SELECT * FROM memes ORDER BY RAND()";
  $reqCount = "SELECT COUNT(*) as total FROM memes";
  $filtres = 0;
  changeColorIcon();



  $.ajax({
    url: "memei.php",
    data: {
      requete: $requete,
      requeteCount: $reqCount

    },
    type: 'post',
    success: function(result) {
      $("#container1").html(result);
      apparitionImg()
    }
  });


  $(".btn").click(function() {

    if ($(this).parent(".btn-containerA").length == true) {
      $filtres++;
      $temp = $(this);

      //RECUPERATION DES TAGS + AJOUT DANS TABLEAU
      $id = $(this).attr('id');
      $tags.push($id);

      constructRequest();

      //REQUETE AJAX
      $.ajax({
        url: "memei.php",
        data: {
          requete: $requete,
          requeteCount: $reqCount
        },
        type: 'post',
        success: function(result) {
          $("#container1").html(result);
          apparitionImg()
        }
      });

      //TRANSFERT DES BOUTONS DE A VERS B
      $(this).animate({
        left: "150px",
        opacity: 0
      }, vitesseBtn).animate({
        left: "-150px"
      }, 0);
      setTimeout(function() {
        $(this).detach();
        $('.btn-containerB').append($temp);

      }, 400);
      $(this).delay(500).animate({
        left: "0",
        opacity: 1
      }, vitesseBtn);

      $count = $(".btn-containerB > div").length;
      console.log($filtres);

      animOverlayFiltre();

      $("#container1").animate({
        scrollTop: 0
      }, '300');



    } else if ($(this).parent(".btn-containerB").length == true) {
      $filtres--;
      $temp = $(this);
      $id = $(this).attr('id');
      $tags = jQuery.grep($tags, function(value) {
        return value != $id;
      });

      constructRequest();

      //REQUETE AJAX
      $.ajax({
        url: "memei.php",
        data: {
          requete: $requete,
          requeteCount: $reqCount
        },
        type: 'post',
        success: function(result) {
          $("#container1").html(result);
          apparitionImg()
        }
      });




      //TRANSFERT DES BOUTONS DE B VERS A
      $(this).animate({
        left: "-150px",
        opacity: 0
      }, vitesseBtn).animate({
        left: "+150px"
      }, 0);
      setTimeout(function() {
        $(this).detach();
        $('.btn-containerA').append($temp);

      }, 500);
      $(this).delay(500).animate({
        left: "0",
        opacity: 1
      }, vitesseBtn);


      $count = $(".btn-containerB > div").length;
      console.log($filtres);

      animOverlayFiltre();

      $("#container1").animate({
        scrollTop: 0
      }, '300');


    }
  });



  $('li').click(function() {
    noir();
  });

  //CLIGNOTEMENT ICONE VERTE
  function changeColorIcon() {
    $('#actif').animate({
      color: 'white'
    }, 1000, function() {
      $('#actif').animate({
        color: 'green'
      }, 1000, function() {
        changeColorIcon();
      });
    });
  };


  function animOverlayFiltre() {
    if ($filtres == 3) {
      $('.overlay').css({
        "display": "block"
      }, 500);
      $('.A').animate({
        opacity: 0.5
      }, '500');
      $('.A').css("border", "1px gray");
    } else if ($filtres != 3) {
      $('.overlay').css({
        "display": "none"
      }, 500);
      $('.A').animate({
        opacity: 1
      }, '500');
      $('.A').css("border", "1px solid");
    }
  }

  //FONCTION APPARITION IMAGES
  function apparitionImg() {
    $('.img-container').animate({
      opacity: 1,
      top: "0"
    }, vitesseImg, "easeOutQuart");
  }

  //FONCTION MENU
  function noir() {
    $('.noir').animate({
      width: "100%"
    }, 700);
  };


  $('#quit').click(function() {
    $('.noir').animate({
      width: "0%"
    }, 700);
    $('#propos').animate({
      opacity: 0,
      left: "-800px"
    }, 800);
    setTimeout(function() {
      $('.section').css("display", "none");
    }, 700);

  });

  $('.nav1').click(function() {
    $('.apropos').css("display", "block");
    $('#propos').delay(600).animate({
      opacity: 1,
      left: "0"
    }, 800);
  });


  //FONT RESIZE
  var fontSize = $(window).width() / 70;
  $('h2').css('font-size', fontSize);

  $(window).resize(function() {
    var fontSize = $(window).width() / 70;
    $('h2').css('font-size', fontSize);
  });


  //CREATION DE LA NOUVELLE REQUETE
  function constructRequest() {
    $tableLength = $tags.length;

    if ($tableLength == 0) {
      $requete = "SELECT * FROM memes";
      $reqCount = "SELECT COUNT(*) as total FROM memes";
      console.log($requete);

    }

    $tableLength = $tags.length;
    if ($tableLength != 0) {
      $requete = "SELECT * FROM memes WHERE ";
      $reqCount = "SELECT COUNT(*) as total FROM memes WHERE ";
      switch ($tableLength) {
        case 1:
          $requete += "tags like '%" + $tags[0] + "%'";
          $reqCount += "tags like '%" + $tags[0] + "%'";
          break;
        case 2:
          $requete += "tags like '%" + $tags[0] + "%' OR tags like '%" + $tags[1] + "%'";
          $reqCount += "tags like '%" + $tags[0] + "%' OR tags like '%" + $tags[1] + "%'";
          break;
        case 3:
          $requete += "tags like '%" + $tags[0] + "%' OR tags like '%" + $tags[1] + "%' OR tags like '%" + $tags[2] + "%'";
          $reqCount += "tags like '%" + $tags[0] + "%' OR tags like '%" + $tags[1] + "%' OR tags like '%" + $tags[2] + "%'";
          break;
        default:
          $requete = "Marche pas";

      }

      $requete += "ORDER BY RAND();";
      console.log($requete);
    }
  }







});
