<!-- Content Header -->
<div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- User Information Card -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">User Information</h3>
                                </div>
                                <div class="card-body">
                                    <p><strong>Username:</strong> <?php echo htmlspecialchars($user_info[0]['username']); ?></p>
                                    <p><strong>Email:</strong> <?php echo htmlspecialchars($user_info[0]['email']); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Statistics Cards -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Statistics</h3>
                                </div>
                                <div class="card-body">
                                    <p><strong>Total Users:</strong> <?php echo htmlspecialchars($total_users); ?></p>
                                    <p><strong>Total Posts:</strong> <?php echo htmlspecialchars($total_posts); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Activities Card -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Activities</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <?php foreach ($recent_activities as $activity): ?>
                                            <li><?php echo htmlspecialchars($activity['activity']); ?> - <small><?php echo htmlspecialchars($activity['date']); ?></small></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>