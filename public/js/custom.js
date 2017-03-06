$(function(){
  $("#ask-btn").click(function(){
    $.ajax({
      type: 'GET',
      url:'check.php',
      async: false,
      success:function(response){
        if(response) {
          $("#ask-btn").hide();
          $("#question-area").show();
        }
        else {
         window.open('login/login.php','_self');
       }
       
     }
   });
    
  });

  $(".a").click(function(){
    var imgsrc = $(this).attr('src');
    $("#img-main").attr('src',imgsrc);
  });
});


$(window).scroll(function(){
    var scroll_top = $(this).scrollTop(); // get scroll position top
    var height_element_parent =  $("#theFixed").parent().outerHeight(); //get high parent element
    var height_element = $("#theFixed").height(); //get high of elemeneto
    var position_fixed_max = height_element_parent - height_element; // get the maximum position of the elemen
    var position_fixed = scroll_top < 75 ? 75 : position_fixed_max > scroll_top + 75 ? 75 : position_fixed_max - scroll_top ;
    $("#theFixed").css("top",position_fixed);
  });