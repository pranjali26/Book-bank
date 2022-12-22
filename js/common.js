(function($) {
    // typed 
            if ($('.typed').length) {
        var typed_strings = $(".typed").data('typed-items');
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
          strings: typed_strings,
          loop: true,
          typeSpeed: 100,
          backSpeed: 50,
          backDelay: 2000
        });
      }

      // aos 
      function aos_init() {
        AOS.init({
          duration: 1000,
          easing: "ease-in-out-back",
          once: true
        });
      }
      $(window).on('load', function() {
        aos_init();
      });

      // navbar
            $(function() {
    
                //  open and close nav 
                $('#navbar-toggle').click(function() {
                    $('nav ul').slideToggle();
                });
                // Hamburger toggle
                $('#navbar-toggle').on('click', function() {
                    this.classList.toggle('active');
                });
    
                // If a link has a dropdown, add sub menu toggle.
                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.navbar-dropdown').slideToggle("slow");
    
                    // Close dropdown when select another dropdown
                    $('.navbar-dropdown').not($(this).siblings()).hide("slow");
                    e.stopPropagation();
                });
                // Click outside the dropdown will remove the dropdown class
                $('html').click(function() {
                    $('.navbar-dropdown').hide();
                });
            });
        })(jQuery);