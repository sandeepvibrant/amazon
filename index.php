<!doctype html>
<head>
  <meta charset="utf-8">

  <title>My Parse App</title>
  <meta name="description" content="My Parse App">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.2.19.min.js"></script>
</head>

<body>
  
  <div id="main">
    <h1>You're ready to use Parse!</h1>

    <?php echo'<p>Read the documentation and start building your JavaScript app:</p>'; ?>

    <ul>
      <li><a href="https://www.parse.com/docs/js_guide">Parse JavaScript Guide</a></li>
      <li><a href="https://www.parse.com/docs/js">Parse JavaScript API Documentation</a></li>
    </ul>

    <div style="display:none" class="error">
      Looks like there was a problem saving the test object. Make sure you've set your application ID and javascript key correctly in the call to <code>Parse.initialize</code> in this file.
    </div>

    <div style="display:none" class="success">
      <p>We've also just created your first object using the following code:</p>
      
        <code>
          var TestObject = Parse.Object.extend("TestObject");<br/>
          var testObject = new TestObject();<br/>
          testObject.save({foo: "bar"});
        </code>
    </div>
  </div>

  <script type="text/javascript">
    Parse.initialize("VAM59UY8jrwV0OCxAwMd1458FwadHkOKxE80T4FO", "HtoUGDtUib7ZhaAVvDdwpnkHMb1A0hFr2Uk1d8Fj");
    
    var TestObject = Parse.Object.extend("TestObject");
    var testObject = new TestObject();
      testObject.save({foo: "bar"}, {
      success: function(object) {
        $(".success").show();
      },
      error: function(model, error) {
        $(".error").show();
      }
    });
  </script>
</body>

</html>
