<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter+Materialize File Upload</title>
    <link href="<?php echo base_url("assets/css/materialize.min.css"); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Comfortaa&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card col s12">
            <div class="card-content">
                <h3 class="header text-shadow">CodeIgniter+Materialize File Upload</h3>
                <?php echo form_open_multipart('upload_file/upload');?><br>
                    <div class="col s6 m6">
                    <input type="file" name="filename" size="20">
                    </div>             
                        <div class="col s6 m6">
                            <input type="submit" value="Upload File" class="waves-effect waves-light btn blue darken-1"/>
                        </div><br>
                <?php echo form_close(); ?>
                <?php if (isset($success_msg)) { echo $success_msg; } ?>
            </div>
        </div>
    </div>
</div>
  <footer class="page-footer grey lighten-5">
      <div class="container">
       <a class="orange-text">CodeIgniter File Upload+MaterializeCSS framework.
      </a>
      </div>

</footer> 
</body>
</html>