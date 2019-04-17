<!doctype html>
<html lang="fi">

@include('runko/head')

<body>


</body>
<script>
    window.onload = function() {
    // similar behavior as clicking on a link
    window.location.href = "{{ action('SarjaController@index') }}";
}

</script>
</html>