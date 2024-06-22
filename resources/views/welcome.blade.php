<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FM</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    <form action="">
        <h1>Contact Us</h1>
        <label for="first_name">First Name *</label>
        <input type="text" name="first_name" id="first_name">
        <label for="last_name">Last Name *</label>
        <input type="text" name="last_name" id="last_name">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
        <div>
            <label for="query">Query Type *</label>
            <input type="radio" name="general" id="general">
            <input type="radio" name="support" id="support">
        </div>
        <label for="message">Message *</label>
        <textarea name="message"></textarea>
        <input type="checkbox" name="consent" id="consent">
        <span>I consent to being contacted by the team *</span>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
