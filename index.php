<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS from a CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <br><br>
      <div class="container card shoadow p-3">
          <h1 class="text-center my-4">PHP-AJAX Data Auto save Database</h1>
          <input class="form-control" type="text" placeholder="Name"
           id="name">
           <br>
           <input class="form-control" type="text" placeholder="Email"
           id="email">
           <input type="hidden" name="" id="id">
           <div class="" id="autosave"></div>
      </div>

   <!-- Your HTML and JavaScript code -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        function autosave() {
            var name = $('#name').val();
            var email = $('#email').val();
            var id = $('#id').val(); 
            if (name != '' && email != '') {
                $.ajax({
                    url: 'save.php', 
                    method: "POST",
                    data: {name: name, email: email, id: id},
                    success: function(data) {
                        if (data != '') {
                            $('#id').val(data);
                        }
                        $('#autosave').text("Post saved as draft");
                        setTimeout(() => {
                            $('#autosave').text('');
                        }, 2000);
                    }
                }); 
            }
        }

        setInterval(function() {
            autosave();
        }, 4000);
    });
</script>

</body>
</html>