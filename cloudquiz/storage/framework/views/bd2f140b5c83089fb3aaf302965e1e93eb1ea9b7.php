<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url("https://images.alphacoders.com/133/1330654.png");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        table {
            width: 80%;
            margin: 20px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: linear-gradient(to right, #333, #555);
            color: #fff;
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.6);
        }

        a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>

<body class="antialiased">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>File Name</th>
                <th>URL</th>
                <th>Image</th>
                <th>Store In</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($file->id); ?></td>
                    <td><?php echo e($file->file_name); ?></td>
                    <td>
                        <a href="<?php echo e($file->url); ?>"><?php echo e($file->url); ?></a>
                    </td>
                    <td>
                        <img src="<?php echo e($file->url); ?>" alt="image"
                            style="width: 128px; height: 128px; object-fit: cover">
                    </td>
                    <td><?php echo e($file->store_in); ?></td>
                    <td><?php echo e($file->first_name); ?></td>
                    <td><?php echo e($file->last_name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH E:\Meng\Self-Taught\Learn Laravel\7-digitalcoean_space_laravel_10\resources\views/list.blade.php ENDPATH**/ ?>