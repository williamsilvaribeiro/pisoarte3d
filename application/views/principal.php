<?php $this->load->helper('csssistema'); ?>
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