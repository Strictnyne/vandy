<footer>
    <div class="row">
        <div class="large-12 large-centered columns text-center">
            Copyright 2017
        </div>
    </div>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <script>
        $(window).on('load', function() {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
            $('#main-container').css('display', 'block')
            $('body').delay(350).css({'overflow':'visible'});
        });
    </script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vuejs-paginator/2.0.0/vuejs-paginator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>

    {!! Html::script('assets/js/moment.js') !!}
    {!! Html::script('assets/js/data-list.js') !!}

</footer>