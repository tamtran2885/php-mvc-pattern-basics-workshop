

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web site " />
    <title>Log In</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    >
</head>

<body>
    <main class="main container">
        <div class="center" >
            <h1>Account Login</h1>
            <form
                method="POST"
                action="?controller=login&action=validateLogin"
            >
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username"  name="username"  autocomplete="current-name">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password"  name="password" autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            </form>
            <p>Click here if you do not have any account <a href="?controller=signup&action=viewSignup">Register</a></p>
        </div>
    </main>
</body>
</html>