                <div class="row">
                    <div class="col-sm m-1">
                        
                        <div class="">
                            <table class="table">
                                <thead>
                                    <p class="p-2 text-center"><b>Inspection history</b></p>
                                    <tr>
                                        <th>Vehicle Id</th>
                                        <th>Vehicle Name</th>
                                        <th>Inspection Report</th>
                                        <th>Inspection Time</th>
            
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $inspectionhistory->fetch_assoc())
                                          { ?>  
                                    <tr>
                                        <td><a href=""><?php echo $row['v_id']; ?></a></td>
                                        <td><?php echo $row['v_name']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['inspection_time']; ?></td>
                                    </tr>
                                <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>