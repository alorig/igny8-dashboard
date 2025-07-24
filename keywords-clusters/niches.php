<?php get_header(); ?>

<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    
    <div class="main-content">
        <div class="igny8-section">
            <div class="igny8-section-header">
                <h1>Niche Management</h1>
                <p>Manage niche segments and analyze keyword clustering performance across different market segments.</p>
            </div>
            
            <div class="igny8-section-body">
                <!-- 1️⃣ Sticky Active Niche Selector -->
                <nav class="niche-selector sticky">
                    <div class="niche-selector__active">
                        <label for="active-niche" class="niche-selector__label">Active Niche</label>
                        <select id="active-niche" class="niche-selector__dropdown tom-select">
                            <option selected>Automotive Interior</option>
                            <option>Home Automation</option>
                            <option>Fitness Equipment</option>
                        </select>
                        <span class="niche-selector__badge">Clusters: 340 | Keywords: 12,450</span>
                    </div>
                </nav>

                <!-- 2️⃣ Sticky Top-Right Actions (visible on scroll) -->
                <div class="niche-actions sticky-top-right">
                    <button class="btn btn-primary niche-actions__add">Add New Niche</button>
                    <button class="btn btn-black niche-actions__import">Import Keywords</button>
                    <button class="btn btn-outline niche-actions__export">Export Reports</button>
                </div>

                <!-- 3️⃣ Sticky Filters Panel (Top Bar) -->
                <aside class="niche-filters sticky">
                    <form class="niche-filters__form">
                        <label>Industry
                            <select class="niche-filters__dropdown tom-select small-select">
                                <option>Automotive</option>
                                <option>Home</option>
                                <option>Fitness</option>
                            </select>
                        </label>
                        <label>Status
                            <select class="niche-filters__dropdown tom-select small-select">
                                <option>Active</option>
                                <option>Archived</option>
                            </select>
                        </label>
                        <label>Volume
                            <input type="range" min="0" max="50000" class="niche-filters__slider" />
                        </label>
                        <label>Intent
                            <select class="niche-filters__dropdown tom-select small-select">
                                <option>Informational</option>
                                <option>Transactional</option>
                            </select>
                        </label>
                        <label>Persona
                            <select class="niche-filters__dropdown tom-select small-select">
                                <option>Marketer</option>
                                <option>Engineer</option>
                            </select>
                        </label>
                        <label>Buyer Stage
                            <select class="niche-filters__dropdown tom-select small-select">
                                <option>Awareness</option>
                                <option>Consideration</option>
                                <option>Decision</option>
                                <option>Action</option>
                            </select>
                        </label>
                    </form>
                </aside>

                <!-- 4️⃣ Niche Overview Metrics (Top Row Cards) -->
                <section class="niche-metrics">
                    <div class="niche-metrics__card">
                        <div class="niche-metrics__value">12,450</div>
                        <div class="niche-metrics__label">Total Keywords</div>
                    </div>
                    <div class="niche-metrics__card">
                        <div class="niche-metrics__value">340</div>
                        <div class="niche-metrics__label">Total Clusters</div>
                    </div>
                    <div class="niche-metrics__card">
                        <div class="niche-metrics__value">87%</div>
                        <div class="niche-metrics__label">% Clustered</div>
                    </div>
                    <div class="niche-metrics__card">
                        <div class="niche-metrics__value">1,200</div>
                        <div class="niche-metrics__label">Orphaned Keywords (13%)</div>
                    </div>
                </section>

                <!-- 5️⃣ Breakdown Panels (Main Content) -->
                <main class="niche-breakdown-panels">
                    <!-- Left Panel: Top Opportunity Segments -->
                    <section class="niche-opportunity-panel">
                        <h2 class="niche-panel__title">Top Opportunity Segments</h2>
                        <div class="niche-chips">
                            <span class="chip badge-blue">Persona: Marketer</span>
                            <span class="chip badge-green">Intent: Informational</span>
                            <span class="chip badge-accent">Geo: US</span>
                            <span class="chip badge-gray">Persona: Engineer</span>
                            <span class="chip badge-warning">Intent: Transactional</span>
                            <span class="chip badge-info">Geo: EU</span>
                        </div>
                    </section>

                    <!-- Right Panel: Cluster Status Progress Bars -->
                    <section class="niche-cluster-status-panel">
                        <h2 class="niche-panel__title">Cluster Status</h2>
                        <div class="niche-progress">
                            <div class="niche-progress__bar niche-progress__finalized">
                                <span class="niche-progress__label">Finalized</span>
                                <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 60%"></div></div>
                                <span class="niche-progress__percent">60%</span>
                            </div>
                            <div class="niche-progress__bar niche-progress__in-progress">
                                <span class="niche-progress__label">In Progress</span>
                                <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 30%"></div></div>
                                <span class="niche-progress__percent">30%</span>
                            </div>
                            <div class="niche-progress__bar niche-progress__new">
                                <span class="niche-progress__label">New</span>
                                <div class="niche-progress__track"><div class="niche-progress__fill" style="width: 10%"></div></div>
                                <span class="niche-progress__percent">10%</span>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?> 