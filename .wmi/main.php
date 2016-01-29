<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Portal: Corvallis Reuse and Repair Directory</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
  <h1>Administrator Portal</h1>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Manage REUSE Content</h3>
        </div>
        <div id="reuse-panel-body" class="panel-body">

          <h4>Reuse Businesses</h4>
          <div class="list-group">
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">View business</h4>
                  <p class="list-group-item-text">View existing business in the database.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
        			<div class="row">
        				<div class="col-xs-1">
        					<span class="glyphicon glyphicon-plus" style="margin-top:10px;"></span>
        				</div>
        				<div class="col-xs-11">
        					<h4 class="list-group-item-heading">Add business</h4>
        					<p class="list-group-item-text">Create a new business and add it to the database.</p>
        				</div>
          		</div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-pencil"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">Edit business</h4>
                  <p class="list-group-item-text">Edit existing business information.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-remove"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">Remove business</h4>
                  <p class="list-group-item-text">Delete a business from the database.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
          </div>

          <h4>Reuse Item Categories</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">visibility</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">View item categories</h5>
                <p class="list-group-item-text">View existing item categories in the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item category</h5>
                <p class="list-group-item-text">Create a new item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item category</h5>
                <p class="list-group-item-text">Edit an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item category</h5>
                <p class="list-group-item-text">Delete an item category from the database.
                  <span class="text-warning">Warning: removing a category removes all items within a category, and removes
                  those items from businesses that currently accept those items.</span></p>
              </div>
            </div>
          </div>

          <h4>Reuse Items</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">visibility</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">View items</h5>
                <p class="list-group-item-text">View existing items in the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item</h5>
                <p class="list-group-item-text">Create a new item and add it to an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item</h5>
                <p class="list-group-item-text">Edit the name of an existing item.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item</h5>
                <p class="list-group-item-text">Delete an item from the database.
                  <span class="text-warning">Warning: removing an item removes it from all business that accept that item.</span></p>
              </div>
            </div>
            <div class="list-group-separator"></div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Manage REPAIR Content</h3>
        </div>
        <div id="repair-panel-body" class="panel-body">

          <h4>Repair Businesses</h4>
          <div class="list-group">
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-eye-open"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">View business</h4>
                  <p class="list-group-item-text">View existing business in the database.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
        			<div class="row">
        				<div class="col-xs-1">
        					<span class="glyphicon glyphicon-plus" style="margin-top:10px;"></span>
        				</div>
        				<div class="col-xs-11">
        					<h4 class="list-group-item-heading">Add business</h4>
        					<p class="list-group-item-text">Create a new business and add it to the database.</p>
        				</div>
          		</div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-pencil"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">Edit business</h4>
                  <p class="list-group-item-text">Edit existing business information.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
            <a class="list-group-item">
              <div class="row">
                <div class="col-xs-1" style="margin-top:10px;">
                  <span class="glyphicon glyphicon-remove"></span>
                </div>
                <div class="col-xs-11">
                  <h4 class="list-group-item-heading">Remove business</h4>
                  <p class="list-group-item-text">Delete a business from the database.</p>
                </div>
              </div>
            </a>
            <div class="list-group-separator"></div>
          </div>


          <h4>Repair Items</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">visibility</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">View items</h5>
                <p class="list-group-item-text">View existing items in the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add item</h5>
                <p class="list-group-item-text">Create a new item and add it to an existing item category.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit item</h5>
                <p class="list-group-item-text">Edit the name of an existing item.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove item</h5>
                <p class="list-group-item-text">Delete an item from the database.
                  <span class="text-warning">Warning: removing an item removes it from all business that accept that item.</span></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Manage RECYCLE Content</h3>
        </div>
        <div id="recycle-panel-body" class="panel-body">

          <h4>Recycle Links</h4>
          <div class="list-group">
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">add_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Add a new link</h5>
                <p class="list-group-item-text">Add a new hyperlink to the database.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">edit</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Edit link</h5>
                <p class="list-group-item-text">Edit an existing hyperlink.</p>
              </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
              <div class="row-action-primary">
                <i class="material-icons">remove_circle_outline</i>
              </div>
              <div class="row-content">
                <h5 class="list-group-item-heading">Remove link</h5>
                <p class="list-group-item-text">Delete a hyperlink from the database.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>