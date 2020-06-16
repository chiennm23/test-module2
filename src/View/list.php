<div class="" style="width: 980px">
    <div class="row">
        <div class="col-12 col-md-8">
            <a class="btn btn-primary  mt-10" href="./index.php?page=add-product">ADD NEW PRODUCT</a>
        </div>
        <div class="col-12 col-md-4">
            <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-product" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <table style="background: white" class="table mt-3 table-hover border border-danger">
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
                <td><a><?php echo $product->getName() ?></a></td>
                <td><a><?php echo $product->getType() ?></a></td>
                <td><a><?php echo $product->getSpice() ?></a></td>
                <td><a><?php echo $product->getAmount() ?></a></td>
                <td><a><?php echo $product->getDate() ?></a></td>
                <td><?php echo $product->getDescription() ?></td>
                <td>
                    <a onclick=" return confirm('Ban co chac chan muon xoa?')" class="btn btn-outline-danger delete text-decoration-none" href="./index.php?page=delete-product&id=<?php echo $product->getId() ?>">Delete</a>
                    <a onclick=" return confirm('Ban co chac chan muon chinh sua?')" class="btn btn-outline-primary update text-decoration-none" href="./index.php?page=edit-product&id=<?php echo $product->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

