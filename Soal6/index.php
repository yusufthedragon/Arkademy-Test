<?php
include 'Koneksi.php';

$db = new Koneksi();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy Test</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form action="insertUser.php" method="POST">
                                <label class="control-label" for="jumlah_awal">Create New Programmer</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr />
                    <?php
                    $row = $db->getUsersData();

                    foreach($row as $data) {
                        $skills = $db->getUsersSkills($data['id']);
                        ?>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 25%;"><?= $data['name'] ?></td>
                                    <td rowspan="2">
                                        <form action="insertSkill.php" method="POST">
                                            <label class="control-label" for="jumlah_awal">Add New Skill</label>
                                            <div class="input-group">
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                                <input type="text" name="name" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </span>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?= $skills ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html>