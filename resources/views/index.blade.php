<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Live Chat</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style></style>
    <link rel="stylesheet" href="../css/app.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="app">
    <header>
        <h1>Let's talk</h1>
        <input type="text" name="username" id="username" placeholder="Please enter a Name...">
    </header>
    <div id="messages"></div>

    <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Write a message..."/>
        <button id="message_send" type="submit">Send Message</button>
    </form>
</div>
<script src="../js/app.js"></script>
</body>
</html>
