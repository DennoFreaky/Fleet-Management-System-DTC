
                        <h2 class="my-2 text-center">Assign driver here</h2>
                        <div class="col"></div>
                        <div class="col text-center">
                            <?php require_once '../vehicle/v_assignment_tbl/v_assign_process.php'; ?>
                            <form class="form-row" style="font-weight:bold;"method="POST" action="../vehicle/v_assignment_tbl/v_assign_process.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <div class="col form-group my-2">
                                    <label for="fname">Driver Being Assigned The Vehicle</label>
                                    <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" id="fname" placeholder="driver name"/>
                                    <label for="v_id">Vehicle ID</label>
                                    <input type="number" class="form-control" name="v_id" value="<?php echo $v_id; ?>" id="v_id" placeholder="vehicle id"/>
                                    <label for="v_name">Vehicle Name</label>
                                    <input type="text" list="vehicle" class="form-control" name="vname" value="<?php echo $v_name; ?>" id="v_name" placeholder="vehicle name"/>
                                    <?php if($update == true): ?>
                                        <datalist id="vehicle">
                                        <?php while($row = $d_unassigned->fetch_assoc()):?>
                                            <option value="<?php echo $row['v_name']; ?>">
                                        <?php endwhile; ?>
                                        </datalist>
                                    <?php endif; ?>
                                </div>
                                <div class="text-center form-group my-2">
                                <?php if($update == true): ?>
                                    <i class="">auto-selected vehicle by the system</i>
                                    <button type="submit" name="update" class="my-2 btn btn-dark text-success form-control"><b>CONFIRM VEHICLE ASSIGNMENT</b></button>
                                <?php endif; ?>
                                </div>
                            </form>
                        </div>
                        <div class="col"></div>
                        