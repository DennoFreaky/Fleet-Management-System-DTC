                <div class="row shadow" style="">
                    <div class="col my-2 text-start">
                        <h4>Garages</h4><hr>
                        <div class="row dropdown">
                            <div class="col-sm text-start">
                            <?php while($row = $garages->fetch_assoc()): ?>
                                <a href="<?php echo $row['g_link']; ?>">
                                <p><b class="text-dark">Name: </b><?php echo $row['g_name']; ?></p>
                                <p><b class="text-dark"> Location: </b><?php echo $row['g_location']; ?></p></a><hr>
                                
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm my-2 text-center">
                        <h4>VENDORS</h4><hr>
                        <div class="row dropdown">
                            <div class="col-sm text-start">
                            <?php while($row1 = $vendors->fetch_assoc()): ?>
                                <a href="<?php echo $row1['vendor_link']; ?>">
                                <p><b class="text-dark">Name: </b><?php echo $row1['vendor_name']; ?></p>
                                <p><b class="text-dark"> Location: </b><?php echo $row1['vendor_address']; ?></p></a><hr>
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-2 text-center">      
                        <h4>Map</h4><hr>
                        <div class="row" style="overflow:hidden;">
                            <img src="../pics/shell-fuel-station-in-europe_100590975_m.jpg"/>
                            <div class="col text-center">
                                <p>Garage name </p>
                            </div>
                            <div class="col text-center">
                                <p>more info</p>
                            </div>
                        </div>
                    </div>
                </div>