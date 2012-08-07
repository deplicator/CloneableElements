<!DOCTYPE html>
<html>
    <head>
        <title>Cloneable Elements Example</title>
        <link rel="stylesheet" href="default.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        <script type="text/javascript" src="../cloneableElements.js"></script>
    </head>
    <body>
        <form>
            <div class="cloneable">
                <div>
                    <p>test</p>
                    <input type="text" name="test" />
                </div>
            </div>

            <div class="cloneable">
                <div>
                    <p>another test</p>
                    <input type="text" name="test" />
                </div>
                <input type="button" class="btnAdd" value="add vehicle" />
                    <input type="button" class="btnDel" value="remove vehicle" />
            </div>
        </form>
    </body>
</html>