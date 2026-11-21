
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Portal - 3-Tier Demo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .wrap {
            max-width: 860px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #232f3e;
        }

        .tag {
            color: #666;
            font-size: 13px;
        }

        input, select {
            padding: 8px;
            margin: 4px;
            width: 200px;
        }

        button {
            padding: 9px 18px;
            background: #ff9900;
            border: 0;
            color: #fff;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #232f3e;
            color: #fff;
        }

        .msg {
            color: #2e7d32;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="wrap">

        <h1>Student Registration Portal</h1>

        <p class="tag">
            App tier: <?= htmlspecialchars($server) ?> |
            Data tier: Amazon RDS for MySQL
        </p>

        <?php if ($message): ?>
            <p class="msg">
                <?= htmlspecialchars($message) ?>
            </p>
        <?php endif; ?>

        <form method="post" action="index.php">

            <input
                name="name"
                placeholder="Full name"
                required
            >

            <input
                name="email"
                placeholder="Email"
                type="email"
                required
            >

            <select name="course">
                <option>AWS Solutions Architect</option>
                <option>Microsoft Azure AZ-104</option>
                <option>Docker &amp; Kubernetes</option>
                <option>Red Hat RHCSA</option>
            </select>

            <button type="submit">
                Register
            </button>

        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Registered</th>
            </tr>

            <?php while ($r = $rows->fetch_assoc()): ?>
                <tr>
                    <td><?= $r['id'] ?></td>

                    <td>
                        <?= htmlspecialchars($r['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($r['email']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($r['course']) ?>
                    </td>

                    <td><?= $r['created_at'] ?></td>
                </tr>
            <?php endwhile; ?>

        </table>

    </div>
</body>
</html>

<?php
$conn->close();
?>
