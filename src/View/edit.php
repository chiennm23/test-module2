<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>UPDATE PRODUCT</h1>
        </div>
        <div class="col-12">
            <form method="post" action="./index.php?page=edit-product">
                <table>
                    <tr>
                        <td>Id:</td>
                        <td><input type="text" name="id" disabled value="<?php echo $product->getId() ?>"></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?php echo $product->getName() ?>"></td>
                    </tr>
                    <tr>
                        <td>Type:</td>
                        <td><select name="type">
                                <option
                                    <?php if ($product->getType() == 'Điện thoại'): ?>
                                        selected
                                    <?php endif; ?>
                                        value="Điện thoại">Điện thoại
                                </option>
                                <option
                                    <?php if ($product->getType() == 'Máy tính'): ?>
                                        selected
                                    <?php endif; ?>
                                        value="Máy tính">Máy tính
                                </option>
                            </select>
                    </tr>
                    <tr>
                        <td>Spice:</td>
                        <td><input type="text" name="spice" value="<?php echo $product->getSpice() ?>"></td>
                    </tr>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="text" name="amount" value="<?php echo $product->getAmount() ?>"></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="text" name="date" value="<?php echo $product->getDate() ?>"></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><textarea name="description"><?php echo $product->getDescription() ?></textarea></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
