<!-- Put this script tag to the <head> of your page -->
<script src="http://userapi.com/js/api/openapi.js?52"></script>

<script>
  VK.init({apiId: 3088351, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script>
VK.Widgets.Comments("vk_comments", {limit: 10, width: "650", attach: "*"});
</script>