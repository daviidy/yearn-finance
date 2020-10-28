$(document).ready(function() {
  /*si l'on click sur la div, qu'el va sur la page d'accueil*/

 $("div.url").click(
  function()
  {
      window.location = $(this).attr("url");
      return false;
  });

  /*changement de du border des button du menu*/
  $('.jss283 .jss284 h4').on('click', function(e){
    e.preventDefault();
    var me=$(this).parent().toggleClass('jss286')
    $(".jss286").not(me).removeClass('jss286')
  });

});
