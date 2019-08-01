<script src="{{ asset('bower_components/admin_template/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/assets/js/main.js') }}"></script>


<script src="{{ asset('bower_components/admin_template/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/assets/js/widgets.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('bower_components/admin_template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}">
</script>
<script src="{{ asset('bower_components/admin_template/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>
