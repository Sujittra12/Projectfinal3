<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1> LOGIN</h1>
    <section>
        <form action="{{route('login.check') }}" method="get">
            @csrf <!-- ระบุ cross-site request forgery token -->
            <label for="Employee_ID">รหัสพนักงาน</label>
            <input type="text" id="Employee_ID" name="Employee_ID" required><br>

            <label for="password">รหัสผ่าน:</label>
            <input type="text" id="password" name="password" required><br>
            <button type="submit">เข้าสู่ระบบ</button>
        </form>
    </section>
</body>
</html>