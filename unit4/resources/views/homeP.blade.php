<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Localization</h1>
    <h1>{{ __('messages.welcome')}}</h1>
    <h3>{{ __('messages.about')}}</h3>

    <form>
        @csrf 
        <select onChange="window.location.href=this.value">
            <option>Select</option>
            <option value="/lang/en">English</option>
            <option value="/lang/hi">Hindi</option>
            <option value="/lang/pa">Punjabi</option>
            <option value="/lang/ta">Tamil</option>
        </select>
    </form>
</body>
</html>