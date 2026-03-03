<footer>
    <div class="container-fluid green-bg">
    <div class="container">
        <div class="row">
            <div class="text-center w-100 my-5">

                <h3 class="text-white w-100">Coaching & education for all levels of exercisers and athletes with diabetes.</h3>
                <h4 class="text-white w-100">You Get It. We Get It Too. Come Experience That Magic.</h4>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid grey-bg">
    <div class="container">
        <div class="row">
            <div class="my-5">

                <h6 class="text-white ">Diabetes Training Camp Foundation • 109 North Mansfied Ave. • MARGATE CITY, NJ, USA 08402 </h6>
                <p class="text-white">You Get It. We Get It Too. Come Experience That Magic.</p>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid black-bg">
    <div class="container">
        <div class="row">
            <div class="">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">
                        <li class="text-white nav-item px-2">LIKE us on Facebook</li>
                        <li class="text-white nav-item px-2">Join Our Email list</li>
                        <li class="text-white nav-item px-2">DONATE</li>
                        <li class="text-white nav-item px-2">Privacy Policy</li>
                        <li class="text-white nav-item px-2">DTC ALUMNI + 1,NOV 2019</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</footer>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>--}}
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>

<!-- Conditional page load script -->
@if(request()->segment(1) === 'dashboard')
    <script src="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script>
        $(function() {
            $('#side-menu').metisMenu();
        });
    </script>
@endif

{{--<script src="{{ asset('assets/js/main.js') }}"></script>--}}

<script>
    var toastr_options = {closeButton : true};


    //Cookie Notice

    $('.cookie-ok-btn').click(function(e){
        e.preventDefault();
        var element = $(this);
        $.ajax({
            type : 'post',
            url : '{{route('cookie_accept')}}',
            data: {cookie_accept: true, _token : '{{csrf_token()}}'},
            success: function(data){
                if (data.accept_cookie){
                    element.closest('.cookie-notice').slideUp();
                }
            }
        });
    });

</script>
<script>
   /* $('.box-campaign-lists').masonry({
        itemSelector : '.box-campaign-item'
    });*/
</script>
@yield('page-js')

@if(get_option('additional_js') && get_option('additional_js') !== 'additional_js')
{!! get_option('additional_js') !!}
@endif

</body>
</html>
