<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiens</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h3>header</h3>
    <div id="app">
        <slayder-main></slayder-main>
        <box></box>
        <layout></layout>
    </div>
    @yield('heder')
    <h3>footer</h3>
</body>
</html>