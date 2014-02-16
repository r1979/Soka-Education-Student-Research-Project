<script id="tbody-content" type="type/x-handlebars-template">
  {{#each posts}}
    <tr>
      <td class="item-title">{{title}}</td>
      <td class="item-author">
        {{#each taxonomy_authors}}
        {{title}}
        {{/each}}
      </td>
      <td class="item-issue">
        {{#each taxonomy_published_issue}}
        {{title}}
        {{/each}}
      </td>
      <td class="item-pages">{{custom_fields.pages}}</td>
      <td>
      {{#each taxonomy_published_issue}}
      <a href="{{description}}" class="button tiny secondary"><strong>Read</strong></a>
      {{/each}}
      </td>
      <td>
        <a title="vote" target="_blank" class="button tiny success wpv_voting" href="javascript:void(0)">
          <span class="wpv_votebtn_txt"><strong>Vote</strong></span>
          <input type="hidden" class="postID" value="{{id}}">
          <input type="hidden" class="userID" value="2">
          <input type="hidden" class="authorID" value="2">
        </a>
      </td>
    </tr>
  {{/each}}
</script>

<script>
  function post_content(){
    console.log(context.responseJSON);
    var html      = template(context.responseJSON);
    jQuery('#tbody').html(html);
    jQuery('#table').dataTable({
      "sPaginationType": "full_numbers",
      "bLengthChange": true,
      "bFilter": true,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": true,
    });
  }
  var source    = jQuery('#tbody-content').html();
  var template  = Handlebars.compile(source);
  var context   = jQuery.getJSON('http://whowroteforsesrp.com/wp-content/themes/FoundationPress/curl_file.json', function( data ){
    post_content();
  });

</script>
