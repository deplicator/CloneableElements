<!DOCTYPE html>
<html>
    <head>
        <title>Example Application</title>
        <link rel="stylesheet" href="default.css" />
        <script src="jquery.js" type="text/javascript"></script>
        <script src="formcreate.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Example Application</h1>
        <form action="submit.php" method="post">
            <fieldset>
                <legend>Occupants</legend>

                <fieldset>
                    <legend>Adults</legend>

                    <div id="adultInfo" class="ocupant cloneable" limit="5">

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

                    <div class="clonesibling">
                        <input type="button" class="btnAdd" value="add another adult" />
                        <input type="button" class="btnDel" value="remove adult" />
                    </div>
                </fieldset>




                <fieldset>
                    <legend>Children</legend>

                    <div id="childInfo" class="ocupant cloneable" limit="10">

                        <div>
                            <label>First & Last Name</label>
                            <input type="text" name="name" />
                        </div>

                        <div>
                            <label>Birthday</label>
                            <input type="text" name="birthday" />
                        </div>

                        <div>
                            <lable>Sex</lable>
                            <input type="radio" name="sex" value="male" /> Male<br />
                            <input type="radio" name="sex" value="female" /> Female
                        </div>

                        <select name="car">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>

                    <div class="clonesibling">
                        <input type="button" class="btnAdd" value="add another child" />
                        <input type="button" class="btnDel" value="remove child" />
                    </div>
                </fieldset>

            </fieldset>
            
            <fieldset>
                <legend>Cars</legend>
                
                <div id="carInfo" class="cloneable" limit="4">
                    <div>
                            <label>Plate Number</label>
                            <input type="text" name="platenum" />
                        </div>
                    
                        <select name="car">
                            <option value="volvo">Ford</option>
                            <option value="saab">Dodge</option>
                            <option value="mercedes">Chevy</option>
                            <option value="audi">Audi</option>
                        </select>
                </div>
                    

                    <div class="clonesibling">
                        <input type="button" class="btnAdd" value="add another child" />
                        <input type="button" class="btnDel" value="remove child" />
                    </div>
                
            </fieldset>

            <input type="submit" value="Submit" />
        </form>

    </body>
</html>
