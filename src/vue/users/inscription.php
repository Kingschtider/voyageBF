<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inscription</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <h1>Veuillez vous inscrire!</h1>
    <form method="post" accept-charset="UTF-8">
        {{ csrfInput() }}
        <input type="hidden" name="action" value="users/login">
    
        <h3><label for="loginName">Username or email</label></h3>
        <input id="loginName" type="text" name="loginName"
            value="{{ craft.app.user.rememberedUsername }}">
    
        <h3><label for="password">Password</label></h3>
        <input id="password" type="password" name="password">
    
        <label>
            <input type="checkbox" name="rememberMe" value="1">
            Remember me
        </label>
    
        <input type="submit" value="Login">
    
        {% if errorMessage is defined %}
            <p>{{ errorMessage }}</p>
        {% endif %}
    </form>
    
    <p><a href="{{ url("forgotpassword") }}">Forgot your password?</a></p>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>