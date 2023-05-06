<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Onboarding</title>
</head>
<body>
    
    <h1 style="font-family:verdana;"> Customer Onboarding </h1>
    <form action="connect.php" method="post">
        <table>
            <tr>
                <td><label for="labelgname">Given Name:</label></td>
                <td><input type="text" id="gname" name="gname" required></td>
            </tr>
            <tr>
                <td><label for="labelsname">Surname:</label></td>
                <td><input type="text" id="sname" name="sname" required></td>
            </tr>
            <tr>
                <td><label for="labelbday">Date of Birth:</label></td>
                <td><input type="date" id="bday" name="bday" required></td>
            </tr>
            <tr>
                <td><label for="labelnic">NIC:</label></td>
                <td><input type="text" id="nic" name="nic" required></td>
            </tr>
            <tr>
                <td><label for="labelgender">Gender:</label></td>
                <td>
                    <select name="gender" id="gender">
                        <option value="male" selected="selected">Male</option>
                        <option value="female">Female</option>
                        <option value="intersex">Intersex</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="labelemail">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="labelpnumber">Phone Number:</label></td>
                <td><input type="text" id="pnumber" name="pnumber" required></td>
            </tr>
            <tr>
                <td><label for="labelatype">Account Type:</label></td>
                <td>
                    <select name="atype" id="atype">
                        <option value="savings" selected="selected">Savings</option>
                        <option value="savingsplus">Savings Plus</option>
                        <option value="current">Current</option>
                    </select>
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit">
                    <input type="reset" name="reset" id="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>