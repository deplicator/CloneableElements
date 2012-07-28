<!DOCTYPE html>
<html>
    <head>
        <title>Cloneable Elements Example</title>
        <link rel="stylesheet" href="default.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
        <script type="text/javascript" src="../cloneableElements.js"></script>
    </head>
    <body>
        <form action="submit.php" method="post">
            <h1>Cloneable Elements Example</h1>
            <fieldset>
                <legend>Occupants</legend>

                <fieldset class="infield">
                    <legend>Adults</legend>

                    <div id="adultInfo" class="occupant cloneable" limit="5">

                        <div>
                            <label>First Name</label>
                            <input type="text" name="firstname" />
                        </div>

                        <div>
                            <label>Middle Name</label>
                            <input type="text" name="middlename" />
                        </div>

                        <div>
                            <label>Last Name</label>
                            <input type="text" name="lastname" />
                        </div>

                        <div>
                            <label>Birth date</label>
                            <input type="text" name="birthdate" />
                        </div>

                        <div>
                            <label>Phone</label>
                            <input type="text" name="phone" />
                        </div>

                        <div>
                            <label>Email</label>
                            <input type="text" name="email" />
                        </div>
                    </div>

                    <div class="buttons">
                        <input type="button" class="btnAdd" value="add another adult" />
                        <input type="button" class="btnDel" value="remove adult" />
                    </div>
                </fieldset>




                <fieldset class="infield">
                    <legend>Children</legend>

                    <div id="childInfo" class="occupant cloneable" limit="10">

                        <div>
                            <label>First & Last Name</label>
                            <input type="text" name="name" />
                        </div>

                        <div>
                            <label>Birthday</label>
                            <input type="text" name="birthday" />
                        </div>

                        <div>
                            <label>Sex</label>
                            <input type="radio" name="sex" value="male" /> Male<br />
                            <input type="radio" name="sex" value="female" /> Female
                        </div>

                    </div>

                    <div class="buttons">
                        <input type="button" class="btnAdd" value="add another child" />
                        <input type="button" class="btnDel" value="remove child" />
                    </div>
                </fieldset>

            </fieldset>

            <fieldset>
                <legend>Cars</legend>

                <div class="carInfo cloneable" limit="4">
                    <div>
                        <label>Plate Number</label>
                        <input type="text" name="platenum" />
                    </div>

                    <div>
                        <label>Make</label>
                        <select name="car">
                            <option value="volvo">Ford</option>
                            <option value="saab">Dodge</option>
                            <option value="mercedes">Chevy</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                </div>


                <div class="buttons">
                    <input type="button" class="btnAdd" value="add another vehicle" />
                    <input type="button" class="btnDel" value="remove vehicle" />
                </div>

            </fieldset>

            <input type="submit" value="Submit" />
        </form>

    </body>
</html>