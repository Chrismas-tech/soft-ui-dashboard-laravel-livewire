<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- Si on ajoute le script suivant on perd un menu en appuyant sur la cloche en haut à droite du Dashboard -->
{{-- <script src="assets/js/plugins/smooth-scrollbar.min.js"></script> --}}

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Si on ajoute le script suivant on perd le menu en appuyant sur l'hamburger en haut à droite -->
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
{{-- <script src="assets/js/soft-ui-dashboard.js"></script> --}}
