

<table align="center"  width="100%" >
    <tbody>
        <?php
        foreach ($ENCABEZADO as $p) {
            ?>
            <tr>
                <td align="center" width="300">
                    <img src="<?= base_url() ?>assets/imagenes/itca_logo.png "width="120" height="140"/>
                </td>
                <td align="center" style='width: 1200px'>
                    <h1> <?= $p->DESCRIPCION_HOJA ?>
                    
                    </h1>

                </td>
                <td>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<div class="space-20"></div>