<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/charts-home.js"></script>
<script src="js/front.js"></script>


<script type="text/javascript">
    function confirmation(ev) {
        ev.preventDefault(); // Prevent default action (delete)

        var UrlToRedirect = ev.currentTarget.getAttribute("href"); // Get URL from href
        console.log(UrlToRedirect); // Debugging URL

        // Display SweetAlert confirmation
        swal({
            title: "Are You Sure You Want to Delete This Record?",
            text: "This action is irreversible!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => { // Properly handle the response
            if (willDelete) {
                window.location.href = UrlToRedirect; // Redirect if confirmed
            }
        });
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>