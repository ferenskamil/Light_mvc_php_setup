<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<h1>Pobieranie APi</h1>
<button id="ajax-get-btn">AJAX - GET</button>
<button id="fetch-get-btn">FETCH - GET</button>
<button id="jquery-get-btn">JQUERY - GET</button>
<button id="axios-get-btn">AXIOS - GET</button>

<h1>Dodawanie nowego użytkownika</h1>
<form action="">
    <label for="name">Username:</label>
    <input type="text" id="name" name="name"><br>
    <label for="password">password:</label>
    <input type="text" id="password" name="password"><br>
</form>
<button id="ajax-add-btn">AJAX - POST</button>
<button id="fetch-add-btn">FETCH - POST</button>
<button id="jquery-add-btn">JQUERY - POST</button>
<button id="axios-add-btn">AXIOS - POST</button>

<div id="content"></div>
<script src="../../js/ajax/ajax.js"></script>
<script src="../../js/ajax/fetch.js"></script>
<script src="../../js/ajax/jquery.js"></script>
<script src="../../js/ajax/axios.js"></script>
</body>
</html>