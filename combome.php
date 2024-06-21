<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Chosen: A jQuery Plugin by Harvest to Tame Unwieldy Select Boxes</title>
  <link rel="stylesheet" href="docsupport/style.css">
  <link rel="stylesheet" href="docsupport/prism.css">
  <link rel="stylesheet" href="chosen.css">
  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
</head>
<body>
  <form>
    <div id="container">
      <div id="content">
	  
      <h2><a name="allow-deselect-on-single-selects" class="anchor" href="#allow-deselect-on-single-selects">Allow Deselect on Single Selects</a></h2>
      <div class="side-by-side clearfix">
        <p>When a single select box isn't a required field, you can set <code class="language-javascript">allow_single_deselect: true</code> and Chosen will add a UI element for option deselection. This will only work if the first option has blank text.</p>
        <div class="side-by-side clearfix">
          <select data-placeholder="Your Favorite Type of Bear" style="width:250px;" class="chosen-select-deselect" tabindex="12">
            <option value=""></option>
            <option>American Black Bear</option>
            <option>Asiatic Black Bear</option>
            <option>Brown Bear</option>
            <option>Giant Panda</option>
            <option selected>Sloth Bear</option>
            <option>Sun Bear</option>
            <option>Polar Bear</option>
            <option>Spectacled Bear</option>
          </select>
        </div>
      </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  </form>
  <div class="oss-bar">
    <ul>
      <li><a class="fork" href="https://github.com/harvesthq/chosen">Fork on Github</a></li>
      <li><a class="harvest" href="http://www.getharvest.com/">Built by Harvest</a></li>
    </ul>
  </div>
</body>
</html>
