<!DOCTYPE html>
<html>
    <head>
        <title>HOSPITAL DETAILS</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="container1">
            <form action="hospitalinfoupdateback.php", method="post">
                <div class="class2"><h2>Update Information</h2></div>

                <div class="class2"><label for="hname">hospital id</label>
                <input type="number" placeholder="enter hospital name" name="hid" id="hname"></div>

                <div class="class2"><label for="hname">hospital name</label>
                <input type="text" placeholder="enter hospital name" name="hname" id="hname"></div>

                <div class="class2"><label for="haddr">hospital address</label>
                <input type="text" placeholder="enter hospital address" name="haddr" id="haddr"></div>

                <div class="class2"><label for="harea">hospital Area</label>
                <input type="text" placeholder="enter hospital area" name="harea" id="harea"></div>
           
                <div class="class2"><label for="htime">hospital time</label>
                <input type="text" placeholder="enter hospital time" name="htime" id="htime"></div>

                <div class="class2"><label for="hphone">hospital phone</label>
                <input type="number" placeholder="enter hospital number" name="hphone" id="hphone"></div>

                <input type="submit" value="Update" name="insert">
            </form>
        </div>
    </body>
</html>