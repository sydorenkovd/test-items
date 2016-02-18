<?php
?>

<p class=""><h2>Form</h2></p>
<form class="one" style="width: 600px; margin: 30px auto; border: 1px solid grey; padding: 20px;" name="jpd" method="post" enctype="multipart/form-data">

        <label for="name">Name</label>
    <input class="form-control" placeholder="Barac"  type="text" name="name" id="name">
    <label for="surname">Surname</label>
    <input class="form-control" placeholder="Obama"  type="text" id="surname" name="surname">
    <label for="lastname">Last Name</label>
    <input class="form-control" placeholder="Sulieman"  type="text" id="lastname" name="lastname">
    <label for="email">Email</label>
    <input class="form-control" placeholder="president@whitehouse.com"  type="email" id="email" name="email">
    <label for="phone">Tell:</label>
    <input class="form-control" placeholder="" type="text" id="phone" name="phone">
     <span class="help-block">Enter like that: (+380(50)123-123-23)</span>
    <label for="password">Password</label>
    <input class="form-control" placeholder=""  type="password" id="password" name="password">
    <span class="help-block">More than 6 symbols</span>
    <label for="password-conf">Password Again</label>
    <input class="form-control" placeholder=""  type="password" id="password-conf" name="password-conf">
    <span class="help-block">Must be equal to password</span>
    <label for="avatar">Photo</label>
    <input class="btn btn-default"  type="file" id="avatar" name="avatar">
    <input class="btn btn-success"  type="submit" id="send" name="send" value="Send">
</form>
<?php
print_r($_POST);
?>