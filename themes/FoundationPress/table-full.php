<?php
/*
Template Name: Table Full
*/

?>
<?php get_header(); ?>

  <div class="row">
    <div class="column">

      <table id="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Issue</th>
            <th>Location</th>
            <th>Read</th>
            <th>Vote</th>
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>

    </div>
  </div>

<?php get_template_part('handlebars', 'table'); ?>

<?php get_footer(); ?>
