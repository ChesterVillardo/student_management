<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f9;
            padding: 30px;
        }
        .form-container {
            background-color: #fff;
            max-width: 500px;
            margin: 0 auto;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 16px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New Student</h2>
    <form method="post" action="<?= site_url('students/store') ?>" enctype="multipart/form-data">
        <label>Full Name</label>
        <input type="text" name="full_name" required>

        <label>Course</label>
        <input type="text" name="course" required>

        <label>Year Level</label>
        <input type="number" name="year_level" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="">-- Select Gender --</option>
            <option>Male</option>
            <option>Female</option>
        </select>

        <label>Profile Picture (JPG/PNG, Max 2MB)</label>
        <input type="file" name="profileimg" accept=".jpg,.jpeg,.png" required>

        <button type="submit">Save</button>
    </form>
    <a class="back-link" href="<?= site_url('students') ?>">← Back to List</a>
</div>

</body>
</html>
