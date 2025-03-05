<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
    <body>
        <h1> ADD STUDENT </h1>
        <form action="action_page.php" method="POST">
            <table border="1" cellpadding="20" cellspacing="5" width="60%">
                <tr> 
                    <th> Question </th>
                    <th> Answer </th>
                <tr>
                    <td> Name: </td>
                    <td> <input type="text" name="name" placeholder="Enter Full Name"value="izzy"> </td>
                </tr>
                <tr>
                    <td> Gender: </td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male <br>
                        <input type="radio" name="gender" value="female"checked> Female <br>
                    </td>
                </tr>
                <tr>
                    <td> Country: </td>
                    <td>
                        <select name="country">
                            <option value="">SELECT COUNTRY</option>
                            <option value="PH"selected>Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US">United States</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input style="padding 10px; color: blue" name="submit" type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


