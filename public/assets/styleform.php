<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        nav {
            background-color: #333;
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 100%;
            max-width: 800px;
        }

        form, .task-list {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
        }

        form {
            max-width: 300px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        form span {
            display: block;
            margin-top: 10px;
        }

        form a {
            color: #4CAF50;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }

        .task-list h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .task-list ul {
            list-style-type: none;
            padding: 0;
        }

        .task-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .task-list li:last-child {
            border-bottom: none;
        }

        .task-list .task-text {
            font-size: 16px;
            color: #555;
        }

        .task-list .edit-link {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            padding: 5px 10px;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .task-list .edit-link:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>