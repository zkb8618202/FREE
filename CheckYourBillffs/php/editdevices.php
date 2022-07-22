<?php
$fetch_devices = $con->query("SELECT * FROM `devices` WHERE `id`='{$_GET['id']}' ");
              
$data = mysqli_fetch_array($fetch_devices);
?>
<a href="?devices=true" class="btn btn-outline-primary m-3 float-end">Back</a>


<div class="container-fluid py-4 mt-6">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit <?= $data['name'] ?></h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">



                    <form action="php/scripts/udevice.php" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Device Title</label>
                                    <input type="text" value="<?= $data['name'] ?>" name="name" class="form-control">
                                    <input type="hidden" value="<?= $data['id'] ?>" name="id" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group  input-group-outline my-3">
                                    <!-- <label class="form-label">Device Type</label> -->
                                    <select name="type" class="form-control">

                                        <option value="<?= $data['type'] ?>"><?= $data['type'] ?></option>
                                       
                                        <option value="House Hold">House Hold</option>
                                        <option value="Commerical Hold">Commerical Hold</option>
                                        <option value="Office Hold">Office Hold</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Device Brand</label>
                                    <input type="text" value="<?= $data['brand'] ?>" name="brand" class="form-control">
                                </div>
                            </div>
                      
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Device Price</label>
                                    <input type="number" value="<?= $data['price'] ?>" name="price" class="form-control">
                                </div>
                            </div>
                      
                            
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Device Unit Cosumption</label>
                                    <input type="number" value="<?= $data['unit_it_takes'] ?>" name="unit_it_takes" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Device Description</label>
                                    <input type="text" value="<?= $data['description'] ?>" name="description" class="form-control">
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <!-- <label class="form-label">Device img</label> -->
                                    <input type="file" value="<?= $data['img'] ?>" name="img" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group input-group-outline my-3">
            
                                    <input type="submit" name="edit_devices" class="btn btn-primary" value="save">
                                </div>
                            </div>
                        </div>
                    
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>