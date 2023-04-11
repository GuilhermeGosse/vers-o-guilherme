// EFEITO 3D PARA A REVISTA
$(document).ready(function() {
    $('.revista-image').on('mousemove', function(event) {
      var $this = $(this);
      var x = (event.pageX - $this.offset().left) / $this.width();
      var y = (event.pageY - $this.offset().top) / $this.height();
      var rotateX = 10 - y * 20;
      var rotateY = x * 20 - 10;
      $this.css({
        'transform': 'perspective(700px) scale(1.05) rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)',
      });
    }).on('mouseleave', function() {
      $(this).css('transform', '');
    });
  });
  