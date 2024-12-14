<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IA 385 Honors Project</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline fallback styles (optional, only if styles.css doesn't load) */
        body {
            line-height: 2; /* Double space */
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #e3f2fd; /* Pastel blue background */
        }

        h1 {
            color: #1565c0; /* Pastel blue header */
            font-weight: normal;
            text-align: center;
        }

        h2 {
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        p, li {
            margin-bottom: 15px;
        }

        a {
            color: #42a5f5;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            border: 1px solid #ddd;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <h1>IA 385 Honor's Project</h1>
    <p>This is a secure web application that shows database and web application security.</p>
    <a href="login.php">Login</a>

    <hr>

    <h2>How It Works</h2>
    <ol>
        <li>
            <strong>Homepage:</strong> 
            <p>Displays a welcome message and provides a link to the login page. Accessible to all users.</p>
        </li>
        <li>
            <strong>Login System:</strong>
            <p>Users input their username and password. The system verifies the credentials using the database. Upon successful login, users are redirected to the dashboard.</p>
        </li>
        <li>
            <strong>Dashboard:</strong>
            <p>Accessible only to logged-in users. The dashboard content and tools depend on the user's role:</p>
            <ul>
                <li><strong>Admin:</strong> Manage users and view audit logs.</li>
                <li><strong>Editor:</strong> Edit and manage content.</li>
                <li><strong>Viewer:</strong> View content only.</li>
            </ul>
        </li>
        <li>
            <strong>Logout:</strong>
            <p>Allows users to securely log out and destroys their session.</p>
        </li>
    </ol>

    <hr>

    <h2>Security Features</h2>
    <ul>
        <li><strong>Password Hashing:</strong> Ensures passwords are securely stored in the database.</li>
        <li><strong>SQL Injection Protection:</strong> Prepared statements sanitize user input.</li>
        <li><strong>Role-Based Access Control:</strong> Enforces access restrictions based on user roles.</li>
        <li><strong>Session Management:</strong> Manages user sessions securely during login.</li>
    </ul>
</body>
</html>
