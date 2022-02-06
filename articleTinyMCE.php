<?php
/*session_start();*/
//include "fonction.php";
/*verif_connect();*/
include "head.php";
//var_dump($_SESSION) . " est connecté";

?>





  <script src="https://cdn.tiny.cloud/1/6ehken9hvteebl1r99faltlkw7bebge101op29k5hkmjudpd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <div class="container sm">
  <form action="" method="POST">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="submit" value="Preview">
  </form>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
  <br>

  </div>
  <script>
var myContent = tinymce.get("myTextarea").getContent();
console.log(myContent);
  </script>
</body>
</html>
