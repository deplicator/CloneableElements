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
    
                    <span class="cloneable" limit="5">
                        <div id="adult" class="occupant">
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
    
                            <div class="cloneable">
                                <div id="wut" class="mowut">
                                    <label>Phone</label>
                                    <input type="text" name="phone" />
                                </div>
                                <input type="button" class="btnAdd" value="add phone" />
                                <input type="button" class="btnDel" value="remove phone" />
                            </div>
    
                            <div>
                                <label>Email</label>
                                <input type="text" name="email" />
                            </div>
                        </div>

                        <input type="button" class="btnAdd" value="add adult" />
                        <input type="button" class="btnDel" value="remove adult" />
                    </span>
                </fieldset>

                <fieldset class="infield">
                    <legend>Children</legend>
                    
                    <span class="cloneable" limit="10">
                        <div id="childInfo" class="occupant">
                            <div>
                                <label>First & Last Name</label>
                                <input type="text" name="childname" />
                            </div>
    
                            <div>
                                <label>Birth date</label>
                                <input type="text" name="childbirthdate" />
                            </div>
    
                            <div>
                                <label>Sex</label>
                                <input type="radio" name="sex" value="male" />Male<br />
                                <input type="radio" name="sex" value="female" />Female
                            </div>
                        </div>
    
                        <input type="button" class="btnAdd" value="add child" />
                        <input type="button" class="btnDel" value="remove child" />
                    </span>
                    
                </fieldset>

            </fieldset>

            <fieldset>
                <legend>Cars</legend>
                
                <span class="cloneable" limit="4">
                    <div class="carInfo">
                        <div>
                            <label>Plate Number</label>
                            <input type="text" name="platenum" />
                        </div>
    
                        <div>
                            <label>Make</label>
                            <select name="car">
                                <option value="Ford">Ford</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Chevy">Chevy</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>

                    <input type="button" class="btnAdd" value="add vehicle" />
                    <input type="button" class="btnDel" value="remove vehicle" />
                </span>

            </fieldset>
            
            <div id="submit">
                <input type="submit" value="Submit Form" />
            </div>
            
        </form>

    </body>
</html>
