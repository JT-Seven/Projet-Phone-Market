<script>
  $(document).ready(function() {
    $('#lightSlider').lightSlider({
        item:4,
        loop:true,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:1300,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:1,
                  }
            },
            {
                breakpoint:1000,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:1,
                  }
            }
        ]
    });  
    $('#lightSlider2').lightSlider({
        item:4,
        loop:true,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:1300,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:1,
                  }
            },
            {
                breakpoint:1000,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:1,
                  }
            }
        ]
    });  
  });
</script>