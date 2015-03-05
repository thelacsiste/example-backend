<?php

class RoutesCest
{

    public function openPageByRoute(FunctionalTester $I)
    {
        $I->amOnRoute('api.comments.index');
        $I->seeCurrentUrlEquals('/api/comments');
        $I->seeCurrentActionIs('CommentController@index');
    }

    public function openPageByAction(FunctionalTester $I)
    {
        $I->amOnAction('CommentController@index');
        $I->seeCurrentUrlEquals('/api/comments');
        $I->seeCurrentRouteIs('api.comments.index');
    }

}