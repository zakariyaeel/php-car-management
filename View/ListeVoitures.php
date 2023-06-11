<?php if($tab_voitures) : ?>
        <div class="m-5">
        <table class="table table-striped table-hover table-sm mt-5">
            <thead class="table-dark">
            <tr>
                <th>imatriculation</th>
                <th>marque</th>
                <th>kilometrage</th>
            </tr>
            </thead>
            <?php foreach($tab_voitures as $obj) : ?>
                <tr>
                    <td><?= $obj->immatriculation ?></td>
                    <td><?= $obj->marque ?></td>
                    <td><?= $obj->kilometrage ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    <?php endif; ?>