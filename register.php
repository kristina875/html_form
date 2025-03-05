<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
    <style>
        /* Basic Styling - Replace with your own CSS */
        body {
            font-family: sans-serif;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Add Student</h1>
    <form action="action_page.php" method="POST">
        <table>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Full Name" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" id="male"> <label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female" checked> <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country" required>
                        <option value="" disabled selected>Select Country</option>
                        <option value="PH">Philippines</option>
                        <option value="AUS">Australia</option>
                        <option value="US">United States</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Save" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


