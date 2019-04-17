  <div ng-app="comments" ng-controller="commentsCtrl">
    <ul>
      <li ng-repeat="comment in comments">
        <header>
          <h1 id="autor" class="author">Liu Jim</h1>
          <div>
            <!--
            <button ng-click="love(comment.id)" ng-class="{ loved: comment.loved }"></button>
            -->
            <button ng-click="reply(comment.author.name)"></button>
          </div>
        </header>
        <p id="comentario"></p>
      </li>      
    </ul>

  </div>

