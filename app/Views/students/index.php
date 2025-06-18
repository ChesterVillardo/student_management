<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .top-bar form {
            display: flex;
            gap: 10px;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button, .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover, .btn:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        .action-links a {
            margin: 0 5px;
            text-decoration: none;
            color: #007bff;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student List</h2>

    <div class="top-bar">
        <a class="btn" href="<?= site_url('students/create') ?>">➕ Add Student</a>

        <form method="get" action="<?= site_url('students') ?>">
            <input type="text" name="search" placeholder="Search..." value="<?= esc($search ?? '') ?>" />
            <button type="submit">🔍 Search</button>
            <a class="btn" href="<?= site_url('students') ?>">⟳ Reset</a>
        </form>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $s): ?>
    <tr>
        <td><?= esc($s['id']) ?></td>
        <td>
            <?php if (!empty($s['profileimg'])): ?>
                <img src="<?= base_url('uploads/' . $s['profileimg']) ?>" alt="Profile" width="50" height="50" style="border-radius:50%;">
            <?php else: ?>
                <span>No Image</span>
            <?php endif; ?>
        </td>
        <td><?= esc($s['full_name']) ?></td>
        <td><?= esc($s['course']) ?></td>
        <td><?= esc($s['year_level']) ?></td>
        <td><?= esc($s['gender']) ?></td>
        <td class="action-links">
            <a href="<?= site_url('students/edit/' . $s['id']) ?>">✏️ Edit</a> |
            <a href="<?= site_url('students/delete/' . $s['id']) ?>" onclick="return confirm('Are you sure?')">🗑️ Delete</a>
        </td>
    </tr>
<?php endforeach; ?>

    </table>
</div>

</body>
</html>
