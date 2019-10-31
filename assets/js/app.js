$(document).ready(function() {
    var pageItem = $(".pagination li").not(".prev,.next");
    var prev = $(".pagination li.prev");
    var next = $(".pagination li.next");
  
    pageItem.click(function() {
      pageItem.removeClass("active");
      $(this).not(".prev,.next").addClass("active");
    });
  
    next.click(function() {
      $('li.active').removeClass('active').next().addClass('active');
    });
  
    prev.click(function() {
      $('li.active').removeClass('active').prev().addClass('active');
    });
  
  });
  $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": false // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
  });


  function myFunction() {
    var x = document.getElementById("myDIV");
    var a = document.getElementById("t2");
    var y = document.getElementById("t3");
    var b = document.getElementById("t4");
    if (x.style.display === "none") {
      x.style.display = "block";
      a.style.display = "none";
      y.style.display = "none";
      b.style.display = "none";

    } else {
      x.style.display = "none";
      a.style.display = "none";
      y.style.display = "none";
      b.style.display = "none";
    }
  }
  function myFunction1() {
    var a = document.getElementById("t2");
    var x = document.getElementById("myDIV");
    var y = document.getElementById("t3");
    var b = document.getElementById("t4");
    if (a.style.display === "none") {
      a.style.display = "block";
      y.style.display = "none";
      b.style.display = "none";
      x.style.display = "none";
    } else {
      a.style.display = "none";
      x.style.display = "none";
      y.style.display = "none";
      b.style.display = "none";
    }
  }
  function myFunction2() {
    var y = document.getElementById("t3");
    var b = document.getElementById("t4");
    var a = document.getElementById("t2");
    var x = document.getElementById("myDIV");
    if (y.style.display === "none") {
      y.style.display = "block";
      b.style.display = "none";
      a.style.display = "none";
      x.style.display = "none";
    } else {
      y.style.display = "none";
      a.style.display = "none";
      x.style.display = "none";
      b.style.display = "none";
    }
  }
  function myFunction3() {
    var y = document.getElementById("t3");
    var b = document.getElementById("t4");
    var a = document.getElementById("t2");
    var x = document.getElementById("myDIV");
    if (b.style.display === "none") {
      b.style.display = "block";
      y.style.display = "none";
      a.style.display = "none";
      x.style.display = "none";
    } else {
      b.style.display = "none";
      y.style.display = "none";
      a.style.display = "none";
      x.style.display = "none";
    }
  }
  