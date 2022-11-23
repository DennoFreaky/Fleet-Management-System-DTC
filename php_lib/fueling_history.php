                <div class="row">
                    <div class="col-sm m-1">
                        
                        <div class="">
                            <table id="fuelhistory" class="table">
                                <thead>
                                    <p class="p-2 text-center"><b>Fueling History</b></p>
                                    <tr>
                                        <th>Vehicle Id</th>
                                        <th>Vehicle Name</th>
                                        <th>Fuel Amount</th>
                                        <th>Fuel Cost</th>
                                        <th>Fueling Time</th>
            
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $fuelinghistory->fetch_assoc()){ ?>  
                                    <tr>
                                        <td><a href=""><?php echo $row['v_id']; ?></a></td>
                                        <td><?php echo $row['v_name']; ?></td>
                                        <td><?php echo $row['v_fueltank']." L"; ?></td>
                                        <td><?php echo "Ksh ".$row['fuelcost']; ?></td>
                                        <td><?php echo $row['fueling_date']; ?></td>
                                    </tr>
                                <?php }; ?>
                                </tbody>
                            </table>
                            <script>
                                $(document).ready(function () {
                                $('#fuelhistory').DataTable();
                                });
                            </script>
                        </div>
                    </div>
                </div>