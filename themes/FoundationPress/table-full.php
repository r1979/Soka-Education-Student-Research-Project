<?php
/*
Template Name: Table Full
*/

?>
<?php get_header(); ?>
  <div class="row head-top">
    <div class="column">

      <table id="table">
        <thead>
          <tr>
            <th>Papers</th>
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>

    </div>
  </div>

<script id="tbody-content" type="type/x-handlebars-template">
  <tr>
    {{#each posts}}
      <td>{{title}}</td>
      {{#each taxonomy_authors}}
      <td>{{title}}</td>
      {{/each}}
      {{#each taxonomy_published_issue}}
      <td>Published: {{title}}</td>
      {{/each}}
      <td>{{custom_fields.published_pages}}</td>
    {{/each}}
  </tr>
</script>

<script>
  var source    = $('#tbody').html();
  var template  = Handlebars.compile(source);
  var context   = jQuery.getJSON('curl_file.json', function( data ){});
  var html      = template(context);
</script>




<?php get_footer(); ?>