<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    <div class="container">
        <div class="center">
            <h1>LOG IN</h1>
            <x-validation-errors />
            <x-form.form />
        </div>
    </div>
</body>
</html>

<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Roboto;
        background-repeat: no-repeat;
        background-size: cover;
        background: linear-gradient(120deg, #007bff, #d0314c);
        height: 100vh;
        overflow: hidden;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 29vw;
        background: white;
        border-radius: 10px;
    }

    .center h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
    }
    .center form{
        padding: 0 40px;
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        font-family: Roboto;
        background-repeat: no-repeat;
        background-size: cover;
        background: linear-gradient(120deg, #007bff, #d0314c);
        height: 100vh;
        overflow: hidden;
    }

    .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 29vw;
        background: white;
        border-radius: 10px;
    }

    .center h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
    }

    .center form{
        padding: 0 40px;
        box-sizing: border-box;
    }

    form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }

    .txt_field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
    }

    form {
        margin-bottom:40px;
    }
    input[type="Submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        border-radius: 25px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;

    }
</style>
