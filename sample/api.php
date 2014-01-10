<?php

$app = new \Slim\Slim();

/*
 * @! Get all available users info
 */
$app->get('/users',$securityCheck, function(){
    echo "All users";
});
/*
 * @! Get user info by id
 * #! param: id->int :: user id
 */
$app->get('/users/:id',function($id){
    echo "Hello $id";
});
/*
* @! Delete user by id
* #! param: id->int :: user id
*/
$app->delete('/user/:id',function($id){
    echo "Deleting $id";
});

/*
* @! Root url
*/
$app->get('/',function(){
    echo "Root";
});

$app->run();