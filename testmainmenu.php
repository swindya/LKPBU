<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Flat Nav</title>

<link href="style.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="animate.min.css" />
<link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="demo">
	<nav>
		<ul>
			<li>
				<a href="#">
					<span>Home</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>About</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Portfolio</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span>Contact</span>
				</a>
			</li>
			
		</ul>
	</nav>
</div>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });

</script>
</body>
</html>