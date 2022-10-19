
                    <table class="table">
                        <h2 class="my-2 text-center">Assign driver here</h2>
                        <thead><?php require_once '../vehicle/v_assign_process.php';?>
                            <tr><?php if ($update == true):?>
                                <th>Driver Firstname</th>
                                <?php else: ?>
                                <th>From vehicles table</th>
                                <?php endif; ?>
                        
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php if($row1 = $novehicle->fetch_assoc()):?>
                                
                            <tr>
                                <?php require_once '../vehicle/v_assignment_tbl/v_assign_process.php';?>
                                <form method="post" action="../vehicle/v_assignment_tbl/v_assign_process.php" id="">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <td>
                                    <?php // Assigning a driver to a vehicle ?>
                                    <?php if ($update == true):?>
                                    <input list="vname" name="v_name" type="text" id="v_name" class="btn btn-light btn-outline-secondary"/>
                                        <datalist id="vname">
                                        <?php while($row = $nodriver->fetch_assoc()):?>
                                            <option value="<?php echo $row['v_name']; ?>">
                                        <?php endwhile; ?>
                                        </datalist>
                                    <?php else: ?>
                                    <p>Unassigned vehicle : <?php if($rowcount1 == 0){ ?>
                                        <b class="text-success"><?php echo $rowcount1 ?> </b>
                                     <?php }else { ?>
                                        <b class="text-primary"> <?php echo $rowcount1 ?></b>
                                    </p>
                                    <?php } endif; ?>
                                </td>
                                <td>
                                    <?php if ($update == true):?>
                                    <button type="submit" name="update" class="btn btn-primary">Assign</button>
                                    <?php else: ?>
                                    <a href="../vehicle/v_unassigned.php?edit=<?php echo $row1['id']; ?>"
                                    class="btn text-light editbtn">Press here to assign driver and vehicles</a>
                                    <?php endif; ?>
                                </form>
                                    <a href="../vehicle/v_unassigned.php?delete=<?php echo $row1['v_name']; ?>"
                                    class="btn btn-danger">Remove assignment</a>              
                                </td>  
                            </tr>
                            <?php endif; ?>
         
                            
                            
                        </tbody>
                    </table>