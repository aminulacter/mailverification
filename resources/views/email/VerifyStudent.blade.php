<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{ $student['name']}}</h2>
<br/>
Your registered email-id is {{ $student['email'] }} , Please click on the below link to verify your email account
<br/>
<a href="{{ url('/student/verify', $student->verify__student->token)}}">Verify Email</a>
</body>

</html>
