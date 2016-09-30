<html>
  <head>
    <title>Lumen-Angular App</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>

  <style>
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
      display: none !important;
    }
  </style>

  <body>

    <div ng-app="myApp" ng-controller="usersCtrl">
    <div class="test"></div>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ng-cloak" ng-repeat="user in users">
            <td>{{user.id}}</td>
            <td>{{user.firstName}}</td>
            <td>{{user.lastName}}</td>
            <td><button ng-click="confirmDelete(user.id)">Delete</button></td>
            <td><button ng-click="editUser(user.id)">Edit</button></td>
          </tr>
        </tbody>
      </table>

      <form>
        <div class="input"><input type="text" ng-model="firstName" placeholder="eg. Andrejs"></div>
        <div class="input"><input type="text" ng-model="lastName" placeholder="eg. Gubars"></div>
        <button ng-click="addNewUser()">Add new User</button>
      </form>

    </div>
  

  <script src="/js/app.js"></script>
  </body>
</html>