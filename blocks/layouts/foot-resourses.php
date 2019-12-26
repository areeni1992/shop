<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/swiper.min.js"></script>

<script>
    $(document).ready(function () {
        // niceScroll start
        $(".menu").niceScroll({
            cursorcolor: "#acacac",
            cursorwidth: "6px",
            cursorborderradius: "5px",
        });
        if ($(".categoreis .menu li.submenu > a > ul").hasClass("list")){

            $(".categoreis .menu li.submenu > a.select, .categoreis .menu li.submenu > a").on("click", function (e) {
                e.preventDefault();
                $(this).closest('li.submenu').toggleClass('active');
            });
        }
        
        $('.icon, .like').on('click', function () {
            $(this).each(function () {
                $(this).toggleClass('redlike')
            })
        });

        var x = x + 1;
        $('.decrees').each(function () {
            $(this).on('click', function () {
                $('.num').each(function () {
                    $(this).val(x);
                })
            })
        })
    });



</script>

<script>
    var swiper = new Swiper('.slider .swiper-container', {
        pagination: {
            el: '.slider .swiper-pagination',
            clickable: true,
        },
    });
</script>
<!--<script type="text/javascript">-->
<!--    $(window).load(function () {-->
<!--        $(".demo").customScrollbar();-->
<!--        $("#fixed-thumb-size-demo").customScrollbar({fixedThumbHeight: 50, fixedThumbWidth: 60});-->
<!--    });-->
<!--</script>-->