<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enter Marks</title>
</head>

<body>
    <h3>Enter the Marks of the student</h3>
    <form action="result.php" method="POST">
        <table>
            <tr>
                <th>Subjects</th>
                <th>CA-1</th>
                <th>CA-2</th>
                <th>Final Exam</th>
            </tr>
            <tr>
                <th></th>
                <th>out of 25</th>
                <th>out of 25</th>
                <th>out of 50</th>
            </tr>
            <tr>
                <td>HTML</td>
                <td><input type="number" name="ca1html" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="ca2html" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="fehtml" min="0" max="50" step=".5" value="0"></td>
            </tr>
            <tr>
                <td>CSS</td>
                <td><input type="number" name="ca1css" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="ca2css" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="fecss" min="0" max="50" step=".5" value="0"></td>
            </tr>
            <tr>
                <td>javascript</td>
                <td><input type="number" name="ca1js" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="ca2js" min="0" max="25" step=".5" value="0"></td>
                <td><input type="number" name="fejs" min="0" max="50" step=".5" value="0"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="Submit" value="Generate Result">
    </form>
</body>

</html>