<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Add data to CRM Bitrix</h1>

    <form action="send.php" method="post">
        <table style="text-align: center;">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="phone">Phone number</label></td>
                <td><input type="number" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><label for="mail">Mail</label></td>
                <td><input type="email" name="mail" id="mail"></td>
            </tr>

            <tr>
                <td><label for="text">Your message</label></td>
                <td><textarea name="text" id="text"></textarea></td>
            </tr>

            <tr>
                <td><button type="submit">Отправить</button></td>
                <td><button type="reset">Очистить</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
