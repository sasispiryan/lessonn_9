<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="changedrat">
<select id="changed" style="margin-bottom: 40px;">
    <option name="action" value="usa_dolar" >USA</option>
    <option name="action" value="eur_evro">EUR</option>
</select>
</div>
<div class="update-rate">
    <input type="text" id="new_rate">
    <button id="btn-update">Update</button>
</div>
<div class="change">
    <input type="text" id="value" placeholder="Enter USD">
    <button id="change">Change</button>
    <input type="text" id="result" disabled>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</body>
</html>