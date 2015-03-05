<?php

class CommentsResourceCest
{
    protected $endpoint = '/api/comments';

    // tests
    public function getAllComments(ApiTester $I)
    {
        $id = (string) $this->haveComment($I, ['author' => 'Game of Thrones']);
        $id2 = (string) $this->haveComment($I, ['author' => 'Lord of the Rings']);
        $I->sendGET($this->endpoint);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->expect('both items are in response');
        $I->seeResponseContainsJson(['id' => $id, 'author' => 'Game of Thrones', 'text' => 'text']);
        $I->seeResponseContainsJson(['id' => $id2, 'author' => 'Lord of the Rings', 'text' => 'text']);
        $I->expect('both items are in root array');
        $I->seeResponseContainsJson([['id' => $id], ['id' => $id2]]);
    }

    public function createComment(ApiTester $I)
    {
        $I->sendPOST($this->endpoint, ['author' => 'Game of Rings', 'text' => 'By George Tolkien']);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['success' => true]);
    }

    public function deleteComment(ApiTester $I)
    {
        $id = (string) $this->haveComment($I, ['author' => 'Game of Thrones']);
        $I->sendDELETE($this->endpoint."/$id");
        $I->seeResponseCodeIs(200);
        $I->seeResponseContainsJson(['success' => true]);
        $I->dontSeeRecord('Comments', ['id' => $id]);
    }

    private function haveComment(ApiTester $I, $data = [])
    {
        $data = array_merge([
                'author' => 'Game of Thrones',
                'text' => 'text',
                'created_at' => new DateTime(),
                'updated_at' => new  DateTime(),
        ], $data);

        return $I->haveRecord('Comments', $data);
    }
}