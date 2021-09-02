<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>



    <div id="id01" class="modal">


        <form class="modal-content animate" action="<?php echo base_url('home/add')?>" method="post"
            enctype="multipart/form-data">
            <div align="center" style="color:red">
                <h2>Register Form</h2>
                <label>Name</label>
                <input type="text" name="name"><br>
                <label>Phone</label>
                <input type="number" name="phone"><br>
                <label>Email</label>
                <input type="email" name="email_id"><br>
                <label>DOB</label>
                <input type="date" name="dob"><br>
                <label>Genter</label><br>
                <input type="radio" name="genter" value="1">Male<br>
                <input type="radio" name="genter" value="2">Femail<br><br>
                <label>Skill</label>
                <input type="checkbox" name="skill" value="1">PHP
                <input type="checkbox" name="skill" value="2">Java
                <input type="checkbox" name="skill" value="3">C<br><br>
                <label>Degree</label>
                <select name="degree">
                    <option value="1">MCA</option>
                    <option value="2">BE</option>
                    <option value="3">ME</option>
                </select><br><br>
                <label>Photo</label>
               <input type="file" name="photo"><br><br>
                <input type="submit" name="submit">



            </div>


        </form>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>

</html>