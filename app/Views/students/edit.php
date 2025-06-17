<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            padding: 30px;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        form label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Student</h2>
    <form method="post" action="<?= site_url('students/update/' . $student['id']) ?>">
        <label>Full Name:</label>
        <input type="text" name="full_name" value="<?= esc($student['full_name']) ?>" required>

        <label>Course:</label>
        <input type="text" name="course" value="<?= esc($student['course']) ?>" required>

        <label>Year Level:</label>
        <input type="number" name="year_level" value="<?= esc($student['year_level']) ?>" required>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male" <?= $student['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $student['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select>

        <button type="submit">✅ Update</button>
    </form>

    <a class="back-link" href="<?= site_url('students') ?>">⟵ Back to Student List</a>
</div>

</body>
</html>
