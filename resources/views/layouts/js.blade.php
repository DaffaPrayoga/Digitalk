<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit-icons.min.js"></script>
<!-- Addons -->
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.material.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script type="text/javascript">
    $(window).on("load", function () {
        // Animate loader off screen
        $(".loading-wrapper").fadeOut('slow');
    });

    function comfirm_popup(form, message) {
        swal({
            title: "<h5 class=font-bold center black-text style=font-size:2rem;>" + message + "<h5>",
            confirmButtonText: "Yes!",
            type: "warning",
            allowOutsideClick: true,
            showCancelButton: true,
            allowEscapeKey: true,
            confirmButtonColor: "#ec454f",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            html: true,
        }, function (isComfirm) {
            if (isComfirm) {
                form.submit();
            } else {
                swal.close();
            }
        });
    }

    // var scroll;
    // $(window).on("scroll", function () {
    //     scroll = $(window).scrollTop();
    //     if (scroll > 100) {
    //         $(".navblack").css({"background-color": "rgba(255,255,255,1)"});
    //         $(".navblack").addClass("z-depth-12");
    //         $(".navblack").removeClass("z-depth-0");
    //         // $(".nav-a").addClass("grey-text text-darken-4");
    //         $("#logo-svg").css({"height": "60px", "margin-top": "5px"});
    //     } else {
    //         $(".navblack").css({"background-color": "transparent"});
    //         $("#logo-svg").css({"height": "90px", "margin-top": "10px"});
    //         // $(".nav-a").removeClass("grey-text text-darken-4");
    //         $(".navblack").addClass("z-depth-0");
    //         $(".navblack").removeClass("z-depth-12");
    //     }
    // });

    $(document).ready(function () {
        $('.select2kontol').select2();
        $('#tampildata').DataTable({
            "language": {
                "emptyTable": "<img style='height:200px;' src='{{asset('img/footer-img.svg')}}'><h5 class='font-black grey-text text-darken-3' style='letter-spacing:-1px;font-size:30px;margin-top:10px;'>Ups, Data Kosong!</h5><h5 class='grey-text font-black' style='margin-top:-5px;font-size:18px;margin-bottom:30px;'>Tidak ada data pada bagian ini.</h5>"
            }
        });
    });
    // ClassicEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );

</script>
@if (session('alert'))
    <script type="text/javascript">
        swal({
            title: "<h5 class=font-bold center black-text style=font-size:2rem;>{{ session('alert') }}<h5>",
            confirmButtonText: "Okay!",
            type: "success",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#789904",
            closeOnConfirm: true,
            html: true,
        });
    </script>
@endif
@if (session('whythehell'))
    <script type="text/javascript">
        swal({
            title: "<h5 class=font-bold center black-text style=font-size:2rem;>{{ session('whythehell') }}<h5>",
            confirmButtonText: "Okay",
            type: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "red",
            closeOnConfirm: true,
            html: true,
        });
    </script>
@endif
@if (session('warning'))
    <script type="text/javascript">
        swal({
            title: "<h5 class=font-bold center black-text style=font-size:2rem;>{{ session('warning') }}<h5>",
            confirmButtonText: "Okay",
            imageUrl: '{{asset('img/404.svg')}}',
            imageWidth: 400,
            imageHeight: 200,
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#789904",
            closeOnConfirm: true,
            html: true,
        });
    </script>
    @endif
    </body>
</html>