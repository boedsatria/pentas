        <div class="sidebar-group d-print-none">
            <!-- Sidebar - Storage -->
            <div class="sidebar primary-sidebar show" id="storage">
                <div class="sidebar-header">
                    <h4>Storage Overview</h4>
                </div>
                <div class="sidebar-content">
                    <div id="justgage_five" class="mb-3" data-value="27" data-min="0" data-max="100"></div>
                    <div>
                        <div class="list-group list-group-flush mb-3">
                           
                            <a href="#files" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-file"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Your Files</p>
                                    <span class="small text-muted">27 Pages</span>
                                </div>
                                <div>
                                    <h5 class="text-primary"><?= number_format(27/1000000,2) ?> GB</h5>
                                </div>
                            </a>

                            <div class="card border shadow-none">
                                <div class="card-body text-center">
                                    <img class="img-fluid mb-3" src="assets/media/svg/upgrade.svg" alt="upgrade">
                                    <h5>Get an Upgrade</h5>
                                    <p class="text-muted">Get additional space for your documents and files. Unlock now
                                        for more space.</p>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#upgradeModal">Upgrade</button>

                                </div>
                            </div>

                            
                           
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="logo-list">
                                        <span class="text-primary rounded">
                                            <img src="">
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">a</p>
                                    <span class="small text-muted">3 Files</span>
                                </div>
    </a>
                        </div>
                    </div>
                    
                </div>

                <div class="sidebar-footer">
                    <a href="#files/add" class="btn btn-lg btn-block btn-outline-primary">
                        <i class="fa fa-cloud-upload mr-3"></i> Upload
                    </a>
                </div>
            </div>
            <!-- ./ Sidebar - Storage -->

        </div>