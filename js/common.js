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
          duration: 500,
          easing: "ease-in-out-back",
          once: true
        });
      }
      $(window).on('load', function() {
        aos_init();
      });

      // isotope filter 

      $(document).ready( function() {   

        $('.grid').isotope({
          itemSelector: '.book',
        });
        
        // filter items on button click
        $('.filter-button-group').on( 'click', 'li', function() {
          var filterValue = $(this).attr('data-filter');
          $('.wrapper-flex').isotope({ filter: filterValue });
          aos_init();
          $('.filter-button-group li').removeClass('active');
          $(this).addClass('active');
        });
            })

        // var portfolioIsotope = $('.portfolio-container').isotope({
        //   itemSelector: '.portfolio-item',
        //   layoutMode: 'fitRows'
        // });
    
        // $('#portfolio-flters li').on('click', function() {
        //   $("#portfolio-flters li").removeClass('filter-active');
        //   $(this).addClass('filter-active');
    
        //   portfolioIsotope.isotope({
        //     filter: $(this).data('filter')
        //   });
        //   aos_init();
        // });
    
    
   
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