<!DOCTYPE html>
<html>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4ZBNTSRyMA2Fd33n5dQBlWUE00s/" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <body ng-app="myApp" ng-controller="formCtrl">

    
    <div class="container mt-4">
    <h1 class="display-4 text-center">
      <i class="fas fa-tasks text-primary"></i>
       <span class="text-primary">Register Here... </span>
    </h1>
    
    <form ng-submit="submitForm()">
      <div class="form-group">
        <label for="task">Name</label>
        <input type="text"  ng-model="nameInput" class="form-control" />
      </div>
      <div class="form-group">
        <label for="task">Email</label>
        <input type="email"  ng-model="emailInput" class="form-control" />
      </div>
      <input type="submit" value="Submit" class="btn btn-primary btn-block" />
    </form>
    <br/>
    <div ng-if="name!=''" class="row">
    <h3>Name : </h3>
    <h3 ng-bind="name"> </h3>
    </div>
    <div ng-if="email!=''" class="row">
    <h3>Email : </h3>
    <h3 ng-bind="email"> </h3>
    </div>
  </div>
  

    <script src="app/controllers/FormController.js">
     
    </script>
  </body>
</html>
