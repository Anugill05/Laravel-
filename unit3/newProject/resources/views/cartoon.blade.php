<!DOCTYPE html>
<html>
<head>
    <title>Cartoon</title>
</head>
<body>

<h2>Click the cartoon</h2>

<img src="{{ asset('images/cartoon.webp') }}" 
     width="300"
     style="cursor:pointer"
     onclick="goToSpiderman()">

<script>
    function goToSpiderman() {
        window.location.href = "/spiderman";
    }
</script>

</body>
</html>