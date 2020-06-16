<div class="" style="width: 980px">
    <table style="background: white" class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Type</th>
            <th>Spice</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($products as $key => $product): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->getName() ?></td>
                <td><?php echo $product->getType() ?></td>
                <td><?php echo $product->getSpice() ?></td>
                <td><?php echo $product->getAmount() ?></td>
                <td><?php echo $product->getDate() ?></td>
                <td><?php echo $product->getDescription() ?></td>
                <td>
                    <a onclick=" return confirm('Ban co chac chan muon xoa?')" class="btn btn-outline-danger delete text-decoration-none" href="./index.php?page=delete-product&id=<?php echo $product->getId() ?>">Delete</a>
                    <a onclick=" return confirm('Ban co chac chan chinh sua?')" class="btn btn-outline-primary update text-decoration-none" href="./index.php?page=edit-product&id=<?php echo $product->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
