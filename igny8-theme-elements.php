<?php
/*
Template Name: Igny8 Theme Elements
*/
if (!current_user_can('administrator')) {
  wp_die('You do not have permission to view this page.');
}
get_header();
?>
<div class="page-main-container">
  <h1>Igny8 Theme Elements</h1>
  <section>
    <h2>Typography & Fonts</h2>
    <div class="typography-demo">
      <h1>Heading 1 <span class="chip chip-blue">.h1</span></h1>
      <h2>Heading 2 <span class="chip chip-blue">.h2</span></h2>
      <h3>Heading 3 <span class="chip chip-blue">.h3</span></h3>
      <p>Paragraph text <span class="chip chip-blue">p</span></p>
      <span class="text-small">Small text <span class="chip chip-blue">.text-small</span></span><br>
      <span class="text-large">Large text <span class="chip chip-blue">.text-large</span></span><br>
      <span class="text-bold">Bold text <span class="chip chip-blue">.text-bold</span></span>
    </div>
  </section>
  <section>
    <h2>Colors</h2>
    <div class="color-palette-demo">
      <div class="chip chip-blue">Primary Blue <span>.chip-blue</span></div>
      <div class="chip chip-green">Green <span>.chip-green</span></div>
      <div class="chip chip-pink">Accent Pink <span>.chip-pink</span></div>
      <div class="chip chip-gray">Gray <span>.chip-gray</span></div>
      <div class="chip" style="background:#e67e22;color:#fff;">Orange <span>custom</span></div>
    </div>
  </section>
  <section>
    <h2>Spacing & Utility Classes</h2>
    <div class="spacing-demo">
      <div class="card m-20 p-20">.m-20 .p-20 (margin 20px, padding 20px)</div>
      <div class="card mb-10 mt-10">.mb-10 .mt-10 (margin-bottom/top 10px)</div>
    </div>
  </section>
  <section>
    <h2>Cards & Boxes</h2>
    <div class="grid grid-2">
      <div class="card card-primary">.card .card-primary</div>
      <div class="card card-success">.card .card-success</div>
      <div class="card card-warning">.card .card-warning</div>
      <div class="card card-info">.card .card-info</div>
      <div class="card card-small">.card .card-small</div>
      <div class="card card-large">.card .card-large</div>
    </div>
  </section>
  <section>
    <h2>Buttons</h2>
    <div class="button-demo">
      <button class="btn btn-primary">.btn .btn-primary</button>
      <button class="btn btn-secondary">.btn .btn-secondary</button>
      <button class="btn btn-success">.btn .btn-success</button>
      <button class="btn btn-warning">.btn .btn-warning</button>
      <button class="btn btn-outline">.btn .btn-outline</button>
      <button class="btn btn-small btn-primary">.btn .btn-small .btn-primary</button>
      <button class="btn btn-large btn-primary">.btn .btn-large .btn-primary</button>
    </div>
  </section>
  <section>
    <h2>Pills & Badges</h2>
    <div class="pill-demo">
      <span class="badge badge-blue">.badge .badge-blue</span>
      <span class="badge badge-green">.badge .badge-green</span>
      <span class="badge badge-orange">.badge .badge-orange</span>
      <span class="badge badge-gray">.badge .badge-gray</span>
      <span class="badge badge-purple">.badge .badge-purple</span>
      <span class="badge badge-teal">.badge .badge-teal</span>
      <span class="chip chip-blue">.chip .chip-blue</span>
      <span class="chip chip-green">.chip .chip-green</span>
      <span class="chip chip-pink">.chip .chip-pink</span>
      <span class="chip chip-gray">.chip .chip-gray</span>
    </div>
  </section>
  <section>
    <h2>Tables</h2>
    <div class="table-demo">
      <table class="keywords-table">
        <thead>
          <tr><th>Header 1</th><th>Header 2</th><th>Header 3</th></tr>
        </thead>
        <tbody>
          <tr><td>Row 1 Col 1</td><td>Row 1 Col 2</td><td>Row 1 Col 3</td></tr>
          <tr><td>Row 2 Col 1</td><td>Row 2 Col 2</td><td>Row 2 Col 3</td></tr>
        </tbody>
      </table>
    </div>
  </section>
</div>
<?php get_footer(); ?> 