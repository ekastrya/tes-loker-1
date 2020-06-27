<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
    </head>
    <body>
        <h1>Sign In Page</h1>

        <form action="/public/action.php" method="POST">

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Masukkan alamat email Anda">
            </div>

            <div>
                <label for="username">Password</label>
                <input type="password" name="password" placeholder="Masukkan password Anda">
            </div>

            <div>
                <button type="submit">Sign In</button>
            </div>
        </form>
    </body>
</html>