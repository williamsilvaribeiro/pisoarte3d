<!DOCTYPE html>
<html lang="pt" class="app">
<head>
    <title>Piso Arte 3D</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Interior Design Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <?php $this->load->helper('csssistema'); ?>

</head>
<body>


<?php if (isset($topo)) {
    echo $this->load->view($topo);
} ?>

<?php if (isset($slide)) {
    echo $this->load->view($slide);
} ?>

<?php if (isset($home)) {
    echo $this->load->view($home);
} ?>
<?php if (isset($rodape)) {
    echo $this->load->view($rodape);
} ?>


</body>
</html>