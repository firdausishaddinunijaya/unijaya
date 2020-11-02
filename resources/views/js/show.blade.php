<script type="text/javascript">
    $(document).ready(() => {
        let baseUrl = "https://gorest.co.in/public-api/users/{{ $id }}";

        $.get(baseUrl, function (response) {
            $("#name").val(response.data.name)
            $("#email").val(response.data.email)
            $("#gender").val(response.data.gender)
            $("#status").val(response.data.status)
        });
    });

</script>