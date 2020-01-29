<?php
if(isset($_POST['submit'])){
    $no = $_POST['no_teachers'];
    $teachers = array();
    for($i=1 ; $i<$no+1 ; $i++){
        $teachers[$i] = "teacher".$i;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TIMETABLE</title>
</head>
<body>
    <div class="form">
        <form action="main.php" method="post">
        <div class="row formlike">
            <div class="col-sm-3">
        <h3>Class 8 Teachers</h3><hr>
        <p class="form-group">
            <p><label for="maths8-teacher">MATHS</label>
            <select name="maths8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select></p>
        </p>    
        <p class="form-group">
            <label for="eng8-teacher">ENG</label>
            <select name="eng8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="sci8-teacher">SCI</label>
            <select name="sci8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="kis8-teacher">KIS</label>
            <select name="kis8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="ss8-teacher">SST</label>
            <select name="ss8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="cre8-teacher">CRE</label>
            <select name="cre8-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        </div>
<div class="col-sm-3">
<h5>Morning Preferences</h5><hr>
        <label for="math8-morning">MATHS</label>
        <input min="1" max= "6" type="number" name="math8-morning" id=""><br>
        <label for="eng8-morning">ENG</label>
        <input min="1" max= "6" type="number" name="eng8-morning" id=""><br>
        <label for="sci8-morning">SCI</label>
        <input min="1" max= "6" type="number" name="sci8-morning" id=""><br>
        <label for="kis8-morning">KIS</label>
        <input min="1" max= "6" type="number" name="kis8-morning" id=""><br>
        <label for="ss8-morning">SST</label>
        <input min="1" max= "6" type="number" name="ss8-morning" id=""><br>
        <label for="cre8-morning">CRE</label>
        <input min="1" max= "6" type="number" name="cre8-morning" id=""><br>
</div>
<div class="col-sm-3">
<h5>Mid-morning Preferences</h5><hr>
        <label for="math8-mid">MAT</label>
        <input min="1" max= "6" type="number" name="math8-mid" id=""><br>
        <label for="eng8-mid">ENG</label>
        <input min="1" max= "6" type="number" name="eng8-mid" id=""><br>
        <label for="sci8-mid">SCI</label>
        <input min="1" max= "6" type="number" name="sci8-mid" id=""><br>
        <label for="kis8-mid">KIS</label>
        <input min="1" max= "6" type="number" name="kis8-mid" id=""><br>
        <label for="ss8-mid">SST</label>
        <input min="1" max= "6" type="number" name="ss8-mid" id=""><br>
        <label for="cre8-mid">CRE</label>
        <input min="1" max= "6" type="number" name="cre8-mid" id=""><br>
</div>

<div class="col-sm-3">
<h5>Evening Preferences</h5><hr>
        <label for="Math8-ev">MAT</label>
        <input min="1" max= "6" type="number" name="math8-ev" id=""><br>
        <label for="eng8-ev">ENG</label>
        <input min="1" max= "6" type="number" name="eng8-ev" id=""><br>
        <label for="sci8-ev">SCI</label>
        <input min="1" max= "6" type="number" name="sci8-ev" id=""><br>
        <label for="kis8-ev">KIS</label>
        <input min="1" max= "6" type="number" name="kis8-ev" id=""><br>
        <label for="ss8-ev">SST</label>
        <input min="1" max= "6" type="number" name="ss8-ev" id=""><br>
        <label for="cre8-ev">CRE</label>
        <input min="1" max= "6" type="number" name="cre8-ev" id=""><br>
</div>
</div>

<div class="row formlike">
            <div class="col-sm-3">
        <h3>Class 7 Teachers</h3><hr>
        <p class="form-group">
            <p><label for="maths7-teacher">MATHS</label>
            <select name="maths7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select></p>
        </p>    
        <p class="form-group">
            <label for="eng7-teacher">ENG</label>
            <select name="eng7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="sci7-teacher">SCI</label>
            <select name="sci7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="kis7-teacher">KIS</label>
            <select name="kis7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="ss7-teacher">SST</label>
            <select name="ss7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="cre7-teacher">CRE</label>
            <select name="cre7-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        </div>
<div class="col-sm-3">
<h5>Morning Preferences</h5><hr>
        <label for="math7-morning">MATHS</label>
        <input min="1" max= "6" type="number" name="math7-morning" id=""><br>
        <label for="eng7-morning">ENG</label>
        <input min="1" max= "6" type="number" name="eng7-morning" id=""><br>
        <label for="sci7-morning">SCI</label>
        <input min="1" max= "6" type="number" name="sci7-morning" id=""><br>
        <label for="kis7-morning">KIS</label>
        <input min="1" max= "6" type="number" name="kis7-morning" id=""><br>
        <label for="ss7-morning">SST</label>
        <input min="1" max= "6" type="number" name="ss7-morning" id=""><br>
        <label for="cre7-morning">CRE</label>
        <input min="1" max= "6" type="number" name="cre7-morning" id=""><br>
</div>
<div class="col-sm-3">
<h5>Mid-morning Preferences</h5><hr>
        <label for="math7-mid">MAT</label>
        <input min="1" max= "6" type="number" name="math7-mid" id=""><br>
        <label for="eng7-mid">ENG</label>
        <input min="1" max= "6" type="number" name="eng7-mid" id=""><br>
        <label for="sci7-mid">SCI</label>
        <input min="1" max= "6" type="number" name="sci7-mid" id=""><br>
        <label for="kis7-mid">KIS</label>
        <input min="1" max= "6" type="number" name="kis7-mid" id=""><br>
        <label for="ss7-mid">SST</label>
        <input min="1" max= "6" type="number" name="ss7-mid" id=""><br>
        <label for="cre7-mid">CRE</label>
        <input min="1" max= "6" type="number" name="cre7-mid" id=""><br>
</div>

<div class="col-sm-3">
<h5>Evening Preferences</h5><hr>
        <label for="Math7-ev">MAT</label>
        <input min="1" max= "6" type="number" name="math7-ev" id=""><br>
        <label for="eng7-ev">ENG</label>
        <input min="1" max= "6" type="number" name="eng7-ev" id=""><br>
        <label for="sci7-ev">SCI</label>
        <input min="1" max= "6" type="number" name="sci7-ev" id=""><br>
        <label for="kis7-ev">KIS</label>
        <input min="1" max= "6" type="number" name="kis7-ev" id=""><br>
        <label for="ss7-ev">SST</label>
        <input min="1" max= "6" type="number" name="ss7-ev" id=""><br>
        <label for="cre7-ev">CRE</label>
        <input min="1" max= "6" type="number" name="cre7-ev" id=""><br>
</div>
</div>

<div class="row formlike">
            <div class="col-sm-3">
        <h3>Class 6 Teachers</h3><hr>
        <p class="form-group">
            <p><label for="maths6-teacher">MATHS</label>
            <select name="maths6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select></p>
        </p>    
        <p class="form-group">
            <label for="eng6-teacher">ENG</label>
            <select name="eng6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="sci6-teacher">SCI</label>
            <select name="sci6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="kis6-teacher">KIS</label>
            <select name="kis6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="ss6-teacher">SST</label>
            <select name="ss6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="cre6-teacher">CRE</label>
            <select name="cre6-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        </div>
<div class="col-sm-3">
<h5>Morning Preferences</h5><hr>
        <label for="math6-morning">MATHS</label>
        <input min="1" max= "6" type="number" name="math6-morning" id=""><br>
        <label for="eng6-morning">ENG</label>
        <input min="1" max= "6" type="number" name="eng6-morning" id=""><br>
        <label for="sci6-morning">SCI</label>
        <input min="1" max= "6" type="number" name="sci6-morning" id=""><br>
        <label for="kis6-morning">KIS</label>
        <input min="1" max= "6" type="number" name="kis6-morning" id=""><br>
        <label for="ss6-morning">SST</label>
        <input min="1" max= "6" type="number" name="ss6-morning" id=""><br>
        <label for="cre6-morning">CRE</label>
        <input min="1" max= "6" type="number" name="cre6-morning" id=""><br>
</div>
<div class="col-sm-3">
<h5>Mid-morning Preferences</h5><hr>
        <label for="math6-mid">MAT</label>
        <input min="1" max= "6" type="number" name="math6-mid" id=""><br>
        <label for="eng6-mid">ENG</label>
        <input min="1" max= "6" type="number" name="eng6-mid" id=""><br>
        <label for="sci6-mid">SCI</label>
        <input min="1" max= "6" type="number" name="sci6-mid" id=""><br>
        <label for="kis6-mid">KIS</label>
        <input min="1" max= "6" type="number" name="kis6-mid" id=""><br>
        <label for="ss6-mid">SST</label>
        <input min="1" max= "6" type="number" name="ss6-mid" id=""><br>
        <label for="cre6-mid">CRE</label>
        <input min="1" max= "6" type="number" name="cre6-mid" id=""><br>
</div>

<div class="col-sm-3">
<h5>Evening Preferences</h5><hr>
        <label for="Math6-ev">MAT</label>
        <input min="1" max= "6" type="number" name="math6-ev" id=""><br>
        <label for="eng6-ev">ENG</label>
        <input min="1" max= "6" type="number" name="eng6-ev" id=""><br>
        <label for="sci6-ev">SCI</label>
        <input min="1" max= "6" type="number" name="sci6-ev" id=""><br>
        <label for="kis6-ev">KIS</label>
        <input min="1" max= "6" type="number" name="kis6-ev" id=""><br>
        <label for="ss6-ev">SST</label>
        <input min="1" max= "6" type="number" name="ss6-ev" id=""><br>
        <label for="cre6-ev">CRE</label>
        <input min="1" max= "6" type="number" name="cre6-ev" id=""><br>
</div>
</div>

<div class="row formlike">
            <div class="col-sm-3">
        <h3>Class 5 Teachers</h3><hr>
        <p class="form-group">
            <p><label for="maths5-teacher">MATHS</label>
            <select name="maths5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select></p>
        </p>    
        <p class="form-group">
            <label for="eng5-teacher">ENG</label>
            <select name="eng5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="sci5-teacher">SCI</label>
            <select name="sci5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="kis5-teacher">KIS</label>
            <select name="kis5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="ss5-teacher">SST</label>
            <select name="ss5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="cre5-teacher">CRE</label>
            <select name="cre5-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        </div>
<div class="col-sm-3">
<h5>Morning Preferences</h5><hr>
        <label for="math5-morning">MATHS</label>
        <input min="1" max= "6" type="number" name="math5-morning" id=""><br>
        <label for="eng5-morning">ENG</label>
        <input min="1" max= "6" type="number" name="eng5-morning" id=""><br>
        <label for="sci5-morning">SCI</label>
        <input min="1" max= "6" type="number" name="sci5-morning" id=""><br>
        <label for="kis5-morning">KIS</label>
        <input min="1" max= "6" type="number" name="kis5-morning" id=""><br>
        <label for="ss5-morning">SST</label>
        <input min="1" max= "6" type="number" name="ss5-morning" id=""><br>
        <label for="cre5-morning">CRE</label>
        <input min="1" max= "6" type="number" name="cre5-morning" id=""><br>
</div>
<div class="col-sm-3">
<h5>Mid-morning Preferences</h5><hr>
        <label for="math5-mid">MAT</label>
        <input min="1" max= "6" type="number" name="math5-mid" id=""><br>
        <label for="eng5-mid">ENG</label>
        <input min="1" max= "6" type="number" name="eng5-mid" id=""><br>
        <label for="sci5-mid">SCI</label>
        <input min="1" max= "6" type="number" name="sci5-mid" id=""><br>
        <label for="kis5-mid">KIS</label>
        <input min="1" max= "6" type="number" name="kis5-mid" id=""><br>
        <label for="ss5-mid">SST</label>
        <input min="1" max= "6" type="number" name="ss5-mid" id=""><br>
        <label for="cre5-mid">CRE</label>
        <input min="1" max= "6" type="number" name="cre5-mid" id=""><br>
</div>

<div class="col-sm-3">
<h5>Evening Preferences</h5><hr>
        <label for="Math5-ev">MAT</label>
        <input min="1" max= "6" type="number" name="math5-ev" id=""><br>
        <label for="eng5-ev">ENG</label>
        <input min="1" max= "6" type="number" name="eng5-ev" id=""><br>
        <label for="sci5-ev">SCI</label>
        <input min="1" max= "6" type="number" name="sci5-ev" id=""><br>
        <label for="kis5-ev">KIS</label>
        <input min="1" max= "6" type="number" name="kis5-ev" id=""><br>
        <label for="ss5-ev">SST</label>
        <input min="1" max= "6" type="number" name="ss5-ev" id=""><br>
        <label for="cre5-ev">CRE</label>
        <input min="1" max= "6" type="number" name="cre5-ev" id=""><br>
</div>
</div>

<div class="row formlike">
            <div class="col-sm-3">
        <h3>Class 4 Teachers</h3><hr>
        <p class="form-group">
            <p><label for="maths4-teacher">MATHS</label>
            <select name="maths4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select></p>
        </p>    
        <p class="form-group">
            <label for="eng4-teacher">ENG</label>
            <select name="eng4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="sci4-teacher">SCI</label>
            <select name="sci4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="kis4-teacher">KIS</label>
            <select name="kis4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="ss4-teacher">SST</label>
            <select name="ss4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        <p class="form-group">
            <label for="cre4-teacher">CRE</label>
            <select name="cre4-teacher">
            <?php
            foreach($teachers as $key => $value)
            echo "<option value='$teachers[$key]'>".$teachers[$key]. "</option>";
            ?>
            </select>
        </p>
        </div>
<div class="col-sm-3">
<h5>Morning Preferences</h5><hr>
        <label for="math4-morning">MATHS</label>
        <input min="1" max= "6" type="number" name="math4-morning" id=""><br>
        <label for="eng4-morning">ENG</label>
        <input min="1" max= "6" type="number" name="eng4-morning" id=""><br>
        <label for="sci4-morning">SCI</label>
        <input min="1" max= "6" type="number" name="sci4-morning" id=""><br>
        <label for="kis4-morning">KIS</label>
        <input min="1" max= "6" type="number" name="kis4-morning" id=""><br>
        <label for="ss4-morning">SST</label>
        <input min="1" max= "6" type="number" name="ss4-morning" id=""><br>
        <label for="cre4-morning">CRE</label>
        <input min="1" max= "6" type="number" name="cre4-morning" id=""><br>
</div>
<div class="col-sm-3">
<h5>Mid-morning Preferences</h5><hr>
        <label for="math4-mid">MAT</label>
        <input min="1" max= "6" type="number" name="math4-mid" id=""><br>
        <label for="eng4-mid">ENG</label>
        <input min="1" max= "6" type="number" name="eng4-mid" id=""><br>
        <label for="sci4-mid">SCI</label>
        <input min="1" max= "6" type="number" name="sci4-mid" id=""><br>
        <label for="kis4-mid">KIS</label>
        <input min="1" max= "6" type="number" name="kis4-mid" id=""><br>
        <label for="ss4-mid">SST</label>
        <input min="1" max= "6" type="number" name="ss4-mid" id=""><br>
        <label for="cre4-mid">CRE</label>
        <input min="1" max= "6" type="number" name="cre4-mid" id=""><br>
</div>

<div class="col-sm-3">
<h5>Evening Preferences</h5><hr>
        <label for="Math4-ev">MAT</label>
        <input min="1" max= "6" type="number" name="math4-ev" id=""><br>
        <label for="eng4-ev">ENG</label>
        <input min="1" max= "6" type="number" name="eng4-ev" id=""><br>
        <label for="sci4-ev">SCI</label>
        <input min="1" max= "6" type="number" name="sci4-ev" id=""><br>
        <label for="kis4-ev">KIS</label>
        <input min="1" max= "6" type="number" name="kis4-ev" id=""><br>
        <label for="ss4-ev">SST</label>
        <input min="1" max= "6" type="number" name="ss4-ev" id=""><br>
        <label for="cre4-ev">CRE</label>
        <input min="1" max="6" type="number" name="cre4-ev" id=""><br>
</div>
</div>
 
<div class="row">
<label for="size" style="margin-left:35%;">Number of teachers </label>
<br>
    <select name="size" id="" style="margin-left:35%;">
       <?php echo "<option value='".sizeof($teachers). "'>".sizeof($teachers)."</option>"; ?>
    </select>
</div>
 
<div class="row">
<button type="submit" class="btn btn-primary" style="margin-left:35%; width:35em;" value="submit"  name="submit">Submit All</button>
</div>

</form>
</div>
</body>
</html>