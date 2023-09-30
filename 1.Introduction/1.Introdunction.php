<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load-Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
            </td>
        </tr>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#load-button").on("click", function(e) {
                $.ajax({
                    url: "ajax-load.php",
                    type: "post",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>