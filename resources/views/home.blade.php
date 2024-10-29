<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            min-height: 800px;
            border: 8px solid black;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            align-content: flex-start;
        }
        .box {
            height: 200px;
            width: 200px;
            background-color: #0071FF;
            font-size: 40pt;
        }
        
    </style>
</head>
<body>
    <div class="box">1</div>
    
    <form action="display-bg" method='POST'>
        @csrf
        <input type="name" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button style="background-color: #0071FF">go to display page</button>
    </form>
    <div class="box">1</div>
    <div class="box">3</div>
    <div class="box">4</div>
    <div class="box">5</div>    
    <div class="box">6</div>
    <div class="box">7</div>
    <div class="box">8</div>
    <div class="box">9</div> 
</body>
</html>