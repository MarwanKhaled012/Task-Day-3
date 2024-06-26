<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'track' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'track' => 'CMS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'track' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'track' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'track' => 'PHP'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1>Application name : php class registered </h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $key => $student) : ?>
                <tr>
                    <td <?php if ($key == 0 || $key == 3) : ?> class="vip" <?php endif; ?>>
                        <?php echo $student['name']; ?>
                    </td>

                    <td <?php if ($key == 0 || $key == 3) : ?> class="vip" <?php endif; ?>>
                        <?php echo $student['email']; ?>
                    </td>

                    <td <?php if ($key == 0 || $key == 3) : ?> class="vip" <?php endif; ?>>
                        <?php echo $student['track']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>