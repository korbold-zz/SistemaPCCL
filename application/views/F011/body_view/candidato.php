<div class="table-responsive">

<table width="100$" border="1">
    <tbody>
        <tr>
            <?php
            foreach ($DATOS as $m) {
                ?>
                <td><?= $m->ID_PERSONA ?><?php echo ' '; ?>                          
                    <?= $m->NOMBRES ?> <?php echo ' '; ?> <?= $m->APELLIDO_PATERNO ?> <?php echo ' '; ?><?= $m->APELLIDO_MATERNO ?> <?php echo ' '; ?>

                </td>
                <?php } ?>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>