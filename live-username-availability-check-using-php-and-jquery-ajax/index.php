<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Live Demo: Live username availability check using PHP, Ajax and jQuery</title>
        <meta content='Live Demo: Live username availability check using PHP, Ajax and jQuery' name='description' />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        
        <style>
            .err_red{
                color: red;
            }
            .succ_green{
                color: green;
            }
        </style>
    </head>
    <body>
        <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">Live Demo: Live username availability check using PHP, Ajax and jQuery</h2>
                <div>
                    <form class="form-horizontal" onsubmit="return false;">
                        <div class="form-group">
                            <label>Name <span class="req">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            <div class="error" id="error_name"></div>
                        </div>
                        <div class="form-group">
                            <label>Username <span class="req">*</span></label>
                            <input type="text" id="username" name="username" autocomplete="off" class="form-control" placeholder="Username">
                            <div class="help-block">Try scott, tiger or mosh, these usernames are already in database</div>
                            <div class="error" id="error_username"></div>
                        </div>
                        <div class="form-group">
                            <label>Mobile number <span class="req">*</span></label>
                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile number">
                            <div class="error" id="error_mobile"></div>
                        </div>  
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" id="submit_form" name="submit_form" value="Save"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
                        $(document).on("keyup", "#username", function () {
                            var username = $(this).val();
                            if (username == "") {
                                return false;
                            }
                            $.ajax({
                                url: 'check.php',
                                type: 'POST',
                                data: {username: username},
                                dataType: 'json',
                                success: function (data) {
                                    if (data.result == "success") {
                                        $("#error_username").html(data.msg);
                                        $("#error_username").removeClass('err_red').addClass('succ_green');
                                    } else {
                                        $("#error_username").html(data.msg);
                                        $("#error_username").removeClass('succ_green').addClass('err_red');
                                    }
                                }
                            });
                        });
        </script>
    </body>
</html>