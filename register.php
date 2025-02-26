<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<h1>ADD STUDENT</h1>
<form action="action_page.php" method="POST">
    <table border="1">
        <tr>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td> Name: </td>
            <td> <input type="text" name="name" placeholder="Full Name" value="Izzy"></td>
        </tr>
        <tr>
            <td> Gender: </td>
            <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"checked> Female
            </td>
        </tr>
        <tr>
            <td> Country: </td>
            <td>
                <select name="country">
                    <option value="">SELECT COUNTRY<option>
                    <option value="PH" selected>Philippines</option>
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


