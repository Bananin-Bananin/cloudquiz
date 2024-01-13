<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url("https://images.alphacoders.com/133/1330654.png");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            font-size: 16px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        button {
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: linear-gradient(to right, #555, #333);
        }

        .radio-container {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        .a {
            text-align: center;
        }
    </style>
</head>

<body class="antialiased">
    <form action="/upload" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div class="">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div class=""></div>
        <input type="file" name="file" required>
        <label>Send file to</label>
        
        <div class="radio-container">
            <label for="space">Space Storage</label>
            <input style="width: auto" type="radio" name="store_in" id="space" value="spaces" required checked>
        </div>
        <button type="submit">Submit</button>
        <div class="a">
            <a href="/list">View List</a>
        </div>
    </form>
</body>

</html>
<?php /**PATH E:\Meng\Self-Taught\Learn Laravel\7-digitalcoean_space_laravel_10\resources\views/welcome.blade.php ENDPATH**/ ?>