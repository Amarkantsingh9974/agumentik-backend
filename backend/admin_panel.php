

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-panel {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .admin-panel h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .admin-panel form {
            max-width: 400px;
            margin: 0 auto;
        }

        .admin-panel label {
            display: block;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .admin-panel input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .admin-panel button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 24px; /* Adjusted padding */
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        .admin-panel button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <h1>Admin Panel</h1>
        <form method="post" action="update_hero_content.php">
            <label for="title">Hero Title:</label>
            <input type="text" id="title" name="title" required><br>
            
            <label for="subtitle">Hero Subtitle:</label>
            <input type="text" id="subtitle" name="subtitle" required><br>
            
            <button type="submit">Update Hero Content</button>
        </form>
    </div>
</body>
</html>
