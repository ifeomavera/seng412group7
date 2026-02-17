<html>
    <head>
        <title>PAYROLL FORM</title>
    </head>
    <body>
        <h1>SMALL COMPANY PAYROLL BY GROUP 7A</h1>
        <form method="POST">
            <table>
                
                <tr>
                    <td><p>Name: </p></td>
                    <td><input type="text" name="name" required size="20" maxlength="20"></td>
                </tr>

                <tr>
                    <td><p>Hourly Wage: </p></td>
                    <td><input type="number" name="wage" required size="20" maxlength="20"></td>
                </tr>

                <tr>
                    <td><p>Hours Worked: </p></td>
                    <td><input type="number" name="hours" required size="20" maxlength="20"></td>
                </tr>               

                <tr>
                    <td><p>Deduction: </p></td>
                    <td><input type="number" name="deduction" size="5" maxlength="20"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submitted" value="Create Slip"></td>
                </tr>

            </table>
        </form>

        <hr>

        <?php

        if (isset($_POST['submitted'])){
            $name = $_POST['name'];
            $wage = $_POST['wage'];
            $hours = $_POST['hours'];
            $deduction = $_POST['deduction'];

            $grossPay = $hours * $wage;
            $netPay = $grossPay - $deduction;

            if($deduction < 0 || $deduction > $grossPay){

                echo "Invalid Deduction Amount";

            } elseif($hours < 0){

                echo "Invalid Hours Amount";

            } elseif($wage < 0){

                echo "Invalid Wage Amount";

            }
            else{

                echo "<h3>Payslip for $name</h3>";
                echo "$name, at $wage naira per hour and working $hours hrs with deduction of $deduction naira <br><br>";
                echo "Gross Pay is: $grossPay naira <br>";
                echo "Net Pay is: $netPay naira <br>";

            }
        }
        ?>
    </body>
</html>