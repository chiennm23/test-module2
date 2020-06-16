<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>ADD NEW CLASS</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Type:</td>
                        <td> <select name="type">
                                <option
                                        value="Điện thoại">Điện thoại</option>
                                <option
                                        value="Máy tính">Máy tính</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Spice:</td>
                        <td><input type="text" name="spice" required></td>
                    </tr>
                    <tr>
                        <td>Amount:</td>
                        <td><input type="text" name="amount" required></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="text" name="date" required></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><textarea type="text" name="description" required></textarea></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">ADD</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
