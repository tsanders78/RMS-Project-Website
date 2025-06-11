
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>
    <form action="<?php echo $this->locationFile; ?>" method="post">
        <table style="border: 0px;">
            <tr>
                <td>
                    <select name="itemsortphp">
                        <option value="a"></option>
                        <option value="b">50</option>
                        <option value="c">75</option>
                        <option value="d">100</option>
                    </select>
                </td>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Search" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
