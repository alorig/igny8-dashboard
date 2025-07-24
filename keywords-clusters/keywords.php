<?php get_header(); ?>

<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    
    <div class="main-content">
        <div class="igny8-section">
            <div class="igny8-section-header">
                <h1>Keywords Management</h1>
                <p>Manage and organize your keyword portfolio with advanced filtering and analytics.</p>
            </div>
            
            <div class="igny8-section-body">
                <!-- 1️⃣ Filters Section (Top Panel, 2 Columns) + Analytics Visuals (Right) -->
                <section class="keywords-filters-analytics-row">
                    <div class="keywords-filters-panel">
                        <form class="keywords-filters__form">
                            <div class="filters-col">
                                <div class="filter-row">
                                    <label for="industry">Industry</label>
                                    <select id="industry" class="keywords-filters__dropdown tom-select small-select">
                                        <option>Automotive</option>
                                        <option>Home</option>
                                        <option>Fitness</option>
                                    </select>
                                </div>
                                <div class="filter-row">
                                    <label for="status">Status</label>
                                    <select id="status" class="keywords-filters__dropdown tom-select small-select">
                                        <option>New</option>
                                        <option>Clustered</option>
                                        <option>In-Use</option>
                                        <option>Orphaned</option>
                                        <option>Archived</option>
                                    </select>
                                </div>
                                <div class="filter-row">
                                    <label for="persona">Persona</label>
                                    <select id="persona" class="keywords-filters__dropdown tom-select small-select">
                                        <option>Marketer</option>
                                        <option>Engineer</option>
                                    </select>
                                </div>
                                <div class="filter-row">
                                    <label for="buyer-stage">Buyer Stage</label>
                                    <select id="buyer-stage" class="keywords-filters__dropdown tom-select small-select">
                                        <option>Awareness</option>
                                        <option>Consideration</option>
                                        <option>Decision</option>
                                        <option>Action</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filters-col">
                                <div class="filter-row">
                                    <label for="volume">Volume</label>
                                    <input id="volume" type="range" min="0" max="50000" class="keywords-filters__slider" />
                                </div>
                                <div class="filter-row">
                                    <label for="intent">Intent</label>
                                    <select id="intent" class="keywords-filters__dropdown tom-select small-select">
                                        <option>Informational</option>
                                        <option>Transactional</option>
                                        <option>Navigational</option>
                                        <option>Commercial</option>
                                    </select>
                                </div>
                                <div class="filter-row">
                                    <label for="country">Country</label>
                                    <select id="country" class="keywords-filters__dropdown tom-select small-select">
                                        <option>US</option>
                                        <option>UK</option>
                                        <option>EU</option>
                                    </select>
                                </div>
                                <div class="filter-row">
                                    <label for="search">Search</label>
                                    <input id="search" type="search" class="keywords-filters__search" placeholder="Search keywords..." />
                                </div>
                            </div>
                        </form>
                    </div>
                    <aside class="keywords-analytics-panel">
                        <!-- Analytics Visuals: Bar/Line Graph and Donut/Pie Chart -->
                        <div class="analytics-visuals">
                            <!-- Bar/Line Graph Placeholder -->
                            <div class="analytics-graph-card">
                                <!-- Replace with real chart (e.g., Chart.js) -->
                                <div class="analytics-graph-placeholder">
                                    <span class="analytics-graph-title">Keyword Volume Trend</span>
                                    <div class="analytics-bar-graph"></div>
                                </div>
                            </div>
                            <!-- Donut/Pie Chart Placeholder -->
                            <div class="analytics-donut-card">
                                <!-- Replace with real chart (e.g., Chart.js) -->
                                <div class="analytics-donut-placeholder">
                                    <span class="analytics-donut-title">Status Breakdown</span>
                                    <div class="analytics-donut-chart"></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </section>

                <!-- 2️⃣ Action Buttons Row (Right-Aligned) -->
                <div class="keywords-actions-row">
                    <button class="btn btn-primary keywords-actions__add">Add New Keyword</button>
                    <button class="btn btn-black keywords-actions__import">Import Keywords</button>
                    <button class="btn btn-outline keywords-actions__export">Export Keywords</button>
                </div>

                <!-- 3️⃣ Metrics Summary (Inline Cards) -->
                <section class="keywords-metrics-row">
                    <div class="keywords-metrics__card">
                        <div class="keywords-metrics__value">12,450</div>
                        <div class="keywords-metrics__label">Total Keywords</div>
                    </div>
                    <div class="keywords-metrics__card">
                        <div class="keywords-metrics__value">1,200</div>
                        <div class="keywords-metrics__label">Orphaned</div>
                    </div>
                    <div class="keywords-metrics__card">
                        <div class="keywords-metrics__value">87%</div>
                        <div class="keywords-metrics__label">Clustered</div>
                    </div>
                    <div class="keywords-metrics__card">
                        <div class="keywords-metrics__value">450</div>
                        <div class="keywords-metrics__label">Avg Volume</div>
                    </div>
                </section>

                <!-- 4️⃣ Bulk Actions Row (Above Table) -->
                <div class="keywords-bulk-actions-row">
                    <button class="btn btn-primary">Assign to Cluster</button>
                    <button class="btn btn-secondary">Change Status</button>
                    <button class="btn btn-secondary">Archive</button>
                    <button class="btn btn-outline">Export Selected</button>
                </div>

                <!-- 5️⃣ Main Keywords Table -->
                <main class="keywords-table-wrap">
                    <table class="keywords-table modern-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="keywords-table__select-all" /></th>
                                <th>Keyword</th>
                                <th class="right">Volume</th>
                                <th class="right">CPC</th>
                                <th class="right">CPS</th>
                                <th class="right">KD</th>
                                <th>Intent</th>
                                <th>Persona</th>
                                <th>Status</th>
                                <th>Cluster Assoc.</th>
                                <th>Country</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row 1 -->
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>best car seat covers</td>
                                <td class="right">2,400</td>
                                <td class="right">$1.20</td>
                                <td class="right">0.45</td>
                                <td class="right">32</td>
                                <td><span class="badge badge-blue">Informational</span></td>
                                <td><span class="badge badge-gray">Marketer</span></td>
                                <td><span class="badge badge-blue">New</span></td>
                                <td>Automotive Interior</td>
                                <td>US</td>
                                <td class="keywords-table__actions">
                                    <button class="btn btn-square btn-edit">Edit</button>
                                    <button class="btn btn-square btn-archive">Archive</button>
                                </td>
                            </tr>
                            <!-- Example Row 2 -->
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>leather steering wheel cover</td>
                                <td class="right">1,800</td>
                                <td class="right">$0.95</td>
                                <td class="right">0.38</td>
                                <td class="right">28</td>
                                <td><span class="badge badge-green">Commercial</span></td>
                                <td><span class="badge badge-gray">Engineer</span></td>
                                <td><span class="badge badge-green">Clustered</span></td>
                                <td>Luxury Interiors</td>
                                <td>UK</td>
                                <td class="keywords-table__actions">
                                    <button class="btn btn-square btn-edit">Edit</button>
                                    <button class="btn btn-square btn-archive">Archive</button>
                                </td>
                            </tr>
                            <!-- Example Row 3 -->
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>universal car mats</td>
                                <td class="right">3,100</td>
                                <td class="right">$0.80</td>
                                <td class="right">0.29</td>
                                <td class="right">22</td>
                                <td><span class="badge badge-blue">Navigational</span></td>
                                <td><span class="badge badge-gray">Marketer</span></td>
                                <td><span class="badge badge-red">Orphaned</span></td>
                                <td>-</td>
                                <td>EU</td>
                                <td class="keywords-table__actions">
                                    <button class="btn btn-square btn-edit">Edit</button>
                                    <button class="btn btn-square btn-archive">Archive</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- 6️⃣ Pagination Controls -->
                    <div class="keywords-pagination">
                        <button class="btn btn-tertiary">&laquo; Prev</button>
                        <span class="pagination-info">1</span>
                        <span class="pagination-info">2</span>
                        <span class="pagination-info active">3</span>
                        <button class="btn btn-tertiary">Next &raquo;</button>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 